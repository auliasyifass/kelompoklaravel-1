<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use App\Models\pelajar;

class pelajarController extends Controller
{
    public function index()
    {
        $pelajar = pelajar::all();
        return view('pelajar.index', compact('pelajar'));
    }

    public function create()
    {
        return view('pelajar.tambahpelajar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        pelajar::create($request->all());
        SweetAlert::success('Success', 'Data Berhasil');
        return redirect()->route('pelajar.index')->with('success', 'pelajar berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pelajar = pelajar::findOrFail($id);
        return view('pelajar.edit', compact('pelajar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $pelajar = pelajar::findOrFail($id);
        $pelajar->update($request->all());

        return redirect()->route('pelajar.index')->with('success', 'Data pelajar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelajar = pelajar::findOrFail($id);
        $pelajar->delete();

        return redirect()->route('pelajar.index')->with('success', 'Data pelajar berhasil dihapus.');
    }
}
