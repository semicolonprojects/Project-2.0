<?php

namespace App\Http\Controllers;

use App\Models\SupplierCurah;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupplierCurahRequest;
use App\Http\Requests\UpdateSupplierCurahRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SupplierCurahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplierCurah = SupplierCurah::all();

        $perPage = 10; // Jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $path = Paginator::resolveCurrentPath();

        $supplierCurahPaginate = SupplierCurah::paginateCollection($supplierCurah, $perPage, $currentPage, $path);

        $supplierCurah2 = SupplierCurah::all();
        return view('dashboard.logistik.logistik5', compact('supplierCurahPaginate', 'supplierCurah2'));
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
     * @param  \App\Http\Requests\StoreSupplierCurahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplierCurah = SupplierCurah::create([
            'supplier_name' => $request->input('supplier_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'supplier_type' => $request->input('supplier_type'),
            'address' => $request->input('address')
        ]);

        return redirect('/logistik/datasupplier-c')->with('success', 'Supplier added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierCurah  $supplierCurah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplierCurah = SupplierCurah::find($id);
        return view('/logistik/datasupplier-c', compact('dataSupplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierCurah  $supplierCurah
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierCurah $supplierCurah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierCurahRequest  $request
     * @param  \App\Models\SupplierCurah  $supplierCurah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplierCurah = SupplierCurah::find($id);
        $supplierCurah->supplier_name = $request->supplier_name;
        $supplierCurah->phone = $request->phone;
        $supplierCurah->email = $request->email;
        $supplierCurah->supplier_type = $request->supplier_type;
        $supplierCurah->address = $request->address;
        $supplierCurah->save();
        return redirect('/logistik/datasupplier-c')->with('update', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierCurah  $supplierCurah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplierCurah = SupplierCurah::find($id);
        $supplierCurah->delete();
        return redirect('/logistik/datasupplier-c')->with('delete', 'Berhasil Hapus');
    }
}
