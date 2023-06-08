<?php

namespace App\Http\Controllers;

use App\Models\TargetKaryawan;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TargetKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $targetKaryawan = Auth::user();
        return view('dashboard.marketing.mktdash', compact('targetKaryawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.marketing.mkt-targetk-create',);
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
            'target' => 'required',
            'total_tercapai' => 'nullable',
            'deadline_target' => 'required',
            'user_id' => 'required',
            'order_id' => 'nullable'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        TargetKaryawan::create($validatedData);
        return redirect('/marketing')->with('success', 'Target added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TargetKaryawan  $targetKaryawan
     * @return \Illuminate\Http\Response
     */
    public function show(TargetKaryawan $targetKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TargetKaryawan  $targetKaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit(TargetKaryawan $targetKaryawan)
    {
        return view('dashboard.marketing.mkt-targetk-edit', [
            'targetKaryawan' => $targetKaryawan,
            'id' => $targetKaryawan->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TargetKaryawan  $targetKaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $targetKaryawan = TargetKaryawan::findOrFail($id);
        $targetKaryawan->user_id = $request->user_id;
        $targetKaryawan->target = $request->target;
        $targetKaryawan->deadline_target = $request->deadline_target;

        $targetKaryawan->save();
        return redirect('/marketing')->with('update', 'Target updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TargetKaryawan  $targetKaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $targetKaryawan = Auth::user()->targetKaryawan;
        $targetKaryawan = TargetKaryawan::findOrFail($id);
        $targetKaryawan->delete();
        return redirect('/marketing')->with('delete', 'Target Deleted Successfully.');
    }
}
