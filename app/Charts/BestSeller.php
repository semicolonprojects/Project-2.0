<?php

namespace App\Charts;

use App\Models\Order;
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
        $model = new Order();
        $bestSellers = $model->topProducts();

        $chart = $this->bestSeller->barChart();

        $data = [];
        $labels = [];

        foreach ($bestSellers as $bestSeller) {
            $data[] = $bestSeller->total_order;
            $labels[] = $bestSeller->nama_barang;
        }

        $chart->addData('', $data)
            ->setXAxis($labels)
            ->setColors(['#FFC525']);

        return $chart;
    }
}
