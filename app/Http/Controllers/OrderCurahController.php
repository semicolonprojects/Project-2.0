<?php

namespace App\Http\Controllers;

use App\Models\OrderCurah;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InOutCurah;
use App\Models\ProdukCurah;
use App\Models\TargetKaryawanCurah;

class OrderCurahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_curah = OrderCurah::all();
        $cust_order = new OrderCurah();
        $show = $cust_order->show();
        return view('dashboard.marketing-curah.mkt-curah-order-stats', compact('order_curah', 'show'));
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
     * @param  \App\Http\Requests\StoreOrderCurahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderCurahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderCurah  $orderCurah
     * @return \Illuminate\Http\Response
     */
    public function show(OrderCurah $orderCurah)
    {
        //
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
    public function update(UpdateOrderCurahRequest $request, OrderCurah $orderCurah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderCurah  $orderCurah
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderCurah $orderCurah)
    {
        //
    }
}
