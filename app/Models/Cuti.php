<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'keterangan_cuti',
        'mulai_cuti',
        'akhir_cuti',
        'tanggal_diterima'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
