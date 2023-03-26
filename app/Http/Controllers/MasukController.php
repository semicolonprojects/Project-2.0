<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMasukRequest;
use App\Http\Requests\UpdateMasukRequest;
use App\Models\User;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('dashboard.layout.main', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layout.main', [
            'user' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMasukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $masuk = Masuk::create([
            'user_id' => $request->input('user_id'),
            'long' => $request->input('long'),
            'lat' => $request->input('lat'),
        ]);

        return redirect('/admin')->with('success', 'Berhasil Absen !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function show(Masuk $masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Masuk $masuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasukRequest  $request
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasukRequest $request, Masuk $masuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masuk $masuk)
    {
        //
    }
}
