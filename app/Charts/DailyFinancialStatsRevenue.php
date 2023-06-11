<?php

namespace App\Charts;

use App\Models\Order;
use App\Models\OrderCurah;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class DailyFinancialStatsRevenue
{
    protected $dailyRevenue;

    public function __construct(LarapexChart $dailyRevenue)
    {
        $this->dailyRevenue = $dailyRevenue;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $model = new Order();
        $orderCurah = new OrderCurah();
        $totalProduk = $model->perBulan();
        $totalCurah = $orderCurah->perBulan();

        // Mengambil data bulan dari hasil query Order
        $bulan = $totalProduk->pluck('bulan')->toArray();

        // Mengambil data total_order dari hasil query Order
        $totalOrder = $totalProduk->pluck('total_order')->toArray();

        // Mengambil data total_order dari hasil query OrderCurah
        $totalOrderCurah = $orderCurah->pluck('total_order')->toArray();

        return $this->dailyRevenue->lineChart()
            ->addData('Order', $totalOrder)
            ->addData('Order Curah', $totalOrderCurah)
            ->setXAxis($bulan)
            ->setWidth(787)
            ->setHeight(296)
            ->setColors(['#A155B9', '#F765A3'])
            ->setMarkers(['#A155B9', '#F765A3'], 7, 10)
            ->setGrid()
            ->setLegend(false, 'top', 400, '24px', false);
    }
}
