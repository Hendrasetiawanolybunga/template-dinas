<?php

namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use Illuminate\Http\Request;

class KategoriLayananController extends Controller
{
    public function index()
    {
        $kategori = KategoriLayanan::all();
        return view('backend.kategori_layanan.index', compact('kategori'));
    }

    public function create()
    {
        return view('backend.kategori_layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        KategoriLayanan::create($request->all());

        return redirect()->route('kategori_layanan.index')->with('success', 'Kategori layanan berhasil ditambahkan.');
    }

    public function edit(KategoriLayanan $kategori_layanan)
    {
        return view('backend.kategori_layanan.edit', compact('kategori_layanan'));
    }

    public function update(Request $request, KategoriLayanan $kategori_layanan)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kategori_layanan->update($request->all());

        return redirect()->route('kategori_layanan.index')->with('success', 'Kategori layanan berhasil diperbarui.');
    }

    public function destroy(KategoriLayanan $kategori_layanan)
    {
        $kategori_layanan->delete();
        return redirect()->route('kategori_layanan.index')->with('success', 'Kategori layanan berhasil dihapus.');
    }
}
