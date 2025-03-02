<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';
    protected $fillable = ['id_kategori', 'nama_layanan', 'deskripsi_layanan'];

    public function kategori()
    {
        return $this->belongsTo(KategoriLayanan::class, 'id_kategori');
    }

    public function syarat()
    {
        return $this->hasMany(SyaratLayanan::class, 'id_layanan');
    }

    public function penduduk()
    {
        return $this->belongsToMany(Penduduk::class, 'penduduk_layanan', 'id_layanan', 'id_penduduk')->withTimestamps();
    }
}
