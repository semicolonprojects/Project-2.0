<?php

namespace App\Charts;

use App\Models\Order;
use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class DailySalesStats
{
    protected $dailyStats;

    public function __construct(LarapexChart $dailyStats)
    {
        $this->dailyStats = $dailyStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $totalTercapai = DB::table('target_karyawans')
            ->join('users', 'target_karyawans.user_id', '=', 'users.id')
            ->select('users.username', 'target_karyawans.total_tercapai', 'target_karyawans.target')
            ->get();

        $totalTercapaiValues = $totalTercapai->pluck('total_tercapai')->toArray();
        $usernames = $totalTercapai->pluck('username')->toArray();
        $targetValues = $totalTercapai->pluck('target')->toArray();

        return $this->dailyStats->horizontalBarChart()
            ->setColors(['#FFC107'])
            ->addData('Total Tercapai', $totalTercapaiValues)
            ->setXAxis($usernames)
            ->addData('Target', $targetValues) // Mengubah $usernames menjadi array
            ->setColors(['#FFEAAE', '#FFC525'])
            ->setLegend(false, 'top', 400, '24px')
            ->setWidth(484)
            ->setHeight(200);
    }
}
