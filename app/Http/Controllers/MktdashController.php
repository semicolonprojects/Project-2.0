<?php

namespace App\Http\Controllers;

use App\Charts\OrderStats;
use App\Charts\SalesAnalytics;
use App\Charts\UserActivity;
use App\Charts\DailyTargetStats;
use App\Charts\DailyOrderStats;
use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MktdashController extends Controller
{
    public function index(OrderStats $orderStats, UserActivity $userActivity, SalesAnalytics $salesAnalytics, DailyTargetStats $dailyTargetStats, DailyOrderStats $dailyOrderStats, SaleThisMonth $saleThisMonth)
    {
        return view('dashboard.mktdash', ['orderStats' => $orderStats->build(), 'userActivity' => $userActivity->build(), 'salesAnalytics' => $salesAnalytics->build(), 'dailyTargetStats' => $dailyTargetStats->build(), 'dailyOrderStats' => $dailyOrderStats->build(), 'saleThisMonth' => $saleThisMonth->build()]);
    }
}
