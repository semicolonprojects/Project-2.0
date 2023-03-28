<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'barang_masuk',
        'barang_keluar',
        'date_in',
        'date_out'
    ];

    public function produkjadi()
    {
        return $this->belongsTo(ProdukJadi::class);
    }
}
