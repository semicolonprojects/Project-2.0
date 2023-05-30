<?php

namespace App\Http\Controllers;

use App\Models\DataSupplier;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDataSupplierRequest;
use App\Http\Requests\UpdateDataSupplierRequest;
use Illuminate\Http\Request;

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
        $dataSupplier2 = DataSupplier::all();
        return view('dashboard.logistik.logistik2', compact('dataSupplier', 'dataSupplier2'));
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
