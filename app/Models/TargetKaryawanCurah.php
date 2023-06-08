<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetKaryawanCurah extends Model
{
    protected $fillable = [
        'user_id',
        'total_tercapai',
        'target',
        'deadline_target',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'komisi');
    }
    use HasFactory;
}
