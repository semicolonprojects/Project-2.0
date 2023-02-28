<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyOrderStats
{
    protected $dailyOrdedStats;

    public function __construct(LarapexChart $dailyOrdedStats)
    {
        $this->dailyOrdedStats = $dailyOrdedStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->dailyOrdedStats->lineChart()
            ->addData('Total Closing', [40, 93, 35, 42, 18, 82])
            ->addData('Target', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'])
            ->setColors(['#A155B9', '#F765A3'])
            ->setMarkers(['#A155B9', '#F765A3'], 7, 10)
            ->setLegend(true, 'top', 400, '12px')
            ->setWidth(330)
            ->setHeight(220)
            ->setGrid();
    }
}
