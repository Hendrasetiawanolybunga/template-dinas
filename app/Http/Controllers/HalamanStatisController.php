<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HalamanStatis;
use Illuminate\Support\Str;

class HalamanStatisController extends Controller
{
    public function index()
    {
        $halaman = HalamanStatis::all();
        return view('backend.halaman.index', compact('halaman'));
    }

    public function create()
    {
        return view('backend.halaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        HalamanStatis::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'konten' => $request->konten,
        ]);

        return redirect()->route('halaman.index')->with('success', 'Halaman berhasil ditambahkan');
    }

    public function edit(HalamanStatis $halaman)
    {
        return view('backend.halaman.edit', compact('halaman'));
    }

    public function update(Request $request, HalamanStatis $halaman)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $halaman->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'konten' => $request->konten,
        ]);

        return redirect()->route('halaman.index')->with('success', 'Halaman berhasil diperbarui');
    }

    public function destroy(HalamanStatis $halaman)
    {
        $halaman->delete();
        return redirect()->route('halaman.index')->with('success', 'Halaman berhasil dihapus');
    }

    public function show($id)
{
    $halaman = HalamanStatis::findOrFail($id);
    return view('backend.halaman.show', compact('halaman'));
}





public function showFrontend(HalamanStatis $halaman) // Gunakan Route Model Binding
{
    return view('frontend.pages.halaman_statis', compact('halaman'));
}
}

