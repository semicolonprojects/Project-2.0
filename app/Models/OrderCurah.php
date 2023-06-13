<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class OrderCurah extends Model
{
    use HasFactory;

    public function calculateTotalPembelian($totalOrder, $hargaBarang, $diskon)
    {
        return ($totalOrder * $hargaBarang) - ($hargaBarang * $totalOrder * $diskon);
    }

    public function calculateKomisi($totalPembelian, $komisiRate)
    {
        return $totalPembelian * $komisiRate;
    }

    public function produk()
    {
        return $this->belongsTo(ProdukCurah::class, 'kode_barang');
    }

    public function show()
    {
        return DB::table('produk_curahs')
            ->join('order_curahs', 'produk_curahs.id', '=', 'order_curahs.kode_barang')
            ->join('users', 'order_curahs.user_id', '=', 'users.id')
            ->join('customers', 'order_curahs.customer_id', '=', 'customers.id')
            ->select('produk_curahs.nama_barang', 'order_curahs.order_id', 'users.username', 'customers.nama_lengkap', 'order_curahs.status_pembayaran', 'order_curahs.tipe_pesanan', 'order_curahs.total_pembelian', DB::raw('(SUM(order_curahs.total_order)*1/100) as total_order'), 'order_curahs.diskon', 'order_curahs.status_barang', 'order_curahs.note', 'order_curahs.customer_id', 'order_curahs.created_at')
            ->groupBy('order_curahs.order_id', 'produk_curahs.nama_barang', 'customers.nama_lengkap', 'users.username', 'order_curahs.status_pembayaran', 'order_curahs.tipe_pesanan', 'order_curahs.total_pembelian', 'order_curahs.diskon', 'order_curahs.status_barang', 'order_curahs.note', 'order_curahs.customer_id', 'order_curahs.created_at')
            ->get();
    }

    public function totalPembelian()
    {
        return DB::table('order_curahs')
            ->join('produk_curahs', 'order_curahs.kode_barang', '=', 'produk_curahs.id')
            ->join('channels', 'order_curahs.tipe_pesanan', '=', 'channels.id')
            ->select('produk_curahs.nama_barang', DB::raw('SUM(order_curahs.total_order) AS total_order'), 'channels.nama_channel')
            ->groupBy('produk_curahs.nama_barang', 'channels.nama_channel')
            ->get();
    }

    public function totalPembelianPerMinggu()
    {
        $startDate = Carbon::now()->startOfWeek(); // Mengambil tanggal awal minggu ini
        $endDate = Carbon::now()->endOfWeek(); // Mengambil tanggal akhir minggu ini

        return DB::table('order_curahs')
            ->join('produk_curahs', 'order_curahs.kode_barang', '=', 'produk_curahs.id')
            ->join('channels', 'order_curahs.tipe_pesanan', '=', 'channels.id')
            ->select('produk_curahs.nama_barang', DB::raw('SUM(order_curahs.total_order) AS total_order'), 'channels.nama_channel')
            ->whereBetween('order_curahs.created_at', [$startDate, $endDate])
            ->groupBy('produk_curahs.nama_barang', 'channels.nama_channel')
            ->get();
    }

    public function totalPembelianPerMingguLalu()
    {
        $lastWeekStartDate = Carbon::now()->startOfWeek()->subWeek(); // Mengambil tanggal awal minggu kemarin
        $lastWeekEndDate = Carbon::now()->endOfWeek()->subWeek(); // Mengambil tanggal akhir minggu kemarin
        return DB::table('order_curahs')
            ->join('produk_curahs', 'order_curahs.kode_barang', '=', 'produk_curahs.id')
            ->join('channels', 'order_curahs.tipe_pesanan', '=', 'channels.id')
            ->select('produk_curahs.nama_barang', DB::raw('SUM(order_curahs.total_order) AS total_order'), 'channels.nama_channel')
            ->whereBetween('order_curahs.created_at', [$lastWeekStartDate, $lastWeekEndDate])
            ->groupBy('produk_curahs.nama_barang', 'channels.nama_channel')
            ->get();
    }

    public function perBulan()
    {
        return DB::table('order_curahs')
            ->join('produk_curahs', 'order_curahs.kode_barang', '=', 'produk_curahs.id')
            ->join('channels', 'order_curahs.tipe_pesanan', '=', 'channels.id')
            ->select(
                DB::raw('DATE_FORMAT(order_curahs.created_at, "%M") AS bulan'),
                DB::raw('SUM(order_curahs.total_order) AS total_order')
            )
            ->groupBy('bulan')
            ->get();
    }

    public function perHari()
    {
        $today = date('Y-m-d'); // Mendapatkan tanggal hari ini dalam format Y-m-d (misalnya: 2023-06-05)

        return DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
            ->join('channels', 'orders.tipe_pesanan', '=', 'channels.id')
            ->select(
                DB::raw('DATE_FORMAT(orders.created_at, "%d") AS hari'),
                DB::raw('SUM(orders.total_order) AS total_order')
            )
            ->whereDate('orders.created_at', $today) // Menambahkan kondisi where untuk tanggal hari ini
            ->groupBy('hari')
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


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class, 'tipe_pesanan');
    }
}
