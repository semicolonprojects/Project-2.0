<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InOut;
use App\Models\ProdukJadi;
use App\Models\TargetKaryawan;
use Illuminate\Pagination\Paginator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        $cust_order = new Order();
        $show = $cust_order->show();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $showPaginate = Order::paginateCollection($show, $perPage, $currentPage, $path);

        return view('dashboard.marketing.mktdash5', compact('order', 'showPaginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = ProdukJadi::all();
        $produkJs = ProdukJadi::all();
        $customer = Customer::all();
        $channel = Channel::all();
        return view('dashboard.marketing.add-new-order-form', compact('produk', 'produkJs', 'customer', 'channel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count($request->kode_barang) !== count($request->total_order)) {
            return redirect('/marketing/orderstats')->with('error', 'Order Gagal Dimasukkan');
        }

        foreach ($request->kode_barang as $key => $value) {
            $order = new Order;
            $order->user_id = $request->user_id;
            $order->order_id = $request->order_id;
            $order->customer_id = $request->customer_id;

            $previousOrder = Order::where('customer_id', $request->customer_id)->first();

            $order->kode_barang = $value;
            $order->total_order = $request->total_order[$key];
            $order->diskon = $request->diskon;
            $order->status_pembayaran = $request->status_pembayaran;
            $order->tipe_pembayaran = $request->tipe_pembayaran;
            $order->tipe_pesanan = $request->tipe_pesanan;

            $channel = Channel::findOrFail($request->tipe_pesanan);
            $product = ProdukJadi::where('id', $value)->first();
            $harga_barang = 0;
            $komisi = 0;

            switch ($channel->kode_channel) {
                case 'MKL':
                    $harga_barang = $product->harga_mkl;
                    $komisi = $previousOrder ? 0.03 : 0.05;
                    break;
                case 'RS':
                    $harga_barang = $product->harga_rs;
                    $komisi = $previousOrder ? 0.05 : 0.1;
                    break;
                case 'DS':
                    $harga_barang = $product->harga_ds;
                    $komisi = $previousOrder ? 0 : 0.03;
                    break;
                default:
                    $harga_barang = $product->harga_ecer;
                    $komisi = 0.2;
                    break;
            }

            $diskon = $request->diskon / 100;
            $totalPembelian = $order->calculateTotalPembelian($request->total_order[$key], $harga_barang, $diskon);
            $order->total_pembelian = $totalPembelian;
            $order->komisi = $order->calculateKomisi($totalPembelian, $komisi);

            $stokAkhir = $product->stock - $request->total_order[$key];
            $product->update(['stock_akhir' => $stokAkhir]);
            $inout = new InOut;
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

            if (TargetKaryawan::find($request->user_id) === null) {
                return redirect('/marketing')->with('delete', 'Tambahkan Target Karyawan Terlebih Dahulu');
            }

            $order->save();
        }

        $newlyAddedOrder = Order::latest()->first();
        $target = TargetKaryawan::findOrFail($request->user_id);
        $updatetarget = $target->total_tercapai + $newlyAddedOrder->komisi;
        $target->update(['total_tercapai' => $updatetarget]);
        $channel = Channel::findOrFail($newlyAddedOrder->tipe_pesanan);
        $updateChannel = $channel->total_tercapai + $newlyAddedOrder->komisi;
        $channel->update(['total_tercapai' => $updateChannel]);

        return redirect('/marketing/orderstats')->with('success', 'Order Berhasil Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $orders = Order::where('order_id', $id)->get();
        $order_id = Order::where('order_id', $id)->first();
        $channel = Channel::all();
        $barang = ProdukJadi::all();
        return view('dashboard.marketing.detail-order', compact('orders', 'order_id', 'channel', 'barang'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $customer = Customer::all();
        $produkJs = ProdukJadi::all();
        $produk = ProdukJadi::all();
        $channel = Channel::all();
        return view('dashboard.marketing.edit-order-form', compact('order', 'customer', 'produkJs', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order = Order::where('id', $order->id)->firstOrFail();
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
        $produk = ProdukJadi::where('id', $request->input('kode_barang'))->firstOrFail();
        $stokAkhir = $produk->stock - $oldProduk;
        $produk->update(['stock' => $stokAkhir]);

        $inout = InOut::where('created_at', $order->created_at)
            ->where('kode_barang',  $request->input('kode_barang'))
            ->firstOrFail();
        $id = $inout->id;
        $updateInOut = InOut::where('id', $id)->firstOrFail();
        $updateInOut->update(['barang_keluar' => $request->input('total_order')]);


        $order->save();
        return redirect()->route('order.show', ['order' => $order->order_id])->with('stok', 'Stok Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        // Mengembalikan stok barang jika order dihapus
        $produk = ProdukJadi::where('id', $order->kode_barang)->firstOrFail();
        $stokAkhir = $produk->stock + $order->order;
        $produk->update(['stock' => $stokAkhir]);

        $inout = InOut::where('created_at', $order->created_at)
            ->where('kode_barang',  $order->kode_barang)
            ->firstOrFail();
        $id = $inout->id;
        $updateInOut = InOut::where('id', $id)->firstOrFail();
        $updateInOut->delete();
        // Menghapus order
        $order->delete();
        $target = TargetKaryawan::findOrFail($order->user_id);
        $updatetarget = $target->total_tercapai - $order->komisi;
        $target->update(['total_tercapai' => $updatetarget]);

        $count = Order::where('order_id', $order->order_id)->count();

        if ($count == 0) {
            return redirect('/marketing/orderstats')->with('success', 'Order berhasil dihapus');
        } else {
            return redirect()->route('order.show', ['order' => $order->order_id])->with('delete', 'Order berhasil dihapus');
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Order::where(function ($queryBuilder) use ($query) {
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

        $cust_order = new Order();
        $show = $cust_order->show();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();
        $showPaginate = Order::paginateCollection($show, $perPage, $currentPage, $path);

        // Lakukan sesuatu dengan hasil pencarian (misalnya, kirim data ke view)
        return view('dashboard.marketing.mktdash5', compact('results', 'showPaginate'));
    }
}
