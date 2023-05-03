<?php

namespace App\Http\Controllers;

use App\Charts\OrderStats;
use App\Charts\SalesAnalytics;
use App\Charts\UserActivity;
use App\Charts\DailyTargetStats;
use App\Charts\DailyOrderStats;
use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TargetKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MktdashController extends Controller
{

    public function index(OrderStats $orderStats, UserActivity $userActivity, SalesAnalytics $salesAnalytics, DailyTargetStats $dailyTargetStats, DailyOrderStats $dailyOrderStats, SaleThisMonth $saleThisMonth, TargetKaryawan $targetKaryawan)
    {
        $user = User::all();
        $targetKaryawan = Auth::user()->targetKaryawan;
        

        return view('dashboard.marketing.mktdash', [

            'orderStats' => $orderStats->build(),
            'userActivity' => $userActivity->build(),
            'salesAnalytics' => $salesAnalytics->build(),
            'dailyTargetStats' => $dailyTargetStats->build(),
            'dailyOrderStats' => $dailyOrderStats->build(),
            'saleThisMonth' => $saleThisMonth->build()

        ], compact('user','targetKaryawan'));
    }
}
