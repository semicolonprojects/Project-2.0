<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DailyOrderStats
{
    protected $dailyOrdedStats;

    public function __construct(LarapexChart $dailyOrdedStats)
    {
        $this->dailyOrdedStats = $dailyOrdedStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $user_id = Auth::id();

        $result = DB::table('target_karyawans')
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%M') AS month"),
                DB::raw('SUM(total_tercapai) AS total_tercapai'),
                'target'
            )
            ->where('user_id', $user_id)
            ->groupBy('month', 'target')
            ->get();

        $total_tercapai = [];
        $target = [];
        $months = [];

        foreach ($result as $row) {
            $total_tercapai[] = $row->total_tercapai;
            $target[] = $row->target;
            $months[] = $row->month;
        }

        return $this->dailyOrdedStats->lineChart()
            ->addData('Total Tercapai', $total_tercapai)
            ->addData('Target', $target)
            ->setXAxis($months)
            ->setColors(['#A155B9', '#F765A3'])
            ->setMarkers(['#A155B9', '#F765A3'], 7, 10)
            ->setLegend(true, 'top', 400, '12px')
            ->setWidth(330)
            ->setHeight(220)
            ->setGrid();
    }
}
