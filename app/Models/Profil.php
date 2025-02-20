<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil'; // Nama tabel di database

    protected $fillable = [
        'nama_dinas',
        'visi',
        'misi',
        'alamat',
        'telepon',
        'email',
        'struktur_organisasi',
    ];
}

