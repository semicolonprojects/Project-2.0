<?php

namespace App\Http\Controllers;

use App\Models\Keluar;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKeluarRequest;
use App\Http\Requests\UpdateKeluarRequest;
use Illuminate\Http\Request;

class KeluarController extends Controller
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
     * @param  \App\Http\Requests\StoreKeluarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keluar = Keluar::create([
            'user_id' => $request->input('user_id'),
            'long' => $request->input('long'),
            'lat' => $request->input('lat'),
        ]);

        return redirect('/admin')->with('keluar', 'np🎶 Tulus - Hati Hati Di jalan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function show(Keluar $keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluar $keluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluarRequest  $request
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeluarRequest $request, Keluar $keluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluar $keluar)
    {
        //
    }
}
