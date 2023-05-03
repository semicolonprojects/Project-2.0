<?php

namespace App\Http\Controllers;

use App\Models\BarangPendukung;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBarangPendukungRequest;
use App\Http\Requests\UpdateBarangPendukungRequest;
use Illuminate\Http\Request;

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
        return view('dashboard.logistik.create-pendukung');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarangPendukungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barangPendukung = BarangPendukung::create([
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'size' => $request->input('size'),
            'stock' => $request->input('stock'),
            'min_ammount' => $request->input('min_ammount'),
            'stock_akhir' => $request->input('stock_akhir'),
            'entry_price' => $request->input('entry_price'),
            'price' => $request->input('price')
        ]);
        return redirect('/logistik')->with('success', 'Pendukung berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangJadi = BarangPendukung::findOrFail($id);
        $stock = $barangJadi->stock;
        $size = $barangJadi->size;

        return response()->json([
            'stock' => $stock,
            'size' => $size,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $produk = BarangPendukung::find($id);
        return view('dashboard.logistik.edit-pendukung', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangPendukungRequest  $request
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = BarangPendukung::find($id);
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
     * @param  \App\Models\BarangPendukung  $barangPendukung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = BarangPendukung::find($id);
        $produk->delete();
        return redirect('logistik')->with('delete', 'Berhasil Hapus');
    }
}
