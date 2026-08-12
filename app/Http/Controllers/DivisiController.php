<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();

        return view('divisi.index', compact('divisi'));
    }

    public function create()
    {
        return view('divisi.create');
    }

    public function store(Request $r)
    {
        $r->validate([
            'kode' => 'required|unique:divisi,kode',
            'nama' => 'required'
        ]);

        Divisi::create([
            'kode' => $r->kode,
            'nama' => $r->nama
        ]);

        return redirect()
            ->route('divisi.index')
            ->with('success', 'Divisi berhasil ditambahkan');
    }

    public function edit(Divisi $divisi)
    {
        return view('divisi.edit', compact('divisi'));
    }

    public function update(Request $r, Divisi $divisi)
    {
        $r->validate([
            'kode' => 'required|unique:divisi,kode,' . $divisi->id,
            'nama' => 'required'
        ]);

        $divisi->update([
            'kode' => $r->kode,
            'nama' => $r->nama
        ]);

        return redirect()
            ->route('divisi.index')
            ->with('success', 'Divisi berhasil diperbarui');
    }

    public function destroy(Divisi $divisi)
    {
        $divisi->delete();

        return redirect()
            ->route('divisi.index')
            ->with('success', 'Divisi berhasil dihapus');
    }
}