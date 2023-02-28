<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyFinancialStatsRevenue
{
    protected $dailyRevenue;

    public function __construct(LarapexChart $dailyRevenue)
    {
        $this->dailyRevenue = $dailyRevenue;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->dailyRevenue->lineChart()
            ->addData('Current Week', [40, 93, 35, 42, 18, 82])
            ->addData('Previous Week', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            ->setWidth(787)
            ->setHeight(296)
            ->setColors(['#A155B9', '#F765A3'])
            ->setMarkers(['#A155B9', '#F765A3'], 7, 10)
            ->setGrid()
            ->setLegend(false, 'top', 400, '24px', false);
    }
}
