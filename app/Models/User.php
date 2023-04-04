<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    public function masuk()
    {
        return $this->hasMany(Masuk::class);
    }

    public function keluar()
    {
        return $this->hasMany(Keluar::class);
    }

    public function izin()
    {
        return $this->hasMany(Keluar::class);
    }

    public function cuti()
    {
        return $this->hasMany(Keluar::class);
    }

    public function inout()
    {
        return $this->hasMany(InOut::class);
    }

    public function inoutCurah()
    {
        return $this->hasMany(InOutCurah::class);
    }

    public function inoutPendukung()
    {
        return $this->hasMany(InOutPendukung::class);
    }

    public function targetKaryawan()
    {
        return $this->hasMany(TargetKaryawan::class);
    }
}
