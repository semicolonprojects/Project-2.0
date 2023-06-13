<?php

namespace App\Http\Controllers;

use App\Charts\DailyFinancialStatsOrderSize;
use App\Charts\DailyFinancialStatsProfit;
use App\Charts\DailyFinancialStatsRevenue;
use App\Charts\DailyFinancialStatsRevenue2;
use App\Charts\DailySalesStats;
use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\Order;
use App\Models\OrderCurah;
use App\Models\Outcome;
use App\Models\OutcomesDetail;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
use App\Models\TargetKaryawan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;

class FinanceController extends Controller
{

    public function index(DailyFinancialStatsRevenue $dailyRevenue, DailySalesStats $dailyStats, DailyFinancialStatsRevenue2 $dailyRevenue2, DailyFinancialStatsProfit $profit, DailyFinancialStatsOrderSize $orderSize)
    {
        $modelOrder = new Order;
        $modelOrderCurah = new OrderCurah;
        $order = $modelOrder::all();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $orderPaginate = Order::paginateCollection($order, $perPage, $currentPage, $path);

        $modelProduk = new ProdukJadi;
        $modelProdukCurah = new ProdukCurah;
        $hpp = $modelProduk->hpp();
        $hppCurah = $modelProdukCurah->hppCurah();
        $totalProduk = $modelOrder->totalPembelianPerMinggu();
        $totalProdukLalu = $modelOrder->totalPembelianPerMingguLalu();
        $totalCurah = $modelOrderCurah->totalPembelianPerMinggu();
        $totalCurahLalu = $modelOrderCurah->totalPembelianPerMingguLalu();
        $hari = $modelOrder->perHari();
        $hariCurah = $modelOrderCurah->perHari();
        $totalOrderHari = $hari->pluck('total_order')->toArray() + $hariCurah->pluck('total_order')->toArray();
        $targetKaryawan = TargetKaryawan::all();
        $incomeModel = new Income();
        $outcomeModel = new Outcome();
        $outcomeCategory = new OutcomesDetail();

        $incomeTotal = $incomeModel->whereDate('created_at', now())->sum('total_income');
        $outcomeTotal = $outcomeModel->whereDate('created_at', now())->sum('jumlah_outcome');

        $totalDebtToday = $outcomeModel->getTotalOutcomeByCategoryAndDate('Debt');
        $totalCreditToday = $outcomeModel->getTotalOutcomeByCategoryAndDate('Credit');

        $totalDebtThisMonth = $outcomeModel->getTotalOutcomeByCategoryAndMonth('Debt');
        $totalCreditThisMonth = $outcomeModel->getTotalOutcomeByCategoryAndMonth('Credit');

        $outcomeMonth = $outcomeModel->getTotalOutcomePerMonth();
        $incomeMonth = $incomeModel->getTotalIncomePerMonth();

        $harga = 0;
        $hargaJual = 0;
        $totalHpp = 0;
        $profitOrder = 0;
        $profitOrderLalu = 0;
        $profitCurah = 0;
        $profitCurahLalu = 0;


        /**
         * Profit Keseluruhan
         */
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
            $profitOrder = $hargaJual - $totalHpp;
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

        /**
         * Profit Minggu ini Dan Minggu Kemarin
         */
        foreach ($totalProdukLalu as $totalProdukLalus) {
            foreach ($hpp as $hpps) {
                switch ($totalProdukLalus->nama_channel) {
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
            $hargaJual = $harga * $totalProdukLalus->total_order;
            $totalHpp = $totalProdukLalus->total_order * $hpps->total_hpp;
            $profitOrderLalu = $hargaJual - $totalHpp;
        }

        foreach ($totalCurahLalu as $totalCurahLalus) {
            dd($totalCurahLalus);
            foreach ($hppCurah as $hppCurahs) {
                $harga = $hppCurahs->harga;
            }
            $hargaJual = $harga * $totalCurahLalus->total_order;
            $totalHpp = $totalCurahLalu->total_order * $hppCurahs->total_hpp;
            $profitCurahLalu = $hargaJual - $totalHpp;
        }

        $totalRevenueLalu = $profitOrderLalu + $profitCurahLalu;



        return view('dashboard.finance.finance', ['dailyRevenue' => $dailyRevenue->build(), 'dailyStats' => $dailyStats->build(), 'dailyRevenue2' => $dailyRevenue2->build(), 'profit' => $profit->build(), 'orderSize' => $orderSize->build()], compact('orderPaginate', 'hpp', 'totalRevenue', 'totalRevenueLalu', 'totalOrderHari', 'targetKaryawan', 'incomeTotal', 'outcomeTotal', 'totalDebtToday', 'totalCreditToday', 'totalCreditThisMonth', 'totalDebtThisMonth', 'incomeMonth', 'outcomeMonth'));
    }
}
