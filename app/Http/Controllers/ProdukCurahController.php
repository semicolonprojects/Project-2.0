<?php

namespace App\Http\Controllers;

use App\Models\ProdukCurah;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdukCurahRequest;
use App\Http\Requests\UpdateProdukCurahRequest;
use Illuminate\Http\Request;

class ProdukCurahController extends Controller
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

        return view('dashboard.logistik.create-curah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukCurahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = ProdukCurah::create([
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'size' => $request->input('size'),
            'stock' => $request->input('stock'),
            'min_ammount' => $request->input('min_ammount'),
            'stock_akhir' => $request->input('stock_akhir'),
            'price' => $request->input('price'),
            'entry_price' => $request->input('entry_price'),
        ]);

        return redirect('/logistik')->with('stok', 'Stok Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukCurah  $produkCurah
     * @return \Illuminate\Http\Response
     */
    public function show($kode_barang)
    {
        $barangCurah = ProdukCurah::findOrFail($kode_barang);
        $stock = $barangCurah->stock;
        $size = $barangCurah->size;

        return response()->json([
            'stock' => $stock,
            'size' => $size,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukCurah  $produkCurah
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $produk = ProdukCurah::find($id);
        return view('dashboard.logistik.edit-curah', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukCurahRequest  $request
     * @param  \App\Models\ProdukCurah  $produkCurah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = ProdukCurah::find($id);
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
     * @param  \App\Models\ProdukCurah  $produkCurah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = ProdukCurah::find($id);
        $produk->delete();
        return redirect('logistik')->with('delete', 'Berhasil Hapus');
    }
}
