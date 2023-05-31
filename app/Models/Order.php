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
        'note',
        'komisi',
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

    public function topProducts()
    {
        return DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
            ->select('produk_jadis.nama_barang', 'produk_jadis.size', DB::raw('SUM(orders.total_order) as total_order'))
            ->groupBy('produk_jadis.nama_barang', 'produk_jadis.size')
            ->orderBy('total_order', 'desc')
            ->take(5) // Ubah angka 10 dengan jumlah produk teratas yang diinginkan
            ->get();
    }

    public function topCustomer()
    {
        $topCustomers = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('customers.nama_lengkap', 'orders.customer_id', DB::raw('SUM(orders.total_pembelian) as revenue'), DB::raw('SUM(orders.total_order) as total_pembelian'))
            ->groupBy('customers.nama_lengkap', 'orders.customer_id')
            ->orderBy('revenue', 'desc')
            ->get();

        $result = [];

        foreach ($topCustomers as $customer) {
            $customerData = [
                'customer_id' => $customer->customer_id,
                'nama_lengkap' => $customer->nama_lengkap,
                'revenue' => $customer->revenue,
                'total_pembelian' => $customer->total_pembelian,
                'favorite_products' => []
            ];

            $favoriteProducts = DB::table('orders')
                ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
                ->select('produk_jadis.nama_barang')
                ->where('orders.customer_id', $customer->customer_id)
                ->groupBy('produk_jadis.nama_barang')
                ->orderByRaw('SUM(orders.total_pembelian) DESC')
                ->limit(3)
                ->get();

            foreach ($favoriteProducts as $product) {
                $customerData['favorite_products'][] = $product->nama_barang;
            }

            $result[] = $customerData;
        }

        return $result;
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

    public function channel()
    {
        return $this->belongsTo(Channel::class, 'tipe_pesanan');
    }

    public function target()
    {
        return $this->hasMany(TargetKaryawan::class);
    }
}
