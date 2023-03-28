<?php

namespace App\Http\Controllers;

use App\Models\InOut;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInOutRequest;
use App\Http\Requests\UpdateInOutRequest;

class InOutController extends Controller
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
     * @param  \App\Http\Requests\StoreInOutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInOutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function show(InOut $inOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function edit(InOut $inOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInOutRequest  $request
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInOutRequest $request, InOut $inOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOut  $inOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(InOut $inOut)
    {
        //
    }
}
