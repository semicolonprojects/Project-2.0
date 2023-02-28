<?php

namespace App\Http\Controllers;

use App\Charts\BestSeller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogistikController extends Controller
{
    public function index(BestSeller $bestSeller)
    {
        return view('dashboard.logistik', ['bestSeller' => $bestSeller->build()]);
    }
}
