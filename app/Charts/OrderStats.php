<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class OrderStats
{
    protected $orderStats;

    public function __construct(LarapexChart $orderStats)
    {
        $this->orderStats = $orderStats;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->orderStats->donutChart()
            ->setTitle('')
            ->setSubtitle('')
            ->addData([69, 69, 69, 69])
            ->setLabels(['Completed', 'Pending', 'Cancel', 'Complain'])
            ->setColors(['#A155B9', '#165BAA', '#F765A3', '#FF4E4E'])
            ->setWidth(350)
            ->setHeight(350);
    }
}
