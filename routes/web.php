<?php

use App\Http\Controllers\FinanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogistikController;
use App\Http\Controllers\MarketingKonsinyasiDashboard;
use App\Http\Controllers\MasukController;
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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/', [LoginController::class, 'authenticate']);

Route::resource('absen', MasukController::class);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/admin', [MasukController::class, 'index']);

Route::get('/superadmin', [SuperAdminController::class, 'index'])->middleware('auth', 'superadmin');

Route::get('/marketing', [MktdashController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/topcust', [Mktdash2Controller::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/paymentstats', function () {
    return view('dashboard.marketing.mktdash3');
})->middleware('marketing', 'auth');

Route::get('/marketing/customerinfo', [Mktdash4Controller::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/orderstats', function () {
    return view('dashboard.marketing.mktdash5');
})->middleware('marketing', 'auth');

Route::get('/marketing/detailtermin', function () {
    return view('dashboard.marketing.mktdash6');
})->middleware('marketing', 'auth');

Route::get('/logistik', [LogistikController::class, 'index'])->middleware('logistik', 'auth');

Route::get('/logistik/datasupplier', function () {
    return view('dashboard.logistik.logistik2');
})->middleware('logistik', 'auth');

Route::get('/logistik/innout', function () {
    return view('dashboard.logistik.logistik3');
})->middleware('logistik', 'auth');

Route::get('/logistik/tanggalprod', function () {
    return view('dashboard.logistik.logistik4');
})->middleware('logistik', 'auth');

Route::get('/logistik/datasupplier-c', function () {
    return view('dashboard.logistik.logistik5');
})->middleware('logistik', 'auth');

Route::get('/logistik/dbb', function () {
    return view('dashboard.logistik.logistik6');
})->middleware('logistik', 'auth');

Route::get('/finance', [FinanceController::class, 'index'])->middleware('finance', 'auth');

Route::get('/finance/invoice', function () {
    return view('dashboard.finance.finance-invoice');
})->middleware('finance', 'auth');

Route::get('/finance/income', function () {
    return view('dashboard.finance.finance-income');
})->middleware('finance', 'auth');

Route::get('/finance/outcome', function () {
    return view('dashboard.finance.finance-outcome');
})->middleware('finance', 'auth');

Route::get('/finance/outcome-i', function () {
    return view('dashboard.finance.finance-outcome-i');
})->middleware('finance', 'auth');

Route::get('/finance/outcome-e', function () {
    return view('dashboard.finance.finance-outcome-e');
})->middleware('finance', 'auth');

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/marketing-k', [MarketingKonsinyasiDashboard::class, 'index']);

Route::get('/marketing-k/orderstats', function () {
    return view('dashboard.marketing-konsinyasi.marketing-konsinyasi');
});

Route::get('/marketing-k/detail', function () {
    return view('dashboard.marketing-konsinyasi.marketing-konsinyasi-detail');
});

Route::get('/marketing-k/innout', function () {
    return view('dashboard.marketing-konsinyasi.marketing-konsinyasi-innout');
});
