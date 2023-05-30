<?php

namespace App\Http\Controllers;

use App\Charts\OrderStats;
use App\Charts\SalesAnalytics;
use App\Charts\UserActivity;
use App\Charts\DailyTargetStats;
use App\Charts\DailyOrderStats;
use App\Charts\HengkiOrderChart;
use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\TargetKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MktdashController extends Controller
{

    public function index(OrderStats $orderStats, UserActivity $userActivity, SalesAnalytics $salesAnalytics, DailyTargetStats $dailyTargetStats, DailyOrderStats $dailyOrderStats, SaleThisMonth $saleThisMonth, TargetKaryawan $targetKaryawan)
    {
        $user = User::all();
        $targetKaryawan = Auth::user()->targetKaryawan;
        $dailyTarget = Auth::user()->DailyTargetStats;
        $model = new Order();
        $topProducts = $model->topProducts();
        $topCust = $model->topCustomer();
        return view('dashboard.marketing.mktdash', [

            'orderStats' => $orderStats->build(),
            'userActivity' => $userActivity->build(),
            'salesAnalytics' => $salesAnalytics->build(),
            'dailyTargetStats' => $dailyTargetStats->build(),
            'dailyOrderStats' => $dailyOrderStats->build(),
            'saleThisMonth' => $saleThisMonth->build()

        ], compact('user', 'targetKaryawan', 'topProducts', 'topCust'));
    }

    public function show($id, HengkiOrderChart $hengkiOrder)
    {
        $order = Order::where('customer_id', $id)->firstOrFail();
        $top = $order->orderBy('total_order', 'desc')->take(3)->get();
        $totalOrder = $order->sum('total_order');
        $spent = $order->sum('total_pembelian');
        return view('dashboard.marketing.mkt-topcust', ['hengkiOrder' => $hengkiOrder->build($id)], compact('order', 'top', 'totalOrder', 'spent'));
    }
}
