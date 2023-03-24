<?php

namespace App\Http\Controllers;

use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mktdash4Controller extends Controller
{
    public function index(SaleThisMonth $saleThisMonth)
    {
        return view('dashboard.marketing.mktdash4', ['saleThisMonth' => $saleThisMonth->build()]);
    }
}
