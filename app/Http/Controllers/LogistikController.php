<?php

namespace App\Http\Controllers;

use App\Charts\BestSeller;
use App\Http\Controllers\Controller;
use App\Models\BarangPendukung;
use App\Models\InOut;
use App\Models\Order;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
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
        $perPage2 = 10; // Jumlah item per halaman
        $currentPage2 = Paginator::resolveCurrentPage('page');
        $path2 = Paginator::resolveCurrentPath();
        $barangPendukungPaginate = BarangPendukung::paginateCollection($barangPendukung, $perPage2, $currentPage2, $path2);

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

        return view('dashboard.logistik.logistik', ['bestSeller' => $bestSeller->build(), 'stokPaginate' => $stokPaginate, 'stok2' => $stok2, 'barangPendukungPaginate' => $barangPendukungPaginate, 'barangPendukung2' => $barangPendukung2, 'barangPendukung3' => $barangPendukung3, 'produkCurahPaginate' => $produkCurahPaginate, 'inoutPaginate' => $inoutPaginate, 'produkCurah2' => $produkCurah2, 'produkCurah3' => $produkCurah3, 'lowStocksPaginate' => $lowStocksPaginate]);
    }

    public function sort(BestSeller $bestSeller, Request $request)
    {
        $topProducts = $request->input('topProducts', 'Daily');
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


        $date = Carbon::now();
        $inout = null;

        switch ($request->input('inout')) {
            case 'Yearly':
                $inout = InOut::whereYear('created_at', $date->year)->get();
                break;
            case 'Monthly':
                $inout = InOut::whereYear('created_at', $date->year)
                    ->whereMonth('created_at', $date->month)
                    ->get();
                break;
            default:
                $inout = InOut::all();
                break;
        }

        $inoutPaginate = InOut::paginateCollection($inout, $perPage, $currentPage, $path);

        $productModel = new ProdukJadi();
        $lowStocks = $productModel->lowStock();

        $lowStocksPaginate = ProdukJadi::paginateCollection($lowStocks, $perPage, $currentPage, $path);

        return view('dashboard.logistik.logistik', ['bestSeller' => $bestSeller->build($topProducts)], compact('stokPaginate', 'stok2', 'barangPendukungPaginate', 'barangPendukung2', 'barangPendukung3', 'produkCurahPaginate', 'inoutPaginate', 'produkCurah2', 'produkCurah3', 'lowStocksPaginate'));
    }
}
