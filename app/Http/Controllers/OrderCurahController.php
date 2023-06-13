<?php

namespace App\Http\Controllers;

use App\Models\OrderCurah;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderCurahRequest;
use App\Http\Requests\UpdateOrderCurahRequest;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InOutCurah;
use App\Models\ProdukCurah;
use App\Models\TargetKaryawanCurah;
use Illuminate\Pagination\Paginator;

class OrderCurahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curah = new OrderCurah;
        $orderCurah = $curah->show();
        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();
        $paginateCurah = OrderCurah::paginateCollection($orderCurah, $perPage, $currentPage, $path);
        return view('dashboard.marketing-curah.mktc-order', compact('paginateCurah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        $produk = ProdukCurah::all();
        $channel = Channel::where('nama_channel', 'Curah')->get();
        return view('dashboard.marketing-curah.mktc-curah-order-create', compact('customer', 'produk', 'channel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderCurahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (count($request->kode_barang) !== count($request->total_order)) {
            return redirect()->route('targetKaryawanC.index')->with('error', 'Order Gagal Dimasukkan');
        }

        foreach ($request->kode_barang as $key => $value) {
            $order = new OrderCurah;
            $order->user_id = $request->user_id;
            $order->order_id = $request->order_id;
            $order->customer_id = $request->customer_id;

            $previousOrder = OrderCurah::where('customer_id', $request->customer_id)->first();

            $order->kode_barang = $value;
            $order->total_order = $request->total_order[$key];
            $hitungKomisi = array_sum($request->total_order);
            $order->diskon = $request->diskon;
            $order->status_pembayaran = $request->status_pembayaran;
            $order->tipe_pembayaran = $request->tipe_pembayaran;
            $order->tipe_pesanan = $request->tipe_pesanan;

            $channel = Channel::findOrFail($request->tipe_pesanan);
            $product = ProdukCurah::where('kode_barang', $value)->first();
            $harga_barang = $product->harga;
            $komisi = 0;
            if ($hitungKomisi <= 30) {
                $komisi = 0.05;
            } else {
                $komisi = $request->komisi;
            }

            $diskon = $request->diskon / 100;
            $totalPembelian = $order->calculateTotalPembelian($request->total_order[$key], $harga_barang, $diskon);
            $order->total_pembelian = $totalPembelian;
            $order->komisi = $order->calculateKomisi($totalPembelian, $komisi);

            $stokAkhir = $product->stock - $request->total_order[$key];
            $product->update(['stock_akhir' => $stokAkhir]);
            $inout = new InOutCurah;
            $inout->kode_barang = $value;
            $inout->barang_keluar = $request->total_order[$key];
            $inout->keterangan = 'Order #' . ' ' .  $order->order_id;
            $inout->user_id = $order->user_id;
            $inout->date_out = now();
            $inout->save();

            $order->ongkir = $request->ongkir;
            $order->status_barang = $request->status_barang;
            $order->note = $request->note;
            $order->total_termin = $request->total_termin ?? 0;
            $order->tenggat_order = $request->tenggat_order;

            $order->save();
        }

        return redirect('/curah-order')->with('success', 'Order Berhasil Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderCurah  $orderCurah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = OrderCurah::where('order_id', $id)->get();
        $showFirst = OrderCurah::where('order_id', $id)->first();
        $barang = ProdukCurah::all();
        $channel = Channel::where('nama_channel', 'Curah')->get();
        return view('dashboard.marketing-curah.mktc-curah-order-detail', compact('show', 'showFirst', 'barang', 'channel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderCurah  $orderCurah
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderCurah $orderCurah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderCurahRequest  $request
     * @param  \App\Models\OrderCurah  $orderCurah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderCurah $orderCurah)
    {
        $order = OrderCurah::where('id', $orderCurah->id)->firstOrFail();
        $order->kode_barang = $request->input('kode_barang');
        $order->total_order = $request->input('total_order');
        $order->total_pembelian = $request->input('total_pembelian');
        $order->tipe_pesanan = $request->input('tipe_pesanan');
        $order->tipe_pembayaran = $request->input('tipe_pembayaran');
        $order->status_pembayaran = $request->input('status_pembayaran');
        $order->status_barang = $request->input('status_barang');
        $order->diskon = $request->input('diskon');
        $order->ongkir = $request->input('ongkir');
        $order->total_termin = $request->input('total_termin');
        $order->tenggat_order = $request->input('tenggat_order');
        $order->komisi = $order->komisi;

        $oldProduk = $request->input('total_order') - $order->total_order;
        $produk = ProdukCurah::where('id', $request->input('kode_barang'))->firstOrFail();
        $stokAkhir = $produk->stock - $oldProduk;
        $produk->update(['stock' => $stokAkhir]);

        $inout = InOutCurah::where('created_at', $order->created_at)
            ->where('kode_barang',  $request->input('kode_barang'))
            ->firstOrFail();
        $id = $inout->id;
        $updateInOut = InOutCurah::where('id', $id)->firstOrFail();
        $updateInOut->update(['barang_keluar' => $request->input('total_order')]);

        $order->save();
        return redirect()->route('orderCurah.show', ['orderCurah' => $order->order_id])->with('stok', 'Stok Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderCurah  $orderCurah
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderCurah $orderCurah)
    {
        $produk = ProdukCurah::where('id', $orderCurah->kode_barang)->firstOrFail();
        $stokAkhir = $produk->stock + $orderCurah->order;
        $produk->update(['stock' => $stokAkhir]);

        $inout = InOutCurah::where('created_at', $orderCurah->created_at)
            ->where('kode_barang',  $orderCurah->kode_barang)
            ->firstOrFail();
        $id = $inout->id;
        $updateInOut = InOutCurah::where('id', $id)->firstOrFail();
        $updateInOut->delete();

        // Menghapus order
        $orderCurah->delete();

        $count = OrderCurah::where('order_id', $orderCurah->order_id)->count();

        if ($count == 0) {
            return redirect('/curah-order')->with('success', 'Order berhasil dihapus');
        } else {
            return redirect()->route('orderCurah.show', ['orderCurah' => $orderCurah->order_id])->with('success', 'Order berhasil dihapus');
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $cust_order = OrderCurah::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('order_id', 'LIKE', '%' . $query . '%')
                ->orWhere('customer_id', 'LIKE', '%' . $query . '%')
                ->orWhere('user_id', 'LIKE', '%' . $query . '%')
                ->orWhere('kode_barang', 'LIKE', '%' . $query . '%')
                ->orWhere('status_pembayaran', 'LIKE', '%' . $query . '%')
                ->orWhere('tipe_pembayaran', 'LIKE', '%' . $query . '%')
                ->orWhere('total_termin', 'LIKE', '%' . $query . '%')
                ->orWhere('tenggat_order', 'LIKE', '%' . $query . '%')
                ->orWhere('tipe_pesanan', 'LIKE', '%' . $query . '%')
                ->orWhere('total_pembelian', 'LIKE', '%' . $query . '%')
                ->orWhere('total_order', 'LIKE', '%' . $query . '%')
                ->orWhere('diskon', 'LIKE', '%' . $query . '%')
                ->orWhere('ongkir', 'LIKE', '%' . $query . '%')
                ->orWhere('status_barang', 'LIKE', '%' . $query . '%')
                ->orWhere('note', 'LIKE', '%' . $query . '%')
                ->orWhere('komisi', 'LIKE', '%' . $query . '%');
            // Lanjutkan dengan menambahkan atau mengubah where clause sesuai dengan daftar kolom yang Anda miliki pada model Anda
        })->get();

        $cust_order = new OrderCurah();
        $show = $cust_order->show();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();
        $paginateCurah = OrderCurah::paginateCollection($show, $perPage, $currentPage, $path);

        // Lakukan sesuatu dengan hasil pencarian (misalnya, kirim data ke view)
        return view('dashboard.marketing-curah.mktc-order', compact('paginateCurah'));
    }
}
