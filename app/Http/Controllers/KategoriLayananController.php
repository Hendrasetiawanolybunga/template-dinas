<?php
namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use Illuminate\Http\Request;

class KategoriLayananController extends Controller
{
    public function index()
    {
        $kategoriLayanan = KategoriLayanan::all();
        return view('backend.kategori_layanan.index', compact('kategoriLayanan'));
    }

    public function create()
    {
        return view('backend.kategori_layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        KategoriLayanan::create($request->all());
        return redirect()->route('kategori-layanan.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(KategoriLayanan $kategoriLayanan)
    {
        return view('backend.kategori_layanan.edit', compact('kategoriLayanan'));
    }

    public function update(Request $request, KategoriLayanan $kategoriLayanan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $kategoriLayanan->update($request->all());
        return redirect()->route('kategori-layanan.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(KategoriLayanan $kategoriLayanan)
    {
        $kategoriLayanan->delete();
        return redirect()->route('kategori-layanan.index')->with('success', 'Kategori berhasil dihapus.');
    }
}

