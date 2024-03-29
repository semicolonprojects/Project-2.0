<?php

namespace App\Http\Controllers;

use App\Models\HargaPokokPenjualan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHargaPokokPenjualanRequest;
use App\Http\Requests\UpdateHargaPokokPenjualanRequest;
use App\Models\BarangPendukung;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HargaPokokPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hpp = HargaPokokPenjualan::all();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $hppPaginate = HargaPokokPenjualan::paginateCollection($hpp, $perPage, $currentPage, $path);

        return view('dashboard.hpp.hpp', compact('hppPaginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendukung = BarangPendukung::all();
        return view('dashboard.hpp.create-hpp', compact('pendukung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHargaPokokPenjualanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        switch ($request->size) {
            case '1kg':
                $a = 1000;
                break;
            case '500ml':
                $a = 500;
                break;
            case '325ml':
                $a = 325;
                break;
            case '125ml':
                $a = 125;
                break;
            case '70gr':
                $a = 70;
            default:
                $a = 0;
                break;
        }

        $total = 0;

        foreach ($request->barang_pendukung as $key => $value) {
            $total += $value;
        }

        $sum = ($a * $request->bahan_madu) + $total;


        $validatedData = $request->validate([
            'nama_produk' => 'required|string',
            'size' => 'required|string',
            'bahan_madu' => 'required|numeric',
        ]);

        $validatedData['total_hpp'] = $sum;
        $validatedData['bahan_pendukung'] = $total;

        HargaPokokPenjualan::create($validatedData);


        // Redirect or return a response
        return redirect('/hpp')->with('success', 'HPP Created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HargaPokokPenjualan  $hargaPokokPenjualan
     * @return \Illuminate\Http\Response
     */
    public function show(HargaPokokPenjualan $hargaPokokPenjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HargaPokokPenjualan  $hargaPokokPenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(HargaPokokPenjualan $hargaPokokPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHargaPokokPenjualanRequest  $request
     * @param  \App\Models\HargaPokokPenjualan  $hargaPokokPenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHargaPokokPenjualanRequest $request, HargaPokokPenjualan $hargaPokokPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HargaPokokPenjualan  $hargaPokokPenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hargaPokokPenjualan = HargaPokokPenjualan::findOrFail($id);
        $hargaPokokPenjualan->delete();

        // Redirect or return a response
        return redirect('/hpp')->with('deleted', 'HPP Deleted successfully');
    }
}
