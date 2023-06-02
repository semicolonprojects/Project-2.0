<?php

namespace App\Http\Controllers;

use App\Models\ProdukJadi;
use App\Http\Controllers\Controller;
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
        $data = $request->validate([
            'kode_barang' => 'required|unique:produk_jadis',
            'nama_barang' => 'required',
            'size' => 'required',
            'stock' => 'required|integer',
            'kategori' => 'required',
            'min_ammount' => 'nullable|integer',
            'stock_akhir' => 'nullable|integer',
            'hpp' => 'nullable|numeric',
            'harga_ecer' => 'required|numeric',
            'harga_rs' => 'required|numeric',
            'harga_mkl' => 'required|numeric',
            'harga_ds' => 'required|numeric',
        ]);

        ProdukJadi::create($data);

        return redirect('/logistik')->with('success', 'Berhasil Menambahkan Produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukJadi  $produkJadi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangJadi = ProdukJadi::findOrFail($id);
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
     * @param  \App\Models\ProdukJadi  $produkJadi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = ProdukJadi::findOrFail($id);
        return view('dashboard.logistik.edit-jadi', compact('produk'));
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
        $data = $request->validate([
            'kode_barang' => 'required|unique:produk_jadis,kode_barang,' . $id,
            'nama_barang' => 'required',
            'size' => 'required',
            'stock' => 'required|integer',
            'kategori' => 'required',
            'min_ammount' => 'nullable|integer',
            'stock_akhir' => 'nullable|integer',
            'hpp' => 'nullable|numeric',
            'harga_ecer' => 'required|numeric',
            'harga_rs' => 'required|numeric',
            'harga_mkl' => 'required|numeric',
            'harga_ds' => 'required|numeric',
        ]);

        $produk = ProdukJadi::findOrFail($id);
        $produk->update($data);

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
