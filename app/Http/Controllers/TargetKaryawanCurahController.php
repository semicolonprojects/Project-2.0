<?php

namespace App\Http\Controllers;

use App\Models\TargetKaryawanCurah;
use App\Http\Controllers\Controller;
use App\Models\TargetKaryawan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class TargetKaryawanCurahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $targetKaryawanCurah = Auth::user();
        return view('dashboard.marketing-curah.mkt-curah-dashboard', compact('targetKaryawanCurah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.marketing-curah.mkt-curah-targetk-create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTargetKaryawanCurahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_tercapai' => 'nullable|integer',
            'target' => 'required|numeric',
            'deadline_target' => 'required|date',
        ]);
        
        $validatedData['user_id'] = auth()->user()->id;
        TargetKaryawanCurah::create($validatedData);
        return redirect('/curah')->with('success', 'Target added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TargetKaryawanCurah  $targetKaryawanCurah
     * @return \Illuminate\Http\Response
     */
    public function show(TargetKaryawanCurah $targetKaryawanCurah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TargetKaryawanCurah  $targetKaryawanCurah
     * @return \Illuminate\Http\Response
     */
    public function edit(TargetKaryawanCurah $targetKaryawanCurah, $id)
    {
        $targetKaryawanCurah = TargetKaryawanCurah::findOrFail($id);
       
        return view('dashboard.marketing-curah.mkt-curah-targetk-edit',[
            'targetKaryawanCurah'=>$targetKaryawanCurah,
            'id'=>$targetKaryawanCurah->id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TargetKaryawanCurah  $targetKaryawanCurah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    
        $targetKaryawanCurah = TargetKaryawanCurah::findOrFail($id);
        $targetKaryawanCurah->total_tercapai = $request->input('total_tercapai');
        $targetKaryawanCurah->target = $request->input('target');
        $targetKaryawanCurah->deadline_target = $request->input('deadline_target');
        $targetKaryawanCurah->save();
    
        return redirect('/curah')->with('success', 'Target updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TargetKaryawanCurah  $targetKaryawanCurah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $targetKaryawanCurah = Auth::user()->targetKaryawanCurah;
        $targetKaryawanCurah = TargetKaryawanCurah::findOrFail($id);
        $targetKaryawanCurah->delete();
        return redirect('/curah')->with('delete', 'Target Deleted Successfully.');
    }
}
