<?php

namespace App\Http\Controllers;

use App\Models\MaduKulak;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMaduKulakRequest;
use App\Http\Requests\UpdateMaduKulakRequest;

class MaduKulakController extends Controller
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
     * @param  \App\Http\Requests\StoreMaduKulakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaduKulakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function show(MaduKulak $maduKulak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function edit(MaduKulak $maduKulak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaduKulakRequest  $request
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaduKulakRequest $request, MaduKulak $maduKulak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaduKulak $maduKulak)
    {
        //
    }
}
