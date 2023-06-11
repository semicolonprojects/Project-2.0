<?php

namespace App\Charts;

use App\Models\Order;
use App\Models\OrderCurah;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class DailyFinancialStatsRevenue2
{
    protected $dailyRevenue2;

    public function __construct(LarapexChart $dailyRevenue2)
    {
        $this->dailyRevenue2 = $dailyRevenue2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {

        $modelOrder = new Order();
        $modelOrderCurah = new OrderCurah();
        $totalProduk = $modelOrder->totalPembelianPerMinggu()->where('created_at', now())->toArray();
        $totalCurah = $modelOrderCurah->totalPembelianPerMingguLalu()->where('created_at', now())->toArray();
        $modelProduk = new ProdukJadi();
        $modelProdukCurah = new ProdukCurah();
        $hpps = $modelProduk->hpp();
        $hppsCurah = $modelProdukCurah->hppCurah();

        $profitOrder = 0;
        $profitCurah = 0;

        foreach ($totalProduk as $totalProduks) {
            foreach ($hpps as $hpps) {
                switch ($totalProduks->nama_channel) {
                    case 'Reseller':
                        $harga = $hpps->harga_rs;
                        break;
                    case 'Maklon':
                        $harga = $hpps->harga_mkl;
                        break;
                    case 'Distributor':
                        $harga = $hpps->harga_ds;
                        break;
                    default:
                        $harga = $hpps->harga_ecer;
                        break;
                }
            }
            $hargaJual = $harga * $totalProduks->total_order;
            $totalHpp = $totalProduks->total_order * $hpps->total_hpp;
            $profitOrder += $hargaJual - $totalHpp;
        }

        foreach ($totalCurah as $totalCurahs) {
            foreach ($hppsCurah as $hppsCurahs) {
                $harga = $hppsCurahs->harga;
            }
            $hargaJual = $harga * $totalCurahs->total_order;
            $totalHpp = $totalCurahs->total_order * $hppsCurahs->total_hpp;
            $profitCurah += $hargaJual - $totalHpp;
        }

        $totalRevenue = $profitOrder + $profitCurah;

        return $this->dailyRevenue2->horizontalBarChart()
            ->setColors(['#F765A3'])
            ->addData('Revenue', [$totalRevenue])
            ->setXAxis(['Revenue'])
            ->setLegend(false, 'top', 400, '24px')
            ->setWidth(500)
            ->setHeight(100)
            ->setGrid();
    }
}
