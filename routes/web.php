<?php

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

Route::get('/superadmin', function () {
    return view('dashboard.sadash');
});

Route::get('/marketingdashboard', function () {
    return view('dashboard.mktdash');
});

Route::get('/marketingdashboard/topcust', function () {
    return view('dashboard.mktdash2');
});

Route::get('/marketingdashboard/paymentstats', function () {
    return view('dashboard.mktdash3');
});


Route::get('/marketingdashboard/customerinfo', function () {
    return view('dashboard.mktdash4');
});

Route::get('/marketingdashboard/orderstats', function () {
    return view('dashboard.mktdash5');
});

Route::get('/marketingdashboard/detailtermin', function () {
    return view('dashboard.mktdash6');
});

Route::get('/logistikdash', function () {
    return view('dashboard.logistik');
});

Route::get('/logistikdash/datasupplier', function () {
    return view('dashboard.logistik2');
});

Route::get('/logistikdash/innout', function () {
    return view('dashboard.logistik3');
});

Route::get('/logistikdash/tanggalprod', function () {
    return view('dashboard.logistik4');
});

Route::get('/logistikdash/datasupplier2', function () {
    return view('dashboard.logistik5');
});

Route::get('/logistikdash/dbb', function () {
    return view('dashboard.logistik6');
});

Route::get('/finance', function () {
    return view('dashboard.finance');
});

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