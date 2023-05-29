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
    
    public function channel()
    {
        return $this->belongsTo(Channel::class, 'nama_channel');
    }

}
