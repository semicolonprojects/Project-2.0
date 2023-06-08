<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TargetKaryawanCurah;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MktCurahdashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TargetKaryawanCurah $targetKaryawanCurah)
    {
        $user = User::all();
        $targetKaryawanCurah = Auth::user()->targetKaryawanCurah;
        return view('dashboard.marketing-curah.mkt-curah-dashboard',compact('user','targetKaryawanCurah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
