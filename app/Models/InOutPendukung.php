<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InOutPendukung extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'barang_masuk',
        'barang_keluar',
        'date_in',
        'date_out'
    ];

    public function barangpendukung()
    {
        return $this->belongsTo(BarangPendukung::class);
    }
}
