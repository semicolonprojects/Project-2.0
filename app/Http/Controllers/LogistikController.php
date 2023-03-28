<?php

namespace App\Http\Controllers;

use App\Charts\BestSeller;
use App\Http\Controllers\Controller;
use App\Models\ProdukJadi;
use Illuminate\Http\Request;

class LogistikController extends Controller
{
    public function index(BestSeller $bestSeller)
    {

        $stok = ProdukJadi::all();
        $stok2 = ProdukJadi::all();
        $stok3 = ProdukJadi::all();
        return view('dashboard.logistik.logistik', ['bestSeller' => $bestSeller->build()], compact('stok', 'stok2', 'stok3'));
    }
}
