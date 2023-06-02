<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangPendukung extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function inoutpendukung()
    {
        return $this->hasMany(InOutPendukung::class);
    }
}
