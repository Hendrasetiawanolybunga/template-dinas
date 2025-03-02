<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SyaratLayanan;
use App\Models\Layanan;

class SyaratLayananController extends Controller
{
    public function index()
    {
        $syarat = SyaratLayanan::with('layanan')->get();
        return view('backend.syarat_layanan.index', compact('syarat'));
    }

    public function create()
    {
        $layanan = Layanan::all();
        return view('backend.syarat_layanan.create', compact('layanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_layanan' => 'required',
            'persyaratan' => 'required|string',
        ]);

        SyaratLayanan::create($request->all());
        return redirect()->route('syarat_layanan.index')->with('success', 'Syarat Layanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $syarat = SyaratLayanan::findOrFail($id);
        $layanan = Layanan::all();
        return view('backend.syarat_layanan.edit', compact('syarat', 'layanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_layanan' => 'required',
            'persyaratan' => 'required|string',
        ]);

        $syarat = SyaratLayanan::findOrFail($id);
        $syarat->update($request->all());

        return redirect()->route('syarat_layanan.index')->with('success', 'Syarat Layanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $syarat = SyaratLayanan::findOrFail($id);
        $syarat->delete();

        return redirect()->route('syarat_layanan.index')->with('success', 'Syarat Layanan berhasil dihapus.');
    }
}
