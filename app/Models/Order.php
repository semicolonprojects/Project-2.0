<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_id',
        'kode_barang',
        'status_pembayaran',
        'tipe_pesanan',
        'total_pembelian',
        'total_order',
        'diskon',
        'ongkir',
        'status_barang',
        'note'
    ];
}
