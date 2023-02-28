<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyFinancialStatsOrderSize
{
    protected $orderSize;

    public function __construct(LarapexChart $orderSize)
    {
        $this->orderSize = $orderSize;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->orderSize->horizontalBarChart()
            ->setColors(['#F765A3'])
            ->addData('Revenue', [6])
            ->setXAxis(['Revenue'], false)
            ->setLegend(false, 'top', 400, '24px')
            ->setWidth(500)
            ->setHeight(100)
            ->setGrid();
    }
}
