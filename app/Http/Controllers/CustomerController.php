<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Expr\New_;

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

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $customerPaginate = Customer::paginateCollection($customer, $perPage, $currentPage, $path);

        return view('dashboard.marketing.mktdash4', compact('customerPaginate', 'wallet'));
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
            'tipe_customer' => 'required',
            'customer_id' => 'required|max:255|unique:customers',
            'nama_lengkap' => 'required|max:255|unique:customers',
            'alamat' => 'required|max:255',
            'no_telepon' => 'required|max:255|unique:customers',
            'email' => 'required|max:255|unique:customers',
            'tempat' => 'required|max:255',
            'tanggal_lahir' => 'required'
        ]);



        $customer = new Customer;
        $customer->tipe_customer = $request->tipe_customer;
        $customer->customer_id = $customer->tipe_customer . '-' . $request->customer_id;
        $validatedData['customer_id'] = $customer->customer_id;
        $validatedData['user_id'] = auth()->user()->id;
        $customer->fill($validatedData);
        $customer->save();
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
        $customer->tipe_customer = $request->tipe_customer;
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

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Customer::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('tipe_customer', 'LIKE', '%' . $query . '%')
                ->orWhere('customer_id', 'LIKE', '%' . $query . '%')
                ->orWhere('nama_lengkap', 'LIKE', '%' . $query . '%')
                ->orWhere('alamat', 'LIKE', '%' . $query . '%')
                ->orWhere('no_telepon', 'LIKE', '%' . $query . '%')
                ->orWhere('email', 'LIKE', '%' . $query . '%')
                ->orWhere('tempat', 'LIKE', '%' . $query . '%')
                ->orWhere('tanggal_lahir', 'LIKE', '%' . $query . '%')
                ->orWhere('nama_lengkap', 'LIKE', '%' . $query . '%');
            // Lanjutkan dengan menambahkan atau mengubah where clause sesuai dengan daftar kolom yang Anda miliki pada model Anda
        })->get();


        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $customerPaginate = Customer::paginateCollection($results, $perPage, $currentPage, $path);

        $wallet = Order::groupBy('customer_id')
            ->selectRaw('customer_id, SUM(total_pembelian) as total')
            ->get();

        // Lakukan sesuatu dengan hasil pencarian (misalnya, kirim data ke view)
        return view('dashboard.marketing.mktdash4', ['customerPaginate' => $customerPaginate, 'wallet' => $wallet]);
    }
}
