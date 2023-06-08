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
        $produk = BarangPendukung::where('id', $request->input('kode_barang'))->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang masuk dan keluar
        $stokAkhir = $produk->stock + $request->input('barang_masuk') - $request->input('barang_keluar');

        // Memperbarui data stok di database
        $produk->update(['stock_akhir' => $stokAkhir]);

        $produk = InOutPendukung::create([
            'kode_barang' => $request->input('kode_barang'),
            'barang_masuk' => $request->input('barang_masuk'),
            'barang_keluar' => $request->input('barang_keluar'),
            'date_in' => $request->input('date_in'),
            'user_id' => $request->input('user_id'),
            'date_out' => $request->input('date_out'),
        ]);

        return redirect('/logistik/innout-pendukung')->with('stok', 'Stok Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InOutPendukung  $inOutPendukung
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produkB = InOutPendukung::where('kode_barang', $id)->get();
        return view('dashboard.logistik.detail-inout-pendukung', compact('produkB'));
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
        $produk = BarangPendukung::where('id', $request->input('kode_barang'))->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang masuk dan keluar
        $stokAkhir = $produk->stock + $request->input('barang_masuk') - $request->input('barang_keluar');

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        // Mengambil data in_out_curah dari database berdasarkan id
        $inOutCurah = InOutPendukung::findOrFail($id);

        // Memperbarui data in_out_curah di database
        $inOutCurah->update([
            'barang_masuk' => $request->input('barang_masuk'),
            'barang_keluar' => $request->input('barang_keluar'),
            'date_in' => $request->input('date_in'),
            'user_id' => $request->input('user_id'),
            'date_out' => $request->input('date_out')
        ]);

        return redirect()->route('in_out_pendukung.show', ['in_out_pendukung' => $inOutCurah->kode_barang])->with('stok', 'Stok Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOutPendukung  $inOutPendukung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inOutCurah = InOutPendukung::findOrFail($id);

        $kode_barang = $inOutCurah->kode_barang;

        // Mengambil data produk dari database berdasarkan kode_barang
        $produk = BarangPendukung::where('id', $inOutCurah->kode_barang)->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang keluar dihapus
        $stokAkhir = $produk->stock + $inOutCurah->barang_keluar;

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        $inOutCurah->delete();

        $countInOutCurah = InOutPendukung::where('kode_barang', $kode_barang)->count();

        if ($countInOutCurah == 0) {

            return redirect('/logistik/innout-pendukung')->with('delete', 'Data berhasil dihapus');
        }

        return redirect()->back()->with('delete', 'Data berhasil dihapus');
    }
}
