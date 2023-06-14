<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'no_telepon',
        'email',
        'tempat',
        'tanggal_lahir',
        'customer_id'
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public static function paginateCollection(Collection $collection, $perPage, $currentPage, $path)
    {
        $queryBuilder = new Collection($collection);

        $paginator = new LengthAwarePaginator(
            $queryBuilder->forPage($currentPage, $perPage),
            $queryBuilder->count(),
            $perPage,
            $currentPage,
            ['path' => $path]
        );

        Paginator::useTailwind();

        return $paginator;
    }
}
