<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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

    public function orderByChannel($sortBy)
    {
        $query = $this->newQuery();

        if ($sortBy === 'highest') {
            $query->select('nama_channel', 'total_tercapai', 'target_bulanan', DB::raw('(total_tercapai / target_bulanan) * 100 AS rasio'))
                ->orderBy('rasio')
                ->take(5);
        } elseif ($sortBy === 'lowest') {
            $query->select('nama_channel', 'total_tercapai', 'target_bulanan', DB::raw('(total_tercapai / target_bulanan) * 100 AS rasio'))
                ->orderByDesc('rasio')
                ->take(5);
        }

        return $query->get();
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
