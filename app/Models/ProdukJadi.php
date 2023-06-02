<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukJadi extends Model
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
        'harga_ecer',
        'harga_rs',
        'harga_mkl',
        'harga_ds',
    ];

    public function inout()
    {
        return $this->hasMany(InOut::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function lowStock()
    {
        return DB::table('produk_jadis')
            ->select('*', DB::raw('(stock - min_ammount) AS low_stock'))
            ->orderBy('low_stock', 'asc')
            ->get();
    }
}
