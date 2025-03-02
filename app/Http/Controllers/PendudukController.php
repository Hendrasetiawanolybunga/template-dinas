<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    /**
     * Menampilkan daftar penduduk.
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('backend.penduduk.index', compact('penduduk'));
    }

    /**
     * Menampilkan form tambah penduduk.
     */
    public function create()
    {
        return view('backend.penduduk.create');
    }

    /**
     * Menyimpan data penduduk baru.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'nama_penduduk' => 'required|string|max:255',
            'alamat_penduduk' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        Penduduk::create($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail penduduk.
     */
    public function show(Penduduk $penduduk)
    {
        return view('backend.penduduk.show', compact('penduduk'));
    }

    /**
     * Menampilkan form edit penduduk.
     */
    public function edit(Penduduk $penduduk)
    {
        return view('backend.penduduk.edit', compact('penduduk'));
    }

    /**
     * Memperbarui data penduduk.
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'nama_penduduk' => 'required|string|max:255',
            'alamat_penduduk' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        $penduduk->update($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diperbarui.');
    }

    /**
     * Menghapus data penduduk.
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil dihapus.');
    }
}
