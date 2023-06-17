<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Charts\OrderStats;
use App\Charts\SaleThisMonth;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\Order;
use App\Models\OrderCurah;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(OrderStats $orderStats, SaleThisMonth $saleThisMonth)
    {
        $user = User::all();
        $model = new Order();
        $orderCurah = new OrderCurah();
        $productModel = new ProdukJadi();
        $productCurah = new ProdukCurah();
        $topProducts = $model->topProducts('Daily');
        $products = ProdukJadi::all();
        $lowStocks = $productModel->lowStock();
        $topCust = $model->topCustomer('Daily');
        $hpp = $productModel->hpp();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $hppPaginate = ProdukJadi::paginateCollection($hpp, $perPage, $currentPage, $path);
        $lowStocksPaginate = ProdukJadi::paginateCollection($lowStocks, $perPage, $currentPage, $path);

        $hppCurah = $productCurah->hppCurah();
        $totalTercapai = Channel::sum('total_tercapai');
        $totalProduk = $model->totalPembelian();
        $totalCurah = $orderCurah->totalPembelian();
        $stock = $productModel->selisihStock()->sum('selisih_stock');
        $stockCurah = $productCurah->selisihStockCurah()->sum('selisih_stock');

        $logistik = $stock + $stockCurah;

        $harga = 0;
        $hargaJual = 0;
        $totalHpp = 0;
        $profit = 0;
        $profitCurah = 0;
        $profitOrder = 0;

        foreach ($totalProduk as $totalProduks) {
            foreach ($hpp as $hpps) {
                switch ($totalProduks->nama_channel) {
                    case 'Reseller':
                        $harga = $hpps->harga_rs;
                        break;
                    case 'Maklon':
                        $harga = $hpps->harga_mkl;
                        break;
                    case 'Distributor':
                        $harga = $hpps->harga_ds;
                        break;
                    default:
                        $harga = $hpps->harga_ecer;
                        break;
                        $hargaJual = $harga * $totalProduks->total_order;
                        if ($hpps == 0) {
                            $totalHpp = 0;
                        } else {
                            $totalHpp = $totalProduks->total_order * $hpps->total_hpp;
                            $profitOrder = $hargaJual - $totalHpp;
                        }
                }
            }
        }

        foreach ($totalCurah as $totalCurahs) {
            foreach ($hppCurah as $hppCurahs) {
                $harga = $hppCurahs->harga;
            }
            $hargaJual = $harga * $totalCurahs->total_order;
            $totalHpp = $totalCurah->total_order * $hppCurahs->total_hpp;
            $profitCurah = $hargaJual - $totalHpp;
        }

        $totalRevenue = $profitOrder + $profitCurah;

        return view('dashboard.super-admin.sadash', ['orderStats' => $orderStats->build(), 'saleThisMonth' => $saleThisMonth->build()], compact('user', 'topProducts', 'products', 'lowStocksPaginate', 'topCust', 'hppPaginate', 'totalTercapai', 'totalRevenue', 'logistik'));
    }

    public function sortChannels(Request $request, SaleThisMonth $saleThisMonth)
    {

        $sortBy = $request->input('sortBy', 'highest');
        $topProductsSort = $request->input('topProducts');
        $topCustomers = $request->input('topCustomers');
        $user = User::all();
        $model = new Order();
        $orderCurah = new OrderCurah();
        $productModel = new ProdukJadi();
        $productCurah = new ProdukCurah();
        $topProducts = $model->topProducts($topProductsSort);
        $products = ProdukJadi::all();
        $lowStocks = $productModel->lowStock();
        $topCust = $model->topCustomer($topCustomers);
        $hpp = $productModel->hpp();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $hppPaginate = ProdukJadi::paginateCollection($hpp, $perPage, $currentPage, $path);
        $lowStocksPaginate = ProdukJadi::paginateCollection($lowStocks, $perPage, $currentPage, $path);

        $hppCurah = $productCurah->hppCurah();
        $totalTercapai = Channel::sum('total_tercapai');
        $totalProduk = $model->totalPembelian();
        $totalCurah = $orderCurah->totalPembelian();
        $stock = $productModel->selisihStock()->sum('selisih_stock');
        $stockCurah = $productCurah->selisihStockCurah()->sum('selisih_stock');

        $logistik = $stock + $stockCurah;

        $harga = 0;
        $hargaJual = 0;
        $totalHpp = 0;
        $profit = 0;
        $profitCurah = 0;

        foreach ($totalProduk as $totalProduks) {
            foreach ($hpp as $hpps) {
                switch ($totalProduks->nama_channel) {
                    case 'Reseller':
                        $harga = $hpps->harga_rs;
                        break;
                    case 'Maklon':
                        $harga = $hpps->harga_mkl;
                        break;
                    case 'Distributor':
                        $harga = $hpps->harga_ds;
                        break;
                    default:
                        $harga = $hpps->harga_ecer;
                        break;
                }
            }
            $hargaJual = $harga * $totalProduks->total_order;
            $totalHpp = $totalProduks->total_order * $hpps->total_hpp;
            $profit = $hargaJual - $totalHpp;
        }

        foreach ($totalCurah as $totalCurahs) {
            foreach ($hppCurah as $hppCurahs) {
                $harga = $hppCurahs->harga;
            }
            $hargaJual = $harga * $totalCurahs->total_order;
            $totalHpp = $totalCurah->total_order * $hppCurahs->total_hpp;
            $profitCurah = $hargaJual - $totalHpp;
        }

        $totalRevenue = $profit + $profitCurah;

        return view('dashboard.super-admin.sadash', ['saleThisMonth' => $saleThisMonth->build($sortBy)], compact('user', 'topProducts', 'products', 'lowStocksPaginate', 'topCust', 'hppPaginate', 'totalTercapai', 'totalRevenue', 'logistik'));
    }
}
