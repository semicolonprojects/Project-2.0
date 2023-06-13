<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class InOutPendukung extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'barang_masuk',
        'user_id',
        'barang_keluar',
        'date_in',
        'date_out'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function produkPendukung()
    {
        return $this->belongsTo(BarangPendukung::class, 'kode_barang');
    }

    public function getOrderShow()
    {
        return InOutPendukung::select('kode_barang', DB::raw('SUM(barang_masuk) as total_barang_masuk'), DB::raw('SUM(barang_keluar) as total_barang_keluar'), DB::raw('MAX(date_in) as latest_date_in'), DB::raw('MAX(date_out) as latest_date_out'))
            ->groupBy('kode_barang')
            ->get();
    }

    public function accordionInOut()
    {
        return InOutPendukung::select('kode_barang', DB::raw('GROUP_CONCAT(DISTINCT barang_masuk ORDER BY date_in ASC SEPARATOR \', \') as barang_masuk'), DB::raw('GROUP_CONCAT(DISTINCT barang_keluar ORDER BY date_out ASC SEPARATOR \', \') as barang_keluar'), DB::raw('GROUP_CONCAT(DISTINCT date_in ORDER BY date_in ASC SEPARATOR \', \') as date_in'), DB::raw('GROUP_CONCAT(DISTINCT date_out ORDER BY date_out ASC SEPARATOR \', \') as date_out'))
            ->groupBy('kode_barang')
            ->get()
            ->map(function ($item) {
                $item->barang_masuk = explode(',', $item->barang_masuk);
                $item->barang_keluar = explode(',', $item->barang_keluar);
                $item->date_in = explode(',', $item->date_in);
                $item->date_out = explode(',', $item->date_out);
                return $item;
            });
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
