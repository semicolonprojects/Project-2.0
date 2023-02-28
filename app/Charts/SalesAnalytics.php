<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class SalesAnalytics
{
    protected $salesAnalytics;

    public function __construct(LarapexChart $salesAnalytics)
    {
        $this->salesAnalytics = $salesAnalytics;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->salesAnalytics->lineChart()
            ->addData('Target', [40, 93, 35, 42, 18, 82])
            ->addData('Total', [70, 29, 77, 28, 55, 45])
            ->setColors(['#A155B9', '#F765A3'])
            ->setMarkers(['#A155B9', '#F765A3'], 7, 10)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            ->setWidth(1000)
            ->setLegend(true, 'top', 400, '24px')
            ->setGrid();
    }
}
