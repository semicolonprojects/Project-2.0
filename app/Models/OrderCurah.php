<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
