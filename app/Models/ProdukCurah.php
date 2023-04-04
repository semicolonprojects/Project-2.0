<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukCurah extends Model
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

    public function inoutcurah()
    {
        return $this->hasMany(InOutCurah::class);
    }
}
