<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailySalesStats
{
    protected $dailyStats;

    public function __construct(LarapexChart $dailyStats)
    {
        $this->dailyStats = $dailyStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->dailyStats->horizontalBarChart()
            ->setColors(['#FFC107'])
            ->addData('Actual', [6, 9, 3])
            ->addData('Target', [7, 3, 8])
            ->setXAxis(['Mukti', 'Supri', 'Windah'])
            ->setColors(['#FFEAAE', '#FFC525'])
            ->setLegend(false, 'top', 400, '24px')
            ->setWidth(484)
            ->setHeight(200);
    }
}
