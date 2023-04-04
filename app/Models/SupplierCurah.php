<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierCurah extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'phone',
        'email',
        'supplier_type',
        'address',
    ];
}
