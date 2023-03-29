<?php

namespace App\Http\Controllers;

use App\Models\BarangPendukung;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBarangPendukungRequest;
use App\Http\Requests\UpdateBarangPendukungRequest;

class BarangPendukungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarangPendukungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBarangPendukungRequest $request)
    {
        $barangPendukung = BarangPendukung::create([
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'size' =>$request->input('size'),
            'min_ammount' =>$request->input('min_ammount'),
            'stock_akhir' =>$request->input('stock_akhir'),
            'entry_price' =>$request->input('entry_price'),
            'price' =>$request->input('price')
        ]);

        return redirect('/logistik')->with('pendukung', 'Pendukung berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function show(BarangPendukung $barangPendukung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangPendukung $barangPendukung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangPendukungRequest  $request
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBarangPendukungRequest $request, BarangPendukung $barangPendukung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangPendukung $barangPendukung)
    {
        //
    }
}
