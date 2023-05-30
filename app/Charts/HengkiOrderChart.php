<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class HengkiOrderChart
{
    protected $hengkiOrder;

    public function __construct(LarapexChart $hengkiOrder)
    {
        $this->hengkiOrder = $hengkiOrder;
    }

    public function build($id): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $totalPerMonth = DB::table('orders')
            ->where('customer_id', $id)
            ->select(DB::raw('SUM(total_pembelian) as total, MONTH(created_at) as month'))
            ->groupBy('month')
            ->get();
        $dataTotalPembelian = [];
        $bulan = [];
        foreach ($totalPerMonth as $data) {
            $dataTotalPembelian[] = $data->total;
            $bulan[] = date('F', mktime(0, 0, 0, $data->month, 1));
        }

        return $this->hengkiOrder->lineChart()
            ->addData('Total Pembelian', $dataTotalPembelian)
            ->setXAxis($bulan)
            ->setWidth(1096.35)
            ->setHeight(303)
            ->setColors(['#A155B9'])
            ->setMarkers(['#A155B9'], 7, 10)
            ->setGrid();
    }
}
