<?php

namespace App\Http\Controllers;

use App\Models\MaduKulak;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMaduKulakRequest;
use App\Http\Requests\UpdateMaduKulakRequest;
use Illuminate\Http\Request;

class MaduKulakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $madukulak = MaduKulak::all();
        return view('dashboard.logistik.madu-kulak',compact('madukulak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.logistik.create-madukulak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaduKulakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_madu' => 'required|string',
            'size' => 'required|string',
            'harga_per_gram' => 'required|numeric'
        ]);
        switch ($request->size) {
            case '1kg':
                $a = 1000;
                break;
            case '500ml':
                $a = 500;
                break;
            case '325ml':
                $a = 325;
                break;
            case '125ml':
                $a = 125;
                break;
            default:
                $a = 0;
                break;
        }

        $total = 0;


        $sum= ($a * $request->harga_per_gram);

        $validatedData['harga_total'] = $sum;

        MaduKulak::create($validatedData);

        // Redirect or return a response
        return redirect('/logistik/bahanmadu')->with('success', 'Bahan Madu Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function show(MaduKulak $maduKulak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function edit(MaduKulak $maduKulak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaduKulakRequest  $request
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaduKulakRequest $request, MaduKulak $maduKulak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaduKulak  $maduKulak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $madukulak = MaduKulak::findOrFail($id);
        $madukulak->delete();

        // Redirect or return a response
        return redirect('/logistik/bahanmadu')->with('deleted', 'Bahan Madu Deleted successfully');
    }
}
