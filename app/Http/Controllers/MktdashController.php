<?php

namespace App\Http\Controllers;

use App\Charts\OrderStats;
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

class MktdashController extends Controller
{

    public function index(OrderStats $orderStats, UserActivity $userActivity, DailyTargetStats $dailyTargetStats, DailyOrderStats $dailyOrderStats, SaleThisMonth $saleThisMonth, TargetKaryawan $targetKaryawan)
    {
        $user = User::all();
        $targetKaryawan = Auth::user()->targetKaryawan;
        $dailyTarget = Auth::user()->DailyTargetStats;
        $model = new Order();
        $topProducts = $model->topProducts('Daily');
        $topCust = $model->topCustomer('Daily');
        $overview = $model->marketingOverview('Daily');

        return view('dashboard.marketing.mktdash', [

            'orderStats' => $orderStats->build(),
            'userActivity' => $userActivity->build(),
            'dailyTargetStats' => $dailyTargetStats->build(),
            'dailyOrderStats' => $dailyOrderStats->build(),
            'saleThisMonth' => $saleThisMonth->build()

        ], compact('user', 'targetKaryawan', 'topProducts', 'topCust', 'overview'));
    }

    public function show($id, HengkiOrderChart $hengkiOrder)
    {
        $order = Order::where('customer_id', $id)->firstOrFail();
        $top = $order->orderBy('total_order', 'desc')->take(3)->get();
        $totalOrder = $order->sum('total_order');
        $spent = $order->sum('total_pembelian');
        return view('dashboard.marketing.mkt-topcust', ['hengkiOrder' => $hengkiOrder->build($id)], compact('order', 'top', 'totalOrder', 'spent'));
    }

    public function sort(OrderStats $orderStats, UserActivity $userActivity, DailyTargetStats $dailyTargetStats, DailyOrderStats $dailyOrderStats, SaleThisMonth $saleThisMonth, TargetKaryawan $targetKaryawan, Request $request)
    {
        $user = User::all();
        $targetKaryawan = Auth::user()->targetKaryawan;
        $dailyTarget = Auth::user()->DailyTargetStats;
        $model = new Order();
        $topProducts = $request->input('topProducts', 'Daily');
        $topProducts = $model->topProducts($topProducts);
        $topCustomers = $request->input('topCustomers', 'Daily');
        $topCust = $model->topCustomer($topCustomers);
        $marketingOverview = $request->input('marketingOverview', 'Daily');
        $overview = $model->marketingOverview($marketingOverview);

        $orderStatsSort = $request->input('orderStats', 'highest');

        return view('dashboard.marketing.mktdash', [

            'orderStats' => $orderStats->build($orderStatsSort),
            'userActivity' => $userActivity->build(),
            'dailyTargetStats' => $dailyTargetStats->build(),
            'dailyOrderStats' => $dailyOrderStats->build(),
            'saleThisMonth' => $saleThisMonth->build()

        ], compact('user', 'targetKaryawan', 'topProducts', 'topCust', 'overview'));
    }
}
