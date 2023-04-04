<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\ProdukJadi;


class OrderController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id'=> 'required|max:255|unique',
            'customer_id'=>'required',
            'user_id'=>'required',
            'kode_barang'=>'required',
            'status_pembayaran'=>'required|max:255',
            'tipe_pesanan'=>'required|max:255',
            'total_pembelian'=>'required',
            'total_order'=>'required',
            'diskon'=>'nullable',
            'ongkir'=>'required',
            'status_barang'=>'required',
            'note'=>'nullable|max:255'

        ]);

        Order::create($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
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
        $rules = [
            'status_pembayaran'=> 'required|max:255',
            'total_pembelian'=> 'required',
            'total_order'=>'required',
            'status_barang'=>'required',
        ];

        $validatedData = $request->validate($rules); 
        Order::where('id', $order->id)
        ->update($validatedData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
