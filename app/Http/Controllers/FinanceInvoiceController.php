<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Facades\Invoice;

class FinanceInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::where('order_id', $id)->get();
        $order_id = Order::where('order_id', $id)->first();
        return view('dashboard.finance.finance-invoice', compact('orders', 'order_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generate($id)
    {
        $orders = Order::where('order_id', $id)->get();
        $order = Order::where('order_id', $id)->first();
        $diskon = $order->diskon ?? 0;
        $now = Carbon::now();
        $year = $now->year;
        $id = $order->order_id;
        $serialNumber = sprintf('INV/%03d/' . $order->channel->kode_channel . '/%d', $id, $year);
        $customer = new Buyer([
            'name'          => $order->customer->nama_lengkap,
            'custom_fields' => [
                'email' => $order->customer->email,
                'address' => $order->customer->alamat,
                'payment' => $order->tipe_pembayaran
            ],
        ]);

        $items = [];

        foreach ($orders as $order) {
            $invoiceItem = (new InvoiceItem())->title($order->produk->nama_barang)
                ->pricePerUnit($order->produk->price)
                ->quantity($order->total_order)
                ->subTotalPrice($order->produk->price * $order->total_order);
            $items[] = $invoiceItem;
        }

        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent($diskon)
            ->shipping($order->ongkir)
            ->status($order->status_barang)
            ->addItems($items)
            ->serialNumberFormat($serialNumber)
            ->currencyCode('IDR')
            ->logo(public_path('/Assets/images/Madukuy CMYK Logo.png'));

        return $invoice->stream();
    }
}
