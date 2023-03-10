<?php

namespace App\Http\Controllers;

use App\Charts\OrderStats;
use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(OrderStats $orderStats, SaleThisMonth $saleThisMonth)
    {
        return view('dashboard.sadash', ['orderStats' => $orderStats->build(), 'saleThisMonth' => $saleThisMonth->build()]);
    }
}
