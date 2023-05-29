<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOutcomeRequest;
use App\Http\Requests\UpdateOutcomeRequest;
use App\Models\OutcomesDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $option = OutcomesDetail::all();
        $total = Outcome::getInternalOutcomeTotals();
        $totalEksternal = Outcome::getEksternalOutcomeTotals();

        return view('dashboard.finance.finance-outcome', compact('option', 'total', 'totalEksternal'));
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
     * @param  \App\Http\Requests\StoreOutcomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_outcome' => 'required|exists:outcomes_details,id',
            'jumlah_outcome' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        Outcome::create($request->all());

        return redirect()->route('outcomes.index')->with('success', 'Outcome created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $outcome = Outcome::where('nama_outcome', $id)->get();
        $outcomeName = Outcome::where('nama_outcome', $id)->first();
        return view('dashboard.finance.finance-outcome-i', compact('outcome', 'outcomeName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Outcome $outcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutcomeRequest  $request
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outcome $outcome)
    {


        $request->validate([
            'nama_outcome' => 'required|exists:outcomes_details,id',
            'jumlah_outcome' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        $outcome->update($request->all());

        return redirect()->route('outcomes.show', ['outcome' => $outcome->nama_outcome])->with('success', 'Outcome updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outcome $outcome)
    {
        $outcome->delete();

        $count = Outcome::where('nama_outcome', $outcome->nama_outcome)->count();

        if ($count === 0) {
            return redirect()->route('outcomes.index')->with('delete', 'Berhasil Hapus');
        }
        return redirect()->route('outcomes.show', ['outcome' => $outcome->nama_outcome])->with('delete', 'Berhasil Hapus');
    }
}
