<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratLayanan extends Model
{
    use HasFactory;

    protected $table = 'syarat_layanan';
    protected $fillable = ['id_layanan', 'persyaratan'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }
}
