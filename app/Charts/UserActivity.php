<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class UserActivity
{
    protected $userActivity;

    public function __construct(LarapexChart $userActivity)
    {
        $this->userActivity = $userActivity;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->userActivity->lineChart()
            ->addData('Current', [40, 93, 35, 42, 18, 82])
            ->addData('Previous', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'])
            ->setColors(['#A155B9', '#F765A3'])
            ->setMarkers(['#A155B9', '#F765A3'], 7, 10)
            ->setHeight(300)
            ->setWidth(300)
            ->setDataLabels(false)
            ->setGrid()
            ->setLegend(true, 'top', 400, '12px');
    }
}
