<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyFinancialStatsProfit
{
    protected $profit;

    public function __construct(LarapexChart $profit)
    {
        $this->profit = $profit;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->profit->horizontalBarChart()
            ->setColors(['#F765A3'])
            ->addData('Profit', [6])
            ->setXAxis(['Profit'], false)
            ->setLegend(false, 'top', 400, '24px')
            ->setWidth(500)
            ->setHeight(100)
            ->setGrid();
    }
}
