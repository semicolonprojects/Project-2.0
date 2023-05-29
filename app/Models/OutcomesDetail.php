<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutcomesDetail extends Model
{
    protected $fillable = ['name', 'jenis_outcome'];
    use HasFactory;
}
