<?php

namespace App\Http\Controllers;

use App\Charts\BestSeller;
use App\Http\Controllers\Controller;
use App\Models\BarangPendukung;
use App\Models\InOut;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LogistikController extends Controller
{
    public function index(BestSeller $bestSeller)
    {

        $stok = ProdukJadi::all();
        $stok2 = ProdukJadi::all();
        $barangPendukung = BarangPendukung::all();
        $barangPendukung2 = BarangPendukung::all();
        $barangPendukung3 = BarangPendukung::all();
        $produkCurah = ProdukCurah::all();
        $produkCurah2 = ProdukCurah::all();
        $produkCurah3 = ProdukCurah::all();
        $inout = InOut::all();
        $productModel = new ProdukJadi();
        $lowStocks = $productModel->lowStock();
        return view('dashboard.logistik.logistik', ['bestSeller' => $bestSeller->build()], compact('stok', 'stok2', 'barangPendukung', 'barangPendukung2', 'barangPendukung3', 'produkCurah', 'inout', 'produkCurah2', 'produkCurah3', 'lowStocks'));
    }
}
