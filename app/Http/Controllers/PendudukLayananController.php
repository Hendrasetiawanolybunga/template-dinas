<?php

namespace App\Http\Controllers;

use App\Models\PendudukLayanan;
use App\Models\Penduduk;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PendudukLayananController extends Controller
{
    public function index()
    {
        $penduduk_layanan = PendudukLayanan::with(['penduduk', 'layanan'])->get();
        return view('backend.penduduk_layanan.index', compact('penduduk_layanan'));
    }

    public function create()
    {
        $penduduk = Penduduk::all();
        $layanan = Layanan::all();
        return view('backend.penduduk_layanan.create', compact('penduduk', 'layanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penduduk_id' => 'required',
            'layanan_id' => 'required',
            'tanggal_pengajuan' => 'required|date',
        ]);
    
        PendudukLayanan::create($request->all());
    
        return response()->json(['success' => true]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'penduduk_id' => 'required',
            'layanan_id' => 'required',
            'tanggal_pengajuan' => 'required|date',
        ]);
    
        $pendudukLayanan = PendudukLayanan::findOrFail($id);
        $pendudukLayanan->update($request->all());
    
        return response()->json(['success' => true]);
    }
    

    public function edit($id)
    {
        $penduduk_layanan = PendudukLayanan::findOrFail($id);
        $penduduk = Penduduk::all();
        $layanan = Layanan::all();
        return view('backend.penduduk_layanan.edit', compact('penduduk_layanan', 'penduduk', 'layanan'));
    }

   

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);
    
        $penduduk_layanan = PendudukLayanan::findOrFail($id);
        $penduduk_layanan->update([
            'status' => $request->status
        ]);
    
        return response()->json([
            'success' => true,
            'status' => $penduduk_layanan->status
        ]);
    }
    

    public function destroy($id)
    {
        $penduduk_layanan = PendudukLayanan::findOrFail($id);
        $penduduk_layanan->delete();

        return redirect()->route('penduduk_layanan.index')->with('success', 'Data berhasil dihapus');
    }
}
