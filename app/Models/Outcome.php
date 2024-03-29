<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Outcome extends Model
{

    use HasFactory;

    protected $fillable = [
        'nama_outcome',
        'jumlah_outcome',
        'keterangan',
    ];

    public function outcomeDetail()
    {
        return $this->belongsTo(OutComesDetail::class, 'nama_outcome');
    }

    public static function getInternalOutcomeTotals()
    {
        return self::select('outcomes.nama_outcome', 'outcomes_details.name', 'outcomes_details.jenis_outcome', DB::raw('SUM(outcomes.jumlah_outcome) as total_jumlah'))
            ->join('outcomes_details', 'outcomes.nama_outcome', '=', 'outcomes_details.id')
            ->whereIn('outcomes.nama_outcome', function ($query) {
                $query->select('id')
                    ->from('outcomes_details')
                    ->where('jenis_outcome', 'Internal');
            })
            ->groupBy('outcomes.nama_outcome', 'outcomes_details.name', 'outcomes_details.jenis_outcome')
            ->get();
    }

    public static function getEksternalOutcomeTotals()
    {
        return self::select('outcomes.nama_outcome', 'outcomes_details.name', 'outcomes_details.jenis_outcome', DB::raw('SUM(outcomes.jumlah_outcome) as total_jumlah'))
            ->join('outcomes_details', 'outcomes.nama_outcome', '=', 'outcomes_details.id')
            ->whereIn('outcomes.nama_outcome', function ($query) {
                $query->select('id')
                    ->from('outcomes_details')
                    ->where('jenis_outcome', 'Eksternal');
            })
            ->groupBy('outcomes.nama_outcome', 'outcomes_details.name', 'outcomes_details.jenis_outcome')
            ->get();
    }

    public function getTotalOutcomeByCategoryAndDate($category)
    {
        $currentDate = Carbon::now()->toDateString();

        return $this->join('outcomes_details', 'outcomes.nama_outcome', '=', 'outcomes_details.id')
            ->where('outcomes_details.name', $category)
            ->whereDate('outcomes.created_at', $currentDate)
            ->sum('outcomes.jumlah_outcome');
    }


    public function getTotalOutcomeByCategoryAndMonth($category)
    {
        return $this->join('outcomes_details', 'outcomes.nama_outcome', '=', 'outcomes_details.id')
            ->where('outcomes_details.name', $category)
            ->whereMonth('outcomes.created_at', Carbon::now()->month)
            ->sum('outcomes.jumlah_outcome');
    }

    public function getTotalOutcomePerMonth()
    {
        return $this->selectRaw('SUM(jumlah_outcome) as total_outcome, DATE_FORMAT(created_at, "%M %Y") as month_year')
            ->whereMonth('created_at', Carbon::now()->month)
            ->groupBy('month_year')
            ->get();
    }
}
