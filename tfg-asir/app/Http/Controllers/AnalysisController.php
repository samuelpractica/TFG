<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function index()
    {
        $analyses = Analysis::all();
        return view('analyses.index', compact('analyses'));
    }

    public function create()
    {
        return view('analyses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Analysis::create($request->all());

        return redirect()->route('analyses.index')->with('success', 'Analysis created successfully.');
    }

    public function show($id)
    {
        $analysis = Analysis::findOrFail($id);
        return view('analyses.show', compact('analysis'));
    }

    public function edit($id)
    {
        $analysis = Analysis::findOrFail($id);
        return view('analyses.edit', compact('analysis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $analysis = Analysis::findOrFail($id);
        $analysis->update($request->all());

        return redirect()->route('analyses.index')->with('success', 'Analysis updated successfully.');
    }

    public function destroy($id)
    {
        $analysis = Analysis::findOrFail($id);
        $analysis->delete();

        return redirect()->route('analyses.index')->with('success', 'Analysis deleted successfully.');
    }
}
