<?php

namespace App\Http\Controllers;

use App\Charts\LineChartCurah;
use App\Charts\OrderStats;
use App\Http\Controllers\Controller;
use App\Models\OrderCurah;
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
    public function index(TargetKaryawanCurah $targetKaryawanCurah, OrderStats $orderStats, LineChartCurah $lineChartCurah)
    {
        $user = User::all();
        $targetKaryawanCurah = Auth::user()->targetKaryawanCurah;
        $modelCurah = new OrderCurah();
        $overview = $modelCurah->marketingOverview('Daily');
        return view('dashboard.marketing-curah.mktc-dash', ['orderStats' => $orderStats->build(), 'lineChartCurah' => $lineChartCurah->build()], compact('user', 'targetKaryawanCurah', 'overview'));
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

    public function sort(TargetKaryawanCurah $targetKaryawanCurah, Request $request, OrderStats $orderStats, LineChartCurah $lineChartCurah)
    {
        $sortOverview = $request->input('marketingOverview', 'Daily');
        $user = User::all();
        $targetKaryawanCurah = Auth::user()->targetKaryawanCurah;
        $modelCurah = new OrderCurah();
        $overview = $modelCurah->marketingOverview($sortOverview);
        return view('dashboard.marketing-curah.mktc-dash', ['orderStats' => $orderStats->build(), 'lineChartCurah' => $lineChartCurah->build()], compact('user', 'targetKaryawanCurah', 'overview'));
    }
}
