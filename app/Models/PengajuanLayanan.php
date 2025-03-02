<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanLayanan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_layanan';

    protected $fillable = [
        'layanan_id',
        'nama',
        'nik',
        'email',
        'no_hp',
        'dokumen',
        'status',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
