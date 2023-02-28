<?php

namespace App\Http\Controllers;

use App\Charts\HengkiOrderChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mktdash2Controller extends Controller
{
    public function index(HengkiOrderChart $hengkiOrder)
    {
        return view('dashboard.mktdash2', ['hengkiOrder' => $hengkiOrder->build()]);
    }
}
