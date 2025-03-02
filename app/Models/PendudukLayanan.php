<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukLayanan extends Model
{
    use HasFactory;

    protected $table = 'penduduk_layanan';
    protected $fillable = ['id_penduduk', 'id_layanan', 'tanggal_pengajuan', 'tracking_code', 'status'];

    public static function generateTrackingCode()
    {
        return 'TRK-' . strtoupper(uniqid());
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->tracking_code = self::generateTrackingCode();
        });
    }

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }
}
