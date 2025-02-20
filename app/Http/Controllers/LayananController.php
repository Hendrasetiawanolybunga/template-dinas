<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\KategoriLayanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::with('kategori')->get();
        return view('backend.layanan.index', compact('layanans'));
    }

    public function kategori()
{
    return $this->belongsTo(KategoriLayanan::class, 'kategori_id');
}


    public function create()
    {
        $kategori = KategoriLayanan::all(); // Mengambil semua kategori
        return view('backend.layanan.create', compact('kategori'));
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        $kategori = KategoriLayanan::all();
        return view('backend.layanan.edit', compact('layanan', 'kategori'));
    }

    public function store(Request $request)
    {
 

        $request->validate([
            'kategori_id' => 'required|exists:kategori_layanan,id',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'persyaratan' => 'required|string',
            'prosedur' => 'required|string',
        ]);
        

        Layanan::create($request->all());
        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan');
    }

   

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'prosedur' => 'required',
        ]);

        $layanan->update($request->all());
        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus');
    }

    public function show($id)
{
    $layanan = Layanan::with('kategori')->findOrFail($id);
    return view('backend.layanan.show', compact('layanan'));
}




public function indexFrontend()
{
    $layanans = Layanan::all(); // Ambil semua data layanan
    return view('frontend.pages.services', compact('layanans'));
}

public function showFrontend(Layanan $layanan) // Gunakan Route Model Binding
{
    return view('frontend.pages.service', compact('layanan'));
}

}
