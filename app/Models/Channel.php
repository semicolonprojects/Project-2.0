<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function topChannel()
    {
        return DB::table('channels')
            ->select('nama_channel', 'total_tercapai', 'target_bulanan', DB::raw('(total_tercapai / target_bulanan) * 100 AS rasio'))
            ->orderByDesc('rasio')
            ->take(5)
            ->get();
    }
}
