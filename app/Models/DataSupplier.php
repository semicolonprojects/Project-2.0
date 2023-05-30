<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSupplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'phone',
        'email',
        'entry_price',
        'ukuran_kulak',
        'supplier_type',
        'address',
    ];
}
