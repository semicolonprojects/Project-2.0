<?php

namespace App\Charts;

use App\Models\TargetKaryawanCurah;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Auth;

class OrderStats
{
    protected $orderStats;

    public function __construct(LarapexChart $orderStats)
    {
        $this->orderStats = $orderStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $auth = Auth::user()->id;
        $target = TargetKaryawanCurah::where('user_id', $auth)->pluck('target')->first();
        $total_tercapai = TargetKaryawanCurah::where('user_id', $auth)->pluck('total_tercapai')->first();

        if ($total_tercapai && $target == null) {
            $persentase_tercapai = 0;
        } elseif ($target == 0) {
            $persentase_tercapai = 0;
        } else {
            $persentase_tercapai = ($total_tercapai / $target) * 100;
        }

        $data = [$persentase_tercapai, 100 - $persentase_tercapai];
        $labels = ['Actual Sales', 'Remaining'];
        $colors = ['#F3722C', '#E2E8F0'];

        return $this->orderStats->donutChart()
            ->addData($data)
            ->setLabels($labels)
            ->setColors($colors)
            ->setWidth(428)
            ->setHeight(428)
            ->setDataLabels(true);
    }
}
