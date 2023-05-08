<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\TargetKaryawan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DailyTargetStats
{
    protected $dailyTargetStats;

    public function __construct(LarapexChart $dailyTargetStats)
    {
        $this->dailyTargetStats = $dailyTargetStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $auth = Auth::user()->id;
        $target=TargetKaryawan::select('target', DB::raw('target * 1 / 100 AS total_target'))
        ->where('target_karyawans.user_id','=', $auth)
        ->get();
            return $this->dailyTargetStats->donutChart()
            ->addData([$target->pluck('total_target'), 24])
            ->setLabels(['Daily Target', 'Actual Sales'])
            ->setColors(['#F94144', '#F3722C'])
            ->setWidth(428)
            ->setHeight(428)
            ->setDataLabels(true);
    }
}
