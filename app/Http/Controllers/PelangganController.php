<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel profile
        $profile = DB::table('profile')->get();

        return view('pages.pelanggan');
    }


    public function pelanggan(Request $request){

        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'nohp' => 'required',
            'alamt' => 'required',
        ]);

        DB::table('profile')-> insert([
            'nama_lengkap' => $request->nama,
            'nis' => $request->nis,
            'no_hp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);

        

        return redirect('/pelanggan'); }

    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }
    
}
