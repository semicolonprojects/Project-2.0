<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIzinRequest;
use App\Http\Requests\UpdateIzinRequest;
use App\Models\User;
use Illuminate\Http\Request;

class IzinController extends Controller
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
    public function create(Request $request)
    {

        return view('dashboard.layout.main', [
            'user' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIzinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $izin = Izin::create([
            'user_id' => $request->input('user_id'),
            'keterangan' => $request->input('keterangan'),
        ]);

        return redirect('/admin')->with('keluar', 'np🎶 Tulus - Hati Hati Di jalan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function show(Izin $izin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function edit(Izin $izin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIzinRequest  $request
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIzinRequest $request, Izin $izin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Izin $izin)
    {
        //
    }
}
