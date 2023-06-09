<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukCurah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'size',
        'stock',
        'kategori',
        'min_ammount',
        'stock_akhir',
        'hpp',
        'harga',
    ];

    public function inoutcurah()
    {
        return $this->hasMany(InOutCurah::class);
    }

    public function order()
    {
        return $this->hasMany(OrderCurah::class);
    }
}
