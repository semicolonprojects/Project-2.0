<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangPendukungController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DataAbsenController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\InOutController;
use App\Http\Controllers\InOutCurahController;
use App\Http\Controllers\InOutPendukungController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogistikController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\MktdashController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukJadiController;
use App\Http\Controllers\ProdukCurahController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DataSupplierController;
use App\Http\Controllers\FinanceInvoiceController;
use App\Http\Controllers\HargaPokokPenjualanController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\OutcomesDetailController;
use App\Http\Controllers\SupplierCurahController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MaduKulakController;
use App\Http\Controllers\MktCurahdashController;
use App\Http\Controllers\OrderCurahController;
use App\Http\Controllers\TargetKaryawanController;
use App\Http\Controllers\TargetKaryawanCurahController;

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

Route::get('/', [LoginController::class, 'index'])->middleware('guest');

Route::post('/', [LoginController::class, 'authenticate'])->name('login');

Route::get('/dashboard', [LoginController::class, 'dashboard']);

Route::resource('absen', MasukController::class);

Route::resource('keluar', KeluarController::class);

Route::resource('izin', IzinController::class);

Route::resource('cuti', CutiController::class);

Route::resource('stock', ProdukJadiController::class);

Route::resource('curah', ProdukCurahController::class);

Route::resource('pendukung', BarangPendukungController::class);

Route::resource('in_out', InOutController::class);

Route::resource('in_out_curah', InOutCurahController::class);

Route::resource('in_out_pendukung', InOutPendukungController::class);

Route::resource('barang_pendukung', BarangPendukungController::class);

Route::resource('data_supplier', DataSupplierController::class);

Route::resource('data_supplier_curah', SupplierCurahController::class);

Route::resource('channel', ChannelController::class);

Route::resource('customer', CustomerController::class);

Route::resource('targetKaryawan', TargetKaryawanController::class);

Route::resource('order', OrderController::class);

Route::resource('invoice', FinanceInvoiceController::class);

Route::resource('outcomes', OutcomeController::class);

Route::resource('outcomeName', OutcomesDetailController::class);

Route::resource('income', IncomeController::class);

Route::resource('hpp', HargaPokokPenjualanController::class);

Route::resource('maduKulak', MaduKulakController::class);

Route::resource('targetKaryawanC', TargetKaryawanCurahController::class);

Route::resource('orderCurah', OrderCurahController::class)->middleware('auth', 'curah');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', [MasukController::class, 'index']);

Route::get('/superadmin', [SuperAdminController::class, 'index'])->middleware('auth', 'superadmin')->name('superadmin.index');

Route::get('/superadmin/sort', [SuperAdminController::class, 'sortChannels'])->middleware('auth', 'superadmin')->name('superadmin.sort-channels');

Route::get('/marketing', [MktdashController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/sort', [MktdashController::class, 'sort'])->middleware('marketing', 'auth')->name('marketing.sort');

Route::get('/marketing/topcust/{id}', [MktdashController::class, 'show'])->name('topcust')->middleware('marketing', 'auth');

Route::get('/marketing/channel', [ChannelController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/customerinfo', [CustomerController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/customerinfo', [CustomerController::class, 'search']);

Route::get('/marketing/orderstats', [OrderController::class, 'index'])->middleware('marketing', 'auth');

Route::get('/marketing/orderstats', [OrderController::class, 'search'])->middleware('marketing', 'auth');

Route::patch('/marketing/customerinfo-update', function () {
    return view('dashboard.marketing.mkt-ci-update');
})->middleware('marketing', 'auth');

Route::patch('/marketing/targetkaryawan-edit', function () {
    return view('dashboard.marketing.mkt-targetk-edit');
})->middleware('marketing', 'auth');

Route::get('/logistik', [LogistikController::class, 'index'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/sort', [LogistikController::class, 'sort'])->middleware('logistik', 'logistikrendra', 'auth')->name('logistik.sort');

Route::get('/logistik/datasupplier', [DataSupplierController::class, 'index'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/innout', [InOutController::class, 'index'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/innout', [InOutController::class, 'search'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/innout-curah', [InOutCurahController::class, 'index'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/innout-curah', [InOutCurahController::class, 'search'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/innout-pendukung', [InOutPendukungController::class, 'index'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/innout-pendukung', [InOutPendukungController::class, 'search'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/datasupplier-c', [SupplierCurahController::class, 'index'])->middleware('logistik', 'logistikrendra', 'auth');

Route::get('/logistik/bahanmadu', [MaduKulakController::class, 'index'])->middleware('logistikrendra', 'superadmin', 'auth');

Route::get('/hpp', [HargaPokokPenjualanController::class, 'index'])->middleware('superadmin', 'logistikrendra', 'auth');

Route::get('/finance', [FinanceController::class, 'index'])->middleware('finance', 'auth');

Route::get('/finance/income', [IncomeController::class, 'index'])->middleware('finance', 'auth');

Route::get('/finance/outcome', [OutcomeController::class, 'index'])->middleware('finance', 'auth');

Route::get('/invoice/download/{id}', [FinanceInvoiceController::class, 'generate'])->name('invoice.download');

Route::get('/curah', [MktCurahdashController::class, 'index'])->middleware('curah', 'auth');

Route::get('/curah-sort', [MktCurahdashController::class, 'sort'])->middleware('curah', 'auth')->name('marekting_curah.sort');

Route::get('/curah-order', [OrderCurahController::class, 'index'])->middleware('curah', 'auth');

Route::get('/curah-order', [OrderCurahController::class, 'search'])->middleware('curah', 'auth');

Route::get('/data-absen', [DataAbsenController::class, 'index'])->middleware('superadmin', 'auth');;
