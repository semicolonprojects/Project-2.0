<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukJadi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'size',
        'stock',
        'min_ammount',
        'stock_akhir',
        'entry_price',
        'price'
    ];

    public function inout()
    {
        return $this->hasMany(InOut::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
