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
        'deadline_target'
    ];
}
