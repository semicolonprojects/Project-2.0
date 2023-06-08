<?php

namespace App\Http\Controllers;

use App\Models\InOutCurah;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInOutCurahRequest;
use App\Http\Requests\UpdateInOutCurahRequest;
use App\Models\ProdukCurah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InOutCurahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangCurah = ProdukCurah::all();
        $user = User::all();
        $inOut = new InOutCurah();
        $stock = $inOut->getOrderShow();
        $detail = $inOut->accordionInOut();
        return view('dashboard.logistik.logistik7', compact('barangCurah', 'stock', 'detail', 'user'));
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
     * @param  \App\Http\Requests\StoreInOutCurahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mengambil data produk dari database berdasarkan kode_barang
        $produk = ProdukCurah::where('id', $request->input('kode_barang'))->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang masuk dan keluar
        $stokAkhir = $produk->stock + $request->input('barang_masuk') - $request->input('barang_keluar');

        // Memperbarui data stok di database
        $produk->update(['stock_akhir' => $stokAkhir]);

        $produk = InOutCurah::create([
            'kode_barang' => $request->input('kode_barang'),
            'barang_masuk' => $request->input('barang_masuk'),
            'barang_keluar' => $request->input('barang_keluar'),
            'date_in' => $request->input('date_in'),
            'user_id' => $request->input('user_id'),
            'date_out' => $request->input('date_out'),
        ]);

        return redirect('/logistik/innout-curah')->with('stok', 'Stok Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InOutCurah  $inOutCurah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produkB = InOutCurah::where('kode_barang', $id)->get();
        return view('dashboard.logistik.detail-inout-curah', compact('produkB'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InOutCurah  $inOutCurah
     * @return \Illuminate\Http\Response
     */
    public function edit(InOutCurah $inOutCurah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInOutCurahRequest  $request
     * @param  \App\Models\InOutCurah  $inOutCurah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'barang_masuk' => 'required|integer|min:0',
            'barang_keluar' => 'required|integer|min:0',
            'date_in' => 'required|date',
            'user_id' => 'required|integer',
            'date_out' => 'nullable|date'
        ]);

        // Mengambil data produk dari database berdasarkan kode_barang
        $produk = ProdukCurah::where('id', $request->input('kode_barang'))->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang masuk dan keluar
        $stokAkhir = $produk->stock + $request->input('barang_masuk') - $request->input('barang_keluar');

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        // Mengambil data in_out_curah dari database berdasarkan id
        $inOutCurah = InOutCurah::findOrFail($id);

        // Memperbarui data in_out_curah di database
        $inOutCurah->update([
            'barang_masuk' => $request->input('barang_masuk'),
            'barang_keluar' => $request->input('barang_keluar'),
            'date_in' => $request->input('date_in'),
            'user_id' => $request->input('user_id'),
            'date_out' => $request->input('date_out')
        ]);


        return redirect()->route('in_out_curah.show', ['in_out_curah' => $inOutCurah->kode_barang])->with('stok', 'Stok Berhasil Diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOutCurah  $inOutCurah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inOutCurah = InOutCurah::findOrFail($id);

        $kode_barang = $inOutCurah->kode_barang;

        // Mengambil data produk dari database berdasarkan kode_barang
        $produk = ProdukCurah::where('id', $inOutCurah->kode_barang)->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang keluar dihapus
        $stokAkhir = $produk->stock + $inOutCurah->barang_keluar;

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        $inOutCurah->delete();

        $countInOutCurah = InOutCurah::where('kode_barang', $kode_barang)->count();

        if ($countInOutCurah == 0) {

            return redirect('/logistik/innout-curah')->with('delete', 'Data berhasil dihapus');
        }

        return redirect()->back()->with('delete', 'Data berhasil dihapus');
    }
}
