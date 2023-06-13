<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function hpp()
    {
        return DB::table('produk_jadis')
            ->join('harga_pokok_penjualans', 'produk_jadis.kategori', '=', 'harga_pokok_penjualans.size')
            ->select('produk_jadis.*', 'harga_pokok_penjualans.total_hpp')
            ->get();
    }

    public function selisihStock()
    {
        return DB::table('produk_jadis')
            ->select(DB::raw('SUM(stock) AS total_stock'), DB::raw('SUM(stock_akhir) AS total_stock_akhir'), DB::raw('SUM(stock - stock_akhir) AS selisih_stock'))
            ->get();
    }

    public static function paginateCollection(Collection $collection, $perPage, $currentPage, $path)
    {
        $queryBuilder = new Collection($collection);

        $paginator = new LengthAwarePaginator(
            $queryBuilder->forPage($currentPage, $perPage),
            $queryBuilder->count(),
            $perPage,
            $currentPage,
            ['path' => $path]
        );

        Paginator::useTailwind();

        return $paginator;
    }
}
