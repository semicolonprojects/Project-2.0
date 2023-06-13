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
use Illuminate\Pagination\Paginator;

class LogistikController extends Controller
{
    public function index(BestSeller $bestSeller)
    {

        $stok = ProdukJadi::all();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $stokPaginate = ProdukJadi::paginateCollection($stok, $perPage, $currentPage, $path);

        $stok2 = ProdukJadi::all();
        $barangPendukung = BarangPendukung::all();

        $barangPendukungPaginate = ProdukJadi::paginateCollection($barangPendukung, $perPage, $currentPage, $path);

        $barangPendukung2 = BarangPendukung::all();
        $barangPendukung3 = BarangPendukung::all();
        $produkCurah = ProdukCurah::all();

        $produkCurahPaginate = ProdukJadi::paginateCollection($produkCurah, $perPage, $currentPage, $path);

        $produkCurah2 = ProdukCurah::all();
        $produkCurah3 = ProdukCurah::all();
        $inout = InOut::all();

        $inoutPaginate = InOut::paginateCollection($inout, $perPage, $currentPage, $path);

        $productModel = new ProdukJadi();
        $lowStocks = $productModel->lowStock();

        $lowStocksPaginate = ProdukJadi::paginateCollection($lowStocks, $perPage, $currentPage, $path);

        return view('dashboard.logistik.logistik', ['bestSeller' => $bestSeller->build()], compact('stokPaginate', 'stok2', 'barangPendukungPaginate', 'barangPendukung2', 'barangPendukung3', 'produkCurahPaginate', 'inoutPaginate', 'produkCurah2', 'produkCurah3', 'lowStocksPaginate'));
    }
}
