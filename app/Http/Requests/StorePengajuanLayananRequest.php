<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePengajuanLayananRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan pengguna bisa mengakses request ini
    }

    public function rules()
    {
        return [
            'layanan_id' => 'required|exists:layanans,id',
            'nama'       => 'required|string|max:255',
            'nik'        => 'required|numeric|digits:16|unique:pengajuan_layanan,nik',
            'email'      => 'required|email|max:255',
            'no_hp'      => 'required|string|max:15',
            'dokumen'    => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // Maksimal 2MB
        ];
    }

    public function messages()
    {
        return [
            'nik.unique' => 'NIK sudah pernah digunakan untuk pengajuan layanan ini.',
            'dokumen.mimes' => 'Format dokumen harus berupa PDF, JPG, JPEG, atau PNG.',
            'dokumen.max' => 'Ukuran dokumen maksimal 2MB.',
        ];
    }
}
