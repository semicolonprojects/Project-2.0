<?php

namespace App\Charts;

use App\Models\Order;
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
        $modelOrder = new Order;
        $orderRataRata = $modelOrder->rataRata();
        $value = $orderRataRata->pluck('average_order')->toArray();
        $nama = $orderRataRata->pluck('nama_barang')->toArray();

        return $this->orderSize->horizontalBarChart()
            ->setColors(['#F765A3'])
            ->addData('Average Order', $value)
            ->setXAxis($nama)
            ->setLegend(false, 'top', 400, '24px')
            ->setWidth(500)
            ->setHeight(100)
            ->setGrid();
    }
}
