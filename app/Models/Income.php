<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

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

    public function getTotalIncomePerMonth()
    {
        return $this->selectRaw('SUM(total_income) as total_income, DATE_FORMAT(created_at, "%M %Y") as month_year')
            ->whereMonth('created_at', Carbon::now()->month)
            ->groupBy('month_year')
            ->get();
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
