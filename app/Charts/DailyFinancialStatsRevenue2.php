<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyFinancialStatsRevenue2
{
    protected $dailyRevenue2;

    public function __construct(LarapexChart $dailyRevenue2)
    {
        $this->dailyRevenue2 = $dailyRevenue2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->dailyRevenue2->horizontalBarChart()
            ->setColors(['#F765A3'])
            ->addData('Revenue', [6])
            ->setXAxis(['Revenue'], false)
            ->setLegend(false, 'top', 400, '24px')
            ->setWidth(500)
            ->setHeight(100)
            ->setGrid();
    }
}
