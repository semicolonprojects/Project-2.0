<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InOut;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
use Illuminate\Contracts\Session\Session;

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
        return view('dashboard.marketing.mktdash5', compact('order', 'show'));
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
            $order->kode_barang = $value;
            $order->total_order = $request->total_order[$key];
            $order->diskon = $request->diskon;
            $order->status_pembayaran = $request->status_pembayaran;
            $order->tipe_pembayaran = $request->tipe_pembayaran;
            $order->tipe_pesanan = $request->tipe_pesanan;

            $product = ProdukJadi::where('kode_barang', $value)->first();
            $harga_barang = $product->price;
            $order->total_pembelian = ($request->total_order[$key] * $harga_barang) - (($harga_barang) *
                ($request->total_order[$key]) * ($request->diskon) / 100);
            $stokAkhir = $product->stock - $request->total_order[$key];
            $product->update(['stock' => $stokAkhir]);
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

            $order->save();
        }

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
        return view('dashboard.marketing.detail-order', compact('orders', 'order_id'));
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

        $produk = ProdukJadi::where('id', $request->input('kode_barang'))->firstOrFail();
        $stokAkhir = $produk->stock - $request->input('total_order');
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
        $stokAkhir = $produk->stock + $order->total_pembelian;
        $produk->update(['stock' => $stokAkhir]);

        $inout = InOut::where('created_at', $order->created_at)
            ->where('kode_barang',  $order->kode_barang)
            ->firstOrFail();
        $id = $inout->id;
        $updateInOut = InOut::where('id', $id)->firstOrFail();
        $updateInOut->delete();

        // Menghapus order
        $order->delete();

        $count = Order::where('order_id', $order->order_id)->count();

        if ($count == 0) {
            return redirect('/marketing/orderstats')->with('success', 'Order berhasil dihapus');
        } else {
            return redirect()->route('order.show', ['order' => $order->order_id])->with('success', 'Order berhasil dihapus');
        }
    }
}
