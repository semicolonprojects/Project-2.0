<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class HengkiOrderChart
{
    protected $hengkiOrder;

    public function __construct(LarapexChart $hengkiOrder)
    {
        $this->hengkiOrder = $hengkiOrder;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->hengkiOrder->lineChart()
            ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            ->setWidth(1096.35)
            ->setHeight(303)
            ->setColors(['#A155B9', '#F765A3'])
            ->setMarkers(['#A155B9', '#F765A3'], 7, 10)
            ->setGrid();
    }
}
