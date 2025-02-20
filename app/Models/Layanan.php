<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';
    protected $fillable = ['kategori_id', 'nama', 'deskripsi', 'persyaratan', 'prosedur',];

    public function kategori()
    {
        return $this->belongsTo(KategoriLayanan::class, 'kategori_id');
    }
}
