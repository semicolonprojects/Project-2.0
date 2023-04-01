<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangPendukung extends Model
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

    public function inoutpendukung()
    {
        return $this->hasMany(InOutPendukung::class);
    }
}
