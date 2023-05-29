<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'nama_channel',
        'tipe_income',
    ];
    use HasFactory;

    public function channel()
    {
        return $this->belongsTo(Channel::class, 'nama_channel');
    }

}
