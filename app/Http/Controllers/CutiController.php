<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCutiRequest;
use App\Http\Requests\UpdateCutiRequest;
use Illuminate\Http\Request;

class CutiController extends Controller
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
     * @param  \App\Http\Requests\StoreCutiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuti = Cuti::create([
            'user_id' => $request->input('user_id'),
            'keterangan_cuti' => $request->input('keterangan_cuti'),
            'mulai_cuti' => $request->input('mulai_cuti'),
            'akhir_cuti' => $request->input('akhir_cuti'),
        ]);

        return redirect('/admin')->with('keluar', 'np🎶 Tulus - Hati Hati Di jalan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCutiRequest  $request
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCutiRequest $request, Cuti $cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuti $cuti)
    {
        //
    }
}
