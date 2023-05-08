<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_id',
        'kode_barang',
        'user_id',
        'status_pembayaran',
        'tipe_pesanan',
        'total_pembelian',
        'total_order',
        'diskon',
        'ongkir',
        'status_barang',
        'note'
    ];

    public function show()
    {
        return DB::table('produk_jadis')
            ->join('orders', 'produk_jadis.id', '=', 'orders.kode_barang')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('produk_jadis.nama_barang', 'orders.order_id', 'users.username', 'customers.nama_lengkap', 'orders.status_pembayaran', 'orders.tipe_pesanan', 'orders.total_pembelian', DB::raw('(SUM(orders.total_order)*1/100) as total_order'), 'orders.diskon', 'orders.status_barang', 'orders.note', 'orders.customer_id', 'orders.created_at')
            ->groupBy('orders.order_id', 'produk_jadis.nama_barang', 'customers.nama_lengkap', 'users.username', 'orders.status_pembayaran', 'orders.tipe_pesanan', 'orders.total_pembelian', 'orders.diskon', 'orders.status_barang', 'orders.note', 'orders.customer_id', 'orders.created_at')
            ->get();
    }

    public function join()
    {
        return DB::table('orders')
            ->select('orders.*', 'produk_jadis.nama_barang as nama_barang')
            ->groupBy('order_id', 'customer_id', 'user_id', 'tipe_pesanan')
            ->join('produk_jadis', 'produk_jadis.id', '=', 'orders.kode_barang')
            ->get();
    }


    public function getOrderData()
    {
        return $this->select(
            'order_id',
            DB::raw('GROUP_CONCAT(DISTINCT customer_id SEPARATOR ", ") as customer_id'),
            DB::raw('GROUP_CONCAT(DISTINCT user_id SEPARATOR ", ") as user_id'),
            'status_pembayaran',
            'tipe_pesanan',
            DB::raw('SUM(total_pembelian) as total_pembelian'),
            DB::raw('SUM(total_order) as total_order'),
            'ongkir',
            'status_barang',
            DB::raw('GROUP_CONCAT(DISTINCT kode_barang ORDER BY order_id, kode_barang SEPARATOR ", ") as kode_barang'),
            DB::raw('GROUP_CONCAT(DISTINCT diskon SEPARATOR ", ") as diskon'),
            DB::raw('MIN(created_at) as created_at')
        )
            ->groupBy('order_id')
            ->get();
    }

    public function coba()
    {
        return DB::table('orders')
            ->select(
                'orders.order_id',
                DB::raw('GROUP_CONCAT(DISTINCT orders.user_id) AS user_id'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.customer_id) AS customer_id'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.kode_barang) AS kode_barang'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.status_pembayaran) AS status_pembayaran'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.tipe_pesanan) AS tipe_pesanan'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.total_pembelian) AS total_pembelian'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.total_order) AS total_order'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.diskon) AS diskon'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.ongkir) AS ongkir'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.note) AS note')
            )
            ->groupBy('orders.order_id')
            ->get()
            ->map(function ($order) {
                $order->user_id = explode(',', $order->user_id);
                $order->customer_id = explode(',', $order->customer_id);
                $order->kode_barang = explode(',', $order->kode_barang);
                $order->status_pembayaran = explode(',', $order->status_pembayaran);
                $order->tipe_pesanan = explode(',', $order->tipe_pesanan);
                $order->total_pembelian = explode(',', $order->total_pembelian);
                $order->total_order = explode(',', $order->total_order);
                $order->diskon = explode(',', $order->diskon);
                $order->ongkir = explode(',', $order->ongkir);
                return $order;
            });
    }


    public function produk()
    {
        return $this->belongsTo(ProdukJadi::class, 'kode_barang');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
