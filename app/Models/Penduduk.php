<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduk';
    protected $fillable = ['nama_penduduk', 'alamat_penduduk', 'tanggal_lahir', 'jenis_kelamin'];

    public function layanan()
    {
        return $this->belongsToMany(Layanan::class, 'penduduk_layanan', 'id_penduduk', 'id_layanan')->withTimestamps();
    }
}
