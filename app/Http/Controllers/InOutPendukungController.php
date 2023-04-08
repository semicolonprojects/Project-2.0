<?php

namespace App\Http\Controllers;

use App\Models\InOutPendukung;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInOutPendukungRequest;
use App\Http\Requests\UpdateInOutPendukungRequest;
use App\Models\BarangPendukung;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class InOutPendukungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangPendukung = BarangPendukung::all();
        $user = User::all();
        $inOut = new InOutPendukung();
        $stock = $inOut->getOrderShow();
        $detail = $inOut->accordionInOut();
        return view('dashboard.logistik.logistik8', compact('barangPendukung', 'stock', 'detail', 'user'));
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
     * @param  \App\Http\Requests\StoreInOutPendukungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mengambil data produk dari database berdasarkan kode_barang
        $produk = BarangPendukung::where('kode_barang', $request->input('kode_barang'))->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang masuk dan keluar
        $stokAkhir = $produk->stock + $request->input('barang_masuk') - $request->input('barang_keluar');

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        $produk = InOutPendukung::create([
            'kode_barang' => $request->input('kode_barang'),
            'barang_masuk' => $request->input('barang_masuk'),
            'barang_keluar' => $request->input('barang_keluar'),
            'date_in' => $request->input('date_in'),
            'user_id' => $request->input('user_id'),
            'date_out' => $request->input('date_out'),
        ]);

        return view('dashboard.logistik.logistik8')->with('stok', 'Stok Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InOutPendukung  $inOutPendukung
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangPendukung = BarangPendukung::findOrFail($id);
        $stock = $barangPendukung->stock;
        $size = $barangPendukung->size;

        return response()->json([
            'stock' => $stock,
            'size' => $size,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InOutPendukung  $inOutPendukung
     * @return \Illuminate\Http\Response
     */
    public function edit(InOutPendukung $inOutPendukung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInOutPendukungRequest  $request
     * @param  \App\Models\InOutPendukung  $inOutPendukung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInOutPendukungRequest $request, InOutPendukung $inOutPendukung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOutPendukung  $inOutPendukung
     * @return \Illuminate\Http\Response
     */
    public function destroy(InOutPendukung $inOutPendukung)
    {
        //
    }
}
