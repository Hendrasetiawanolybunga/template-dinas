<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'tanggal', 'lokasi', 'waktu_mulai', 'waktu_selesai', 'deskripsi'
    ];
    
}

