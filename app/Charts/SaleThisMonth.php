<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class SaleThisMonth
{
    protected $saleThisMonth;

    public function __construct(LarapexChart $saleThisMonth)
    {
        $this->saleThisMonth = $saleThisMonth;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->saleThisMonth->barChart()
            ->addData('', [6, 9, 3, 4, 10])
            ->setXAxis(['Tokopedia Utama', 'Shopee', 'Tokopedia Malang', 'Bukalapak', 'Lazada'])
            ->setColors(['#FFC525']);
    }
}
