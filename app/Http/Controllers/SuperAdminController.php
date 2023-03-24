<?php

namespace App\Http\Controllers;

use App\Charts\OrderStats;
use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function index(OrderStats $orderStats, SaleThisMonth $saleThisMonth)
    {
        $user = User::all();
        return view('dashboard.super-admin.sadash', ['orderStats' => $orderStats->build(), 'saleThisMonth' => $saleThisMonth->build()], compact('user'));
    }
}
