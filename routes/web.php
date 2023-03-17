<?php

use App\Http\Controllers\FinanceController;
use App\Http\Controllers\LogistikController;
use App\Http\Controllers\MarketingKonsinyasiDashboard;
use App\Http\Controllers\Mktdash2Controller;
use App\Http\Controllers\Mktdash4Controller;
use App\Http\Controllers\MktdashController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('dashboard.layout.main');
});

Route::get('/superadmin', [SuperAdminController::class, 'index']);

Route::get('/marketing', [MktdashController::class, 'index']);

Route::get('/marketing/topcust', [Mktdash2Controller::class, 'index']);

Route::get('/marketing/paymentstats', function () {
    return view('dashboard.mktdash3');
});

Route::get('/marketing/customerinfo', [Mktdash4Controller::class, 'index']);

Route::get('/marketing/orderstats', function () {
    return view('dashboard.mktdash5');
});

Route::get('/marketing/detailtermin', function () {
    return view('dashboard.mktdash6');
});

Route::get('/logistik', [LogistikController::class, 'index']);

Route::get('/logistik/datasupplier', function () {
    return view('dashboard.logistik2');
});

Route::get('/logistik/innout', function () {
    return view('dashboard.logistik3');
});

Route::get('/logistik/tanggalprod', function () {
    return view('dashboard.logistik4');
});

Route::get('/logistik/datasupplier-c', function () {
    return view('dashboard.logistik5');
});

Route::get('/logistik/dbb', function () {
    return view('dashboard.logistik6');
});

Route::get('/finance', [FinanceController::class, 'index']);

Route::get('/finance/invoice', function () {
    return view('dashboard.finance-invoice');
});

Route::get('/finance/income', function () {
    return view('dashboard.finance-income');
});

Route::get('/finance/outcome', function () {
    return view('dashboard.finance-outcome');
});

Route::get('/finance/outcome-i', function () {
    return view('dashboard.finance-outcome-i');
});

Route::get('/finance/outcome-e', function () {
    return view('dashboard.finance-outcome-e');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/marketing-k', [MarketingKonsinyasiDashboard::class, 'index']);

Route::get('/konsinyasi', function () {
    return view('dashboard.marketing-konsinyasi');
});

Route::get('/marketing-konsinyasi-detail', function () {
    return view('dashboard.marketing-konsinyasi-detail');
});
