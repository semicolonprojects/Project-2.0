<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaduKulak extends Model
{
    protected $fillable = [
        'nama_madu',
        'size',
        'harga_per_gram',
        'harga_total',
    ];
    use HasFactory;
}
