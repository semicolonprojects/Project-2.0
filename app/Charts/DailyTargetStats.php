<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyTargetStats
{
    protected $dailyTargetStats;

    public function __construct(LarapexChart $dailyTargetStats)
    {
        $this->dailyTargetStats = $dailyTargetStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->dailyTargetStats->donutChart()
            ->addData([20, 24])
            ->setLabels(['Daily Target', 'Actual Sales'])
            ->setColors(['#F94144', '#F3722C'])
            ->setWidth(428)
            ->setHeight(428)
            ->setDataLabels(true);
    }
}
