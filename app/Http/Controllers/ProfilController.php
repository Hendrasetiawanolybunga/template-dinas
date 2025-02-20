<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::paginate(10);
        return view('backend.profil.index', compact('profil'));
    }

    public function create()
    {
        return view('backend.profil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dinas' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'struktur_organisasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profil = new Profil();
        $profil->nama_dinas = $request->nama_dinas;
        $profil->visi = $request->visi;
        $profil->misi = $request->misi;
        $profil->alamat = $request->alamat;
        $profil->telepon = $request->telepon;
        $profil->email = $request->email;

        if ($request->hasFile('struktur_organisasi')) {
            $file = $request->file('struktur_organisasi');
            $path = $file->store('struktur_organisasi', 'public');
            $profil->struktur_organisasi = $path;
        }

        $profil->save();

        return redirect()->route('profil.index')->with('success', 'Profil berhasil ditambahkan!');
    }

    public function show($id)
    {
        $profil = Profil::findOrFail($id);
        return view('backend.profil.show', compact('profil'));
    }
    

    public function edit(Profil $profil)
    {
        return view('backend.profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $request->validate([
            'nama_dinas' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'email' => 'required|email',
            'struktur_organisasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama_dinas', 'visi', 'misi', 'alamat', 'telepon', 'email']);

        // Cek apakah ada file baru diunggah
        if ($request->hasFile('struktur_organisasi')) {
            // Hapus gambar lama jika ada
            if ($profil->struktur_organisasi) {
                Storage::delete('public/' . $profil->struktur_organisasi);
            }

            // Simpan gambar baru
            $imagePath = $request->file('struktur_organisasi')->store('profil', 'public');
            $data['struktur_organisasi'] = $imagePath;
        }

        // Update profil
        $profil->update($data);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui');
    }


    public function destroy(Profil $profil)
    {
        if ($profil->struktur_organisasi) {
            Storage::disk('public')->delete($profil->struktur_organisasi);
        }

        $profil->delete();

        return redirect()->route('profil.index')->with('success', 'Profil berhasil dihapus!');
    }


    public function showFrontend()
    {
        $profil = Profil::first(); // Ambil profil pertama (sesuaikan logika Anda)
        return view('frontend.pages.profile', compact('profil'));
    }
}
