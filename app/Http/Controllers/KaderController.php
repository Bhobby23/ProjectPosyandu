<?php

namespace App\Http\Controllers;

use App\Models\Kader;
use Illuminate\Http\Request;

class KaderController extends Controller
{
    public function index()
{
    $this->authorize('viewKader', Kader::class);
    $kaders = Kader::all();
    return view('kaders.index', compact('kaders'));
}


    public function create()
    {
        return view('kaders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        Kader::create($request->all());

        return redirect()->route('kaders.index')->with('success', 'Kader berhasil ditambahkan.');
    }

    public function edit(Kader $kader)
    {
        return view('kaders.edit', compact('kader'));
    }

    public function update(Request $request, Kader $kader)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        $kader->update($request->all());

        return redirect()->route('kaders.index')->with('success', 'Kader berhasil diupdate.');
    }

    public function destroy(Kader $kader)
    {
        $kader->delete();

        return redirect()->route('kaders.index')->with('success', 'Kader berhasil dihapus.');
    }
}
