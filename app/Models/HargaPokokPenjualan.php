<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaPokokPenjualan extends Model
{
    protected $fillable = [
        'nama_produk',
        'size',
        'bahan_madu',
        'bahan_pendukung',
        'total_hpp',
    ];
    use HasFactory;
}
