<?php

namespace App\Http\Controllers;

use App\Models\PointOfSale;
use Illuminate\Http\Request;

class PointOfSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pointsOfSale = PointOfSale::all();

        return view('pointsOfSale.index', compact('pointsOfSale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pointsOfSale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pointOfSale = new PointOfSale;

        $pointOfSale->location = $request->location;
        $pointOfSale->manager_id = $request->manager_id;

        $pointOfSale->save();

        return redirect()->route('pointsOfSale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointOfSale  $pointOfSale
     * @return \Illuminate\Http\Response
     */
    public function show(PointOfSale $pointOfSale)
    {
        return view('pointsOfSale.show', compact('pointOfSale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointOfSale  $pointOfSale
     * @return \Illuminate\Http\Response
     */
    public function edit(PointOfSale $pointOfSale)
    {
        return view('pointsOfSale.edit', compact('pointOfSale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointOfSale  $pointOfSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointOfSale $pointOfSale)
    {
        $pointOfSale->location = $request->location;
        $pointOfSale->manager_id = $request->manager_id;

        $pointOfSale->save();

        return redirect()->route('pointsOfSale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointOfSale  $pointOfSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointOfSale $pointOfSale)
    {
        $pointOfSale->delete();

        return redirect()->route('pointsOfSale.index');
    }
}
