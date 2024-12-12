<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggotas.index', compact('anggotas'));
    }

    public function create()
    {
        return view('anggotas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:anggotas,nik|max:16',
            'nama' => 'required|max:255',
            'alamat' => 'nullable',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit(Anggota $anggota)
    {
        return view('anggotas.edit', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nik' => 'required|max:16|unique:anggotas,nik,' . $anggota->nik . ',nik',
            'nama' => 'required|max:255',
            'alamat' => 'nullable',
        ]);

        $anggota->update($request->all());

        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil diupdate.');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
