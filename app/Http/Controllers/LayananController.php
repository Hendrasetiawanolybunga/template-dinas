<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\KategoriLayanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::with('kategori')->get();
        return view('backend.layanan.index', compact('layanan'));
    }

    public function create()
    {
        $kategori = KategoriLayanan::all();
        return view('backend.layanan.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|exists:kategori_layanan,id',
            'nama_layanan' => 'required|string|max:255',
            'deskripsi_layanan' => 'nullable|string',
        ]);

        Layanan::create($request->all());

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Layanan $layanan)
    {
        $kategori = KategoriLayanan::all();
        return view('backend.layanan.edit', compact('layanan', 'kategori'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'id_kategori' => 'required|exists:kategori_layanan,id',
            'nama_layanan' => 'required|string|max:255',
            'deskripsi_layanan' => 'nullable|string',
        ]);

        $layanan->update($request->all());

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
