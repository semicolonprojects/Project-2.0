<?php

namespace App\Http\Controllers;

use App\Charts\DailyOrderStats;
use App\Charts\DailyTargetStats;
use App\Charts\SalesAnalytics;
use App\Charts\SaleThisMonth;
use App\Charts\UserActivity;
use App\Charts\RevenueKonsinyasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketingKonsinyasiDashboard extends Controller
{
    public function index(UserActivity $userActivity, SalesAnalytics $salesAnalytics, DailyTargetStats $dailyTargetStats, DailyOrderStats $dailyOrderStats, SaleThisMonth $saleThisMonth, RevenueKonsinyasi $revenueKonsinyasi)
    {
        return view('dashboard.marketing-konsinyasi-dashboard', ['userActivity' => $userActivity->build(), 'salesAnalytics' => $salesAnalytics->build(), 'dailyTargetStats' => $dailyTargetStats->build(), 'dailyOrderStats' => $dailyOrderStats->build(), 'saleThisMonth' => $saleThisMonth->build(), 'revenueKonsinyasi' => $revenueKonsinyasi->build()]);
    }
}
