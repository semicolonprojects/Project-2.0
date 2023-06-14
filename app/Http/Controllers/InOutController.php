<?php

namespace App\Http\Controllers;

use App\Models\InOut;
use App\Http\Controllers\Controller;
use App\Models\ProdukJadi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $stockPaginate = ProdukJadi::paginateCollection($stock, $perPage, $currentPage, $path);

        return view('dashboard.logistik.logistik3', compact('barangJadi', 'stockPaginate', 'detail', 'user'));
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
        $produk->update(['stock_akhir' => $stokAkhir]);

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
        $produkB = InOut::where('kode_barang', $id)->get();
        return view('dashboard.logistik.detail-inout', compact('produkB'));
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
        $produk = ProdukJadi::where('id', $request->input('kode_barang'))->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang masuk dan keluar
        $stokAkhir = $produk->stock + $request->input('barang_masuk') - $request->input('barang_keluar');

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        // Mengambil data in_out_curah dari database berdasarkan id
        $inOutCurah = InOut::findOrFail($id);

        // Memperbarui data in_out_curah di database
        $inOutCurah->update([
            'barang_masuk' => $request->input('barang_masuk'),
            'barang_keluar' => $request->input('barang_keluar'),
            'date_in' => $request->input('date_in'),
            'user_id' => $request->input('user_id'),
            'date_out' => $request->input('date_out')
        ]);

        return redirect()->route('in_out.show', ['in_out' => $inOutCurah->kode_barang])->with('stok', 'Stok Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inOutCurah = InOut::findOrFail($id);

        $kode_barang = $inOutCurah->kode_barang;

        // Mengambil data produk dari database berdasarkan kode_barang
        $produk = ProdukJadi::where('id', $inOutCurah->kode_barang)->firstOrFail();

        // Menghitung stok akhir dari produk setelah barang keluar dihapus
        $stokAkhir = $produk->stock + $inOutCurah->barang_keluar;

        // Memperbarui data stok di database
        $produk->update(['stock' => $stokAkhir]);

        $inOutCurah->delete();

        $countInOutCurah = InOut::where('kode_barang', $kode_barang)->count();

        if ($countInOutCurah == 0) {

            return redirect('/logistik/innout')->with('delete', 'Data berhasil dihapus');
        }

        return redirect()->back()->with('delete', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {

        $query = $request->input('query');
        $results = InOut::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('kode_barang', 'LIKE', '%' . $query . '%')
                ->orWhere('user_id', 'LIKE', '%' . $query . '%')
                ->orWhere('barang_masuk', 'LIKE', '%' . $query . '%')
                ->orWhere('barang_keluar', 'LIKE', '%' . $query . '%')
                ->orWhere('date_in', 'LIKE', '%' . $query . '%')
                ->orWhere('date_out', 'LIKE', '%' . $query . '%')
                ->orWhere('keterangan', 'LIKE', '%' . $query . '%');
            // Lanjutkan dengan menambahkan atau mengubah where clause sesuai dengan daftar kolom yang Anda miliki pada model Anda
        })->get();

        $inOut = new InOut();
        $detail = $inOut->accordionInOut();
        $user = User::all();
        $barangJadi = ProdukJadi::all();


        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $stockPaginate = InOut::paginateCollection($results, $perPage, $currentPage, $path);

        // Lakukan sesuatu dengan hasil pencarian (misalnya, kirim data ke view)
        return view('dashboard.logistik.logistik3', compact('stockPaginate', 'detail', 'user', 'barangJadi'));
    }
}
