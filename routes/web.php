<?php

use App\Http\Controllers\BarangPendukungController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DataAbsenController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\InOutController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogistikController;
use App\Http\Controllers\MarketingKonsinyasiDashboard;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\Mktdash2Controller;
use App\Http\Controllers\Mktdash4Controller;
use App\Http\Controllers\MktdashController;
use App\Http\Controllers\ProdukJadiController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::resource('absen', MasukController::class);

Route::resource('keluar', KeluarController::class);

Route::resource('izin', IzinController::class);

Route::resource('cuti', CutiController::class);

Route::resource('stock', ProdukJadiController::class);

Route::resource('curah', ProdukCurahController::class);

Route::resource('in_out', InOutController::class);

Route::resource('in_out_curah', InOutCurahController::class);

Route::resource('in_out_pendukung', InOutPendukungController::class);

Route::resource('barang_pendukung', BarangPendukungController::class);

Route::resource('data_supplier', DataSupplierController::class);

Route::resource('data_supplier_curah', SupplierCurahController::class);

Route::resource('channel', ChannelController::class);

Route::resource('customer', CustomerController::class);


Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/admin', [MasukController::class, 'index']);

Route::get('/superadmin', [SuperAdminController::class, 'index'])->middleware('auth', 'superadmin');

Route::get('/marketing', [MktdashController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/topcust', [Mktdash2Controller::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/channel', [ChannelController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/paymentstats', function () {
    return view('dashboard.marketing.mktdash3');
})->middleware('marketing', 'auth');

Route::get('/marketing/customerinfo', [CustomerController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/orderstats', function () {
    return view('dashboard.marketing.mktdash5');
})->middleware('marketing', 'auth');

Route::get('/marketing/detailtermin', function () {
    return view('dashboard.marketing.mktdash6');
})->middleware('marketing', 'auth');

Route::get('/marketing/customerinfo-create', function () {
    return view('dashboard.marketing.mkt-ci-create');
})->middleware('marketing', 'auth');

Route::patch('/marketing/customerinfo-update', function () {
    return view('dashboard.marketing.mkt-ci-update');
})->middleware('marketing', 'auth');

Route::get('/logistik', [LogistikController::class, 'index'])->middleware('logistik', 'auth');

Route::get('/logistik/datasupplier', function () {
    return view('dashboard.logistik.logistik2');
})->middleware('logistik', 'auth');

Route::get('/logistik/innout', [InOutController::class, 'index'])->middleware('logistik', 'auth');

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

Route::get('/curah', function () {
    return view('dashboard.marketing-curah.mkt-curah-customer-info');
});

Route::get('/curah/dashboard', function () {
    return view('dashboard.marketing-curah.mkt-curah-dashboard');
});

Route::get('/curah/innout', function () {
    return view('dashboard.marketing-curah.mkt-curah-innout');
});

Route::get('/curah/detailtermin', function () {
    return view('dashboard.marketing-curah.mkt-curah-detail-termin');
});

Route::get('/curah/paymentstats', function () {
    return view('dashboard.marketing-curah.mkt-curah-payment-stats');
});

Route::get('/curah/topcust', function () {
    return view('dashboard.marketing-curah.mkt-curah-topcust');
});

Route::get('/data-absen', [DataAbsenController::class, 'index']);
