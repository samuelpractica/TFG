<?php

namespace App\Http\Controllers;

use App\Models\PointOfSale;
use Illuminate\Http\Request;

class PointOfSaleController extends Controller
{
    public function index()
    {
        $pointOfSales = PointOfSale::all();
        return view('point_of_sales.index', compact('pointOfSales'));
    }

    public function create()
    {
        return view('point_of_sales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'manager' => 'required',
        ]);

        PointOfSale::create($request->all());

        return redirect()->route('point_of_sales.index')->with('success', 'Point of sale created successfully.');
    }

    public function show($id)
    {
        $pointOfSale = PointOfSale::findOrFail($id);
        return view('point_of_sales.show', compact('pointOfSale'));
    }

    public function edit($id)
    {
        $pointOfSale = PointOfSale::findOrFail($id);
        return view('point_of_sales.edit', compact('pointOfSale'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'manager' => 'required',
        ]);

        $pointOfSale = PointOfSale::findOrFail($id);
        $pointOfSale->update($request->all());

        return redirect()->route('point_of_sales.index')->with('success', 'Point of sale updated successfully.');
    }

    public function destroy($id)
    {
        $pointOfSale = PointOfSale::findOrFail($id);
        $pointOfSale->delete();

        return redirect()->route('point_of_sales.index')->with('success', 'Point of sale deleted successfully.');
    }
}
