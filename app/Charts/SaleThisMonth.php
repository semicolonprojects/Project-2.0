<?php

namespace App\Charts;

use App\Models\Channel;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SaleThisMonth
{
    protected $saleThisMonth;

    public function __construct(LarapexChart $saleThisMonth)
    {
        $this->saleThisMonth = $saleThisMonth;
    }

    public function build($sortBy = 'highest'): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $channel = new Channel();
        $topChannel = $channel->orderByChannel($sortBy);
        $channelNames = $topChannel->pluck('nama_channel')->toArray();
        $salesData = $topChannel->pluck('rasio')->toArray();
        return $this->saleThisMonth->barChart()
            ->addData('', $salesData)
            ->setXAxis($channelNames)
            ->setColors(['#FFC525']);
    }
}
