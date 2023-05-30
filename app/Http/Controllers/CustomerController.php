<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        $wallet = Order::groupBy('customer_id')
            ->selectRaw('customer_id, SUM(total_pembelian) as total')
            ->get();
        return view('dashboard.marketing.mktdash4', compact('customer', 'wallet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.marketing.mkt-ci-create');
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
            'customer_id' => 'required|max:255|unique:customers',
            'nama_lengkap' => 'required|max:255|unique:customers',
            'alamat' => 'required|max:255',
            'no_telepon' => 'required|max:255|unique:customers',
            'email' => 'required|max:255|unique:customers',
            'tempat' => 'required|max:255',
            'tanggal_lahir' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Customer::create($validatedData);
        return redirect('/marketing/customerinfo')->with('success', 'Customer added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('dashboard.marketing.mkt-ci-update', [
            'customer' => $customer,
            'id' => $customer->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->customer_id = $request->customer_id;
        $customer->nama_lengkap = $request->nama_lengkap;
        $customer->alamat = $request->alamat;
        $customer->no_telepon = $request->no_telepon;
        $customer->email = $request->email;
        $customer->tempat = $request->tempat;
        $customer->tanggal_lahir = $request->tanggal_lahir;

        $customer->save();
        return redirect('/marketing/customerinfo')->with('update', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/marketing/customerinfo')->with('delete', 'Customer deleted successfully.');
    }
}
