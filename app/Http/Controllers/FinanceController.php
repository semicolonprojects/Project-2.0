<?php

namespace App\Http\Controllers;

use App\Charts\DailyFinancialStatsOrderSize;
use App\Charts\DailyFinancialStatsProfit;
use App\Charts\DailyFinancialStatsRevenue;
use App\Charts\DailyFinancialStatsRevenue2;
use App\Charts\DailySalesStats;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProdukJadi;

class FinanceController extends Controller
{
    public function index(DailyFinancialStatsRevenue $dailyRevenue, DailySalesStats $dailyStats, DailyFinancialStatsRevenue2 $dailyRevenue2, DailyFinancialStatsProfit $profit, DailyFinancialStatsOrderSize $orderSize)
    {
        $order = Order::all();
        $modelProduk = new ProdukJadi();
        $hpp = $modelProduk->hpp();
        return view('dashboard.finance.finance', ['dailyRevenue' => $dailyRevenue->build(), 'dailyStats' => $dailyStats->build(), 'dailyRevenue2' => $dailyRevenue2->build(), 'profit' => $profit->build(), 'orderSize' => $orderSize->build()], compact('order', 'hpp'));
    }
}
