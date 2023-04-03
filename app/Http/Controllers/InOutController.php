<?php

namespace App\Http\Controllers;

use App\Models\InOut;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInOutRequest;
use App\Http\Requests\UpdateInOutRequest;
use App\Models\ProdukJadi;
use App\Models\User;
use Illuminate\Http\Request;

class InOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangJadi = ProdukJadi::all();
        $user = User::all();
        $inOut = new InOut();
        $stock = $inOut->getOrderShow();
        $detail = $inOut->accordionInOut();
        return view('dashboard.logistik.logistik3', compact('barangJadi', 'stock', 'detail', 'user'));
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
     * @param  \App\Http\Requests\StoreInOutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Mengambil data produk dari database berdasarkan kode_barang
        $produk = ProdukJadi::where('kode_barang', $request->input('kode_barang'))->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang masuk dan keluar
        $stokAkhir = $produk->stock + $request->input('barang_masuk') - $request->input('barang_keluar');

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        $produk = InOut::create([
            'kode_barang' => $request->input('kode_barang'),
            'barang_masuk' => $request->input('barang_masuk'),
            'user_id' => $request->input('user_id'),
            'barang_keluar' => $request->input('barang_keluar'),
            'date_in' => $request->input('date_in'),
            'date_out' => $request->input('date_out'),
        ]);

        return redirect('/logistik/innout')->with('stok', 'Stok Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = InOut::find($id);
        return view('/logistik/innout', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function edit(InOut $inOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInOutRequest  $request
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInOutRequest $request, InOut $inOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(InOut $inOut)
    {
        //
    }
}
