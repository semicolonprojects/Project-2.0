<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class BestSeller
{
    protected $bestSeller;

    public function __construct(LarapexChart $bestSeller)
    {
        $this->bestSeller = $bestSeller;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->bestSeller->barChart()
            ->addData('', [6, 9, 3, 4, 10])
            ->setXAxis(['Madu Durian', 'Madu Durian', 'Madu Durian', 'Madu Durian', 'Madu Durian'])
            ->setColors(['#FFC525']);
    }
}
