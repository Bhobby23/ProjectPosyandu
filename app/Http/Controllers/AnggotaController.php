<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
{
    $this->authorize('viewAny', Anggota::class);
    $anggotas = Anggota::all();
    return view('anggotas.index', compact('anggotas'));
}

public function create()
    {
        $this->authorize('create', Anggota::class); // Memastikan hanya kader yang bisa mengakses
        return view('anggotas.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Anggota::class); // Memastikan hanya kader yang bisa mengakses

        // Validasi data
        $request->validate([
            'nik' => 'required|unique:anggotas|max:16',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

       // Buat Anggota baru
       $anggota = Anggota::create($request->all());

        // Redirect setelah berhasil menyimpan
        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil ditambahkan.');
    }


public function edit(Anggota $anggota)
{
    $this->authorize('update', $anggota); // Hanya kader yang bisa mengedit
    return view('anggotas.edit', compact('anggota'));
}

public function update(Request $request, Anggota $anggota)
    {
        // Hanya kader yang bisa memperbarui anggota
        $this->authorize('update', $anggota);

        // Validasi data
        $request->validate([
            'nik' => 'required|max:16|unique:anggotas,nik,' . $anggota->nik . ',nik',
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
        ]);

        // Perbarui anggota
        $anggota->update($request->all());
        

        // Redirect setelah berhasil memperbarui
        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil diupdate.');
    }

    // Menghapus anggota
    public function destroy(Anggota $anggota)
    {
        // Hanya kader yang bisa menghapus anggota
        $this->authorize('delete', $anggota);

        // Hapus anggota
        $anggota->delete();

        // Redirect setelah berhasil menghapus
        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil dihapus.');
    }

}
