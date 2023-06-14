<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class SupplierCurah extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'phone',
        'email',
        'supplier_type',
        'entry_price',
        'ukuran_kulak',
        'address',
    ];

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
