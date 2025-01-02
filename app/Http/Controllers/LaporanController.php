<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Anggota;
use App\Models\Kader;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
       $this->authorize('viewLaporan', Laporan::class);
    $laporans = Laporan::with(['anggota', 'kader'])->get();
    return view('laporans.index', compact('laporans'));
    }

    public function create()
    {
        $anggotas = Anggota::all();
        $kaders = Kader::all();
        return view('laporan.create', compact('anggotas', 'kaders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|exists:anggotas,nik',
            'id_kader' => 'required|exists:kaders,id_kader',
            'tanggal' => 'required|date',
        ]);

        Laporan::create($request->all());

        return redirect()->route('laporans.index')->with('success', 'Laporan berhasil ditambahkan.');
    }

    public function edit(Laporan $laporan)
    {
        $anggotas = Anggota::all();
        $kaders = Kader::all();
        return view('laporans.edit', compact('laporan', 'anggotas', 'kaders'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'nik' => 'required|exists:anggotas,nik',
            'id_kader' => 'required|exists:kaders,id_kader',
            'tanggal' => 'required|date',
        ]);

        $laporan->update($request->all());

        return redirect()->route('laporans.index')->with('success', 'Laporan berhasil diupdate.');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('laporans.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
