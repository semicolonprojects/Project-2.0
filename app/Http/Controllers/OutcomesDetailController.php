<?php

namespace App\Http\Controllers;

use App\Models\OutcomesDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOutcomesDetailRequest;
use App\Http\Requests\UpdateOutcomesDetailRequest;
use App\Models\Outcome;
use Illuminate\Http\Request;

class OutcomesDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outcomeDetails = OutcomesDetail::all();
        return view('dashboard.finance.finance-jenis_outcome_edit', compact('outcomeDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOutcomesDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jenis_outcome' => 'required',
        ]);

        OutcomesDetail::create($request->all());

        return redirect('/finance/outcome')->with('success', 'Outcome Detail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OutcomesDetail  $outcomesDetail
     * @return \Illuminate\Http\Response
     */
    public function show(OutcomesDetail $outcomesDetail)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OutcomesDetail  $outcomesDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(OutcomesDetail $outcomesDetail)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutcomesDetailRequest  $request
     * @param  \App\Models\OutcomesDetail  $outcomesDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'jenis_outcome' => 'required',
        ]);

        $outcomesDetail = OutcomesDetail::findOrFail($id);

        $outcomesDetail->update([
            'name' => $request->input('name'),
            'jenis_outcome' => $request->input('jenis_outcome'),
        ]);

        return redirect()->route('outcomeName.index')->with('success', 'Outcome Detail updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OutcomesDetail  $outcomesDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $outcomesDetail = OutcomesDetail::findOrFail($id);

        $outcomesDetail->delete();

        if (OutcomesDetail::count() === 0) {
            return redirect()->route('outcomes.index')->with('delete', 'Berhasil Hapus');
        }

        return redirect()->route('outcomeName.index')->with('delete', 'Berhasil Hapus');
    }
}
