<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function hppCurah()
    {
        return DB::table('produk_curahs')
            ->join('harga_pokok_penjualans', 'produk_curahs.kategori', '=', 'harga_pokok_penjualans.size')
            ->select('produk_curahs.*', 'harga_pokok_penjualans.total_hpp')
            ->get();
    }

    public function selisihStockCurah()
    {
        return DB::table('produk_curahs')
            ->select(DB::raw('SUM(stock) AS total_stock'), DB::raw('SUM(stock_akhir) AS total_stock_akhir'), DB::raw('SUM(stock - stock_akhir) AS selisih_stock'))
            ->get();
    }

    public function inoutcurah()
    {
        return $this->hasMany(InOutCurah::class);
    }

    public function order()
    {
        return $this->hasMany(OrderCurah::class);
    }
}
