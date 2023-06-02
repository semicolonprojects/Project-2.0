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
        $data = $request->validate([
            'kode_barang' => 'required|unique:produk_curahs',
            'nama_barang' => 'required',
            'size' => 'required',
            'stock' => 'required|integer',
            'kategori' => 'required',
            'min_ammount' => 'nullable|integer',
            'stock_akhir' => 'nullable|integer',
            'hpp' => 'nullable|numeric',
            'harga' => 'required|numeric',
        ]);

        ProdukCurah::create($data);

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
        $data = $request->validate([
            'kode_barang' => 'required|unique:produk_curahs,kode_barang,' . $id,
            'nama_barang' => 'required',
            'size' => 'required',
            'stock' => 'required|integer',
            'kategori' => 'required',
            'min_ammount' => 'nullable|integer',
            'stock_akhir' => 'nullable|integer',
            'hpp' => 'nullable|numeric',
            'harga' => 'required|numeric',
        ]);

        $produk = ProdukCurah::findOrFail($id);
        $produk->update($data);

        return redirect('/logistik')->with('update', 'Berhasil Update');
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
