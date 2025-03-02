<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengajuanLayananRequest;
use App\Models\PengajuanLayanan;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajuanLayananController extends Controller
{
    public function store(StorePengajuanLayananRequest $request)
    {
        try {
            // Simpan dokumen jika ada
            $filePath = null;
            if ($request->hasFile('dokumen')) {
                $filePath = $request->file('dokumen')->store('dokumen_pengajuan', 'public');
            }

            // Simpan data pengajuan layanan
            PengajuanLayanan::create([
                'layanan_id' => $request->layanan_id,
                'nama'       => $request->nama,
                'nik'        => $request->nik,
                'email'      => $request->email,
                'no_hp'      => $request->no_hp,
                'dokumen'    => $filePath,
                'status'     => 'pending',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pengajuan layanan berhasil dikirim!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengirim pengajuan.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    public function create()
{
    // Ambil layanan yang tersedia
    $layanan = Layanan::first(); // Bisa diubah sesuai logika pemilihan layanan

    return view('users.layanan.pengajuan', compact('layanan'));
}
}
