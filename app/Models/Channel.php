<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_channel',
        'target_bulanan',
        'total_tercapai'
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
