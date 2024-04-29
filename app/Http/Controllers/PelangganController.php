<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
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

    public function edit($id) {
        $profile = DB::table('profile')->find($id);
        return view('pelanggan.editpelanggan', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' =>'required',
            'nohp' =>'required',
            'alamat' =>'required',
        ]);

        $request = DB::table('profile')
        ->where('id', $id)
        ->update([ //kolom yang mau diambil 
            'nama_lengkap' => $request->nama,
            'no_hp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);

        SweetAlert::success('Success', 'Data Berhasil di Update');
        return redirect('/pelanggan');
    }
} 
