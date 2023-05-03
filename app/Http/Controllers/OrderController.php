<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\ProdukJadi;
use Illuminate\Support\Facades\DB;

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
        $orderModal = Order::all();
        // $cust_order = new Order();
        // $show = $cust_order->show();
        // $detail = $cust_order->coba();
        $collection = collect([Order::all()]);
        // $result = $collection->mapToGroups(function ($item, $key) {
        //     return [$item['order_id'] => $item['kode_barang']];
        // });
        $orders = Order::pluck('order_id', 'kode_barang');
        return view('dashboard.marketing.mktdash5', compact('order', 'orderModal'));
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
        return view('dashboard.marketing.add-new-order-form', compact('produk', 'produkJs', 'customer'));
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
            $order->tipe_pesanan = $request->tipe_pesanan;
            $order->total_pembelian = $request->total_pembelian;
            $order->ongkir = $request->ongkir;
            $order->status_barang = $request->status_barang;
            $order->note = $request->note;
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
    // public function show($order_id)
    // {

    //     // $orders = DB::table('orders')
    //     //     ->select(
    //     //         'orders.order_id',
    //     //         'orders.customer_id',
    //     //         'orders.user_id',
    //     //         'orders.status_pembayaran',
    //     //         'orders.tipe_pesanan',
    //     //         'orders.total_pembelian',
    //     //         'orders.diskon',
    //     //         'orders.ongkir',
    //     //         'orders.note',
    //     //         DB::raw('GROUP_CONCAT(DISTINCT orders.kode_barang) AS kode_barang'),
    //     //         DB::raw('GROUP_CONCAT(DISTINCT orders.total_order) AS total_order'),
    //     //     )
    //     //     ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
    //     //     ->where('orders.order_id', $order_id)
    //     //     ->groupBy('orders.order_id', 'orders.customer_id', 'orders.user_id', 'orders.status_pembayaran', 'orders.tipe_pesanan', 'orders.total_pembelian', 'orders.diskon', 'orders.ongkir', 'orders.note',)
    //     //     ->get()
    //     //     ->map(function ($order) {
    //     //         $order->kode_barang = explode(',', $order->kode_barang);
    //     //         $order->total_order = explode(',', $order->total_order);
    //     //         $order->diskon = explode(',', $order->diskon);
    //     //         $order->nama_barang = ProdukJadi::whereIn('id', $order->kode_barang)->pluck('nama_barang');
    //     //         return $order;
    //     //     })
    //     //     ->first();

    //     $orders = DB::table('orders')
    //         ->select(
    //             'orders.order_id',
    //             'orders.customer_id',
    //             'orders.user_id',
    //             'orders.status_pembayaran',
    //             'orders.tipe_pesanan',
    //             'orders.total_pembelian',
    //             'orders.diskon',
    //             'orders.ongkir',
    //             'orders.note',
    //             DB::raw('GROUP_CONCAT(DISTINCT orders.kode_barang) AS kode_barang'),
    //             DB::raw('GROUP_CONCAT(DISTINCT orders.total_order) AS total_order'),
    //             DB::raw('GROUP_CONCAT(DISTINCT produk_jadis.price) AS harga')
    //         )
    //         ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
    //         ->where('orders.order_id', $order_id)
    //         ->groupBy('orders.order_id', 'orders.customer_id', 'orders.user_id', 'orders.status_pembayaran', 'orders.tipe_pesanan', 'orders.total_pembelian', 'orders.diskon', 'orders.ongkir', 'orders.note',)
    //         ->get()
    //         ->map(function ($order) {
    //             $order->kode_barang = explode(',', $order->kode_barang);
    //             $order->total_order = explode(',', $order->total_order);
    //             $order->nama_barang = ProdukJadi::whereIn('id', $order->kode_barang)->pluck('nama_barang');
    //             $order->harga = explode(',', $order->harga);
    //             return $order;
    //         })
    //         ->first();


    //     if (!$orders) {
    //         return abort(404);
    //     }

    //     return view('dashboard.marketing.detail-order', compact('orders'));
    // }

    public function show($id)
    {

        $orders = Order::find($id);

        return view('dashboard.marketing.detail-order', compact('orders'));
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
    public function update(Request $request, $order_id)
    {

        $order = Order::where('order_id', $order_id)->first();

        if (!$order) {
            return redirect('/marketing/orderstats')->with('error', 'Order tidak ditemukan');
        }

        foreach ($request->kode_barang as $key => $value) {
            $order->user_id = $request->user_id;
            $order->customer_id = $request->customer_id;
            $order->kode_barang = $value;
            $order->total_order = $request->total_order[$key];
            $order->diskon = $request->diskon;
            $order->status_pembayaran = $request->status_pembayaran;
            $order->tipe_pesanan = $request->tipe_pesanan;
            $order->total_pembelian = $request->total_pembelian;
            $order->ongkir = $request->ongkir;
            $order->status_barang = $request->status_barang;
            $order->note = $request->note;
        }
        $order->save();

        return redirect('/marketing/orderstats')->with('success', 'Order berhasil diupdate');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($order_id)
    {

        $order = Order::find($order_id);

        if (!$order) {
            return redirect('/marketing/orderstats')->with('error', 'Order tidak ditemukan');
        }

        $order->delete();

        return redirect('/marketing/orderstats')->with('success', 'Order berhasil dihapus');
    }
}
