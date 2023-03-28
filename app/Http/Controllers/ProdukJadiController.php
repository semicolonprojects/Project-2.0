<?php

namespace App\Http\Controllers;

use App\Models\ProdukJadi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdukJadiRequest;
use App\Http\Requests\UpdateProdukJadiRequest;
use Illuminate\Http\Request;

class ProdukJadiController extends Controller
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
     * @param  \App\Http\Requests\StoreProdukJadiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = ProdukJadi::create([
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'size' => $request->input('size'),
            'stock' => $request->input('stock'),
            'stock_akhir' => $request->input('stock_akhir'),
            'price' => $request->input('price'),
            'entry_price' => $request->input('entry_price'),
        ]);

        return redirect('/logistik')->with('stok', 'Stok Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukJadi  $produkJadi
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukJadi $produkJadi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukJadi  $produkJadi
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukJadi $produkJadi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukJadiRequest  $request
     * @param  \App\Models\ProdukJadi  $produkJadi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = ProdukJadi::find($id);
        $produk->kode_barang = $request->kode_barang;
        $produk->nama_barang = $request->nama_barang;
        $produk->size = $request->size;
        $produk->stock = $request->stock;
        $produk->stock_akhir = $request->stock_akhir;
        $produk->price = $request->price;
        $produk->entry_price = $request->entry_price;
        $produk->save();

        return redirect('logistik')->with('update', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukJadi  $produkJadi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = ProdukJadi::find($id);
        $produk->delete();
        return redirect('logistik')->with('delete', 'Berhasil Hapus');
    }
}
