<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetKaryawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'target',
        'total_tercapai',
        'deadline_target',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'komisi');
    }
}
