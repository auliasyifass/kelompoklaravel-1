<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use App\Models\Pelajar;

class PelajarController extends Controller
{
    public function index()
    {
        $pelajars = Pelajar::all();
        return view('pelajar.index', compact('pelajars'));
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

        Pelajar::create($request->all());
        SweetAlert::success('Success', 'Data Berhasil');
        return redirect()->route('pelajar.index')->with('success', 'Pelajar berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pelajar = Pelajar::findOrFail($id);
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

        $pelajar = Pelajar::findOrFail($id);
        $pelajar->update($request->all());

        return redirect()->route('pelajar.index')->with('success', 'Data pelajar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelajar = Pelajar::findOrFail($id);
        $pelajar->delete();

        return redirect()->route('pelajar.index')->with('success', 'Data pelajar berhasil dihapus.');
    }
}
