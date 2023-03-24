<?php

namespace App\Http\Controllers;

use App\Charts\DailyFinancialStatsOrderSize;
use App\Charts\DailyFinancialStatsProfit;
use App\Charts\DailyFinancialStatsRevenue;
use App\Charts\DailyFinancialStatsRevenue2;
use App\Charts\DailySalesStats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(DailyFinancialStatsRevenue $dailyRevenue, DailySalesStats $dailyStats, DailyFinancialStatsRevenue2 $dailyRevenue2, DailyFinancialStatsProfit $profit, DailyFinancialStatsOrderSize $orderSize)
    {
        return view('dashboard.finance.finance', ['dailyRevenue' => $dailyRevenue->build(), 'dailyStats' => $dailyStats->build(), 'dailyRevenue2' => $dailyRevenue2->build(), 'profit' => $profit->build(), 'orderSize' => $orderSize->build()]);
    }
}
