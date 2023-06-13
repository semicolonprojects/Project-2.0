<?php

namespace App\Http\Controllers;

use App\Models\DataSupplier;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDataSupplierRequest;
use App\Http\Requests\UpdateDataSupplierRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class DataSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSupplier = DataSupplier::all();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $dataSupplierPaginate = DataSupplier::paginateCollection($dataSupplier, $perPage, $currentPage, $path);

        $dataSupplier2 = DataSupplier::all();
        return view('dashboard.logistik.logistik2', compact('dataSupplierPaginate', 'dataSupplier2'));
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
     * @param  \App\Http\Requests\StoreDataSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dataSupplier = DataSupplier::create([
            'supplier_name' => $request->input('supplier_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'entry_price' => $request->input('entry_price'),
            'ukuran_kulak' => $request->input('ukuran_kulak'),
            'supplier_type' => $request->input('supplier_type'),
            'address' => $request->input('address')
        ]);

        return redirect('/logistik/datasupplier')->with('success', 'Supplier added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataSupplier = DataSupplier::find($id);
        return view('/logistik/datasupplier', compact('dataSupplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSupplier $dataSupplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataSupplierRequest  $request
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataSupplier = DataSupplier::find($id);
        $dataSupplier->supplier_name = $request->supplier_name;
        $dataSupplier->phone = $request->phone;
        $dataSupplier->email = $request->email;
        $dataSupplier->entry_price = $request->entry_price;
        $dataSupplier->ukuran_kulak = $request->ukuran_kulak;
        $dataSupplier->supplier_type = $request->supplier_type;
        $dataSupplier->address = $request->address;
        $dataSupplier->save();
        return redirect('/logistik/datasupplier')->with('update', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataSupplier = DataSupplier::find($id);
        $dataSupplier->delete();
        return redirect('/logistik/datasupplier')->with('delete', 'Berhasil Hapus');
    }
}
