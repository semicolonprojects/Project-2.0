<?php

namespace App\Http\Controllers;

use App\Charts\HengkiOrderChart;
use App\Charts\OrderStats;
use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProdukJadi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function index(OrderStats $orderStats, SaleThisMonth $saleThisMonth)
    {
        $user = User::all();
        $model = new Order();
        $productModel = new ProdukJadi();
        $topProducts = $model->topProducts();
        $products = ProdukJadi::all();
        $lowStocks = $productModel->lowStock();
        $topCust = $model->topCustomer();
        return view('dashboard.super-admin.sadash', ['orderStats' => $orderStats->build(), 'saleThisMonth' => $saleThisMonth->build()], compact('user', 'topProducts', 'products', 'lowStocks', 'topCust'));
    }
}
