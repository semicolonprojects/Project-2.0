<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Channel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use Illuminate\Http\Request;
class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income = Income::all();
        $channel = Channel::all();
        return view('dashboard.finance.finance-income', compact('income','channel'));
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
     * @param  \App\Http\Requests\StoreIncomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'nama_channel' => 'required',
            'tipe_income' => 'required',
        ]);

        // Create a new income
        $income = Income::create($validatedData);

        // Redirect to the index page with success message
        return redirect('/finance/income')->with('success', 'Income created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        // Show the edit form
        return view('incomes.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncomeRequest  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Income $income)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'nama_channel' => 'required',
            'tipe_income' => 'required',
        ]);

        // Update the income
        $income->update($validatedData);

        // Redirect to the index page with success message
        return redirect()->route('incomes.index')->with('success', 'Income updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        // Delete the income
        $income->delete();

        // Redirect to the index page with success message
        return redirect()->route('incomes.index')->with('success', 'Income deleted successfully');
    }
}
