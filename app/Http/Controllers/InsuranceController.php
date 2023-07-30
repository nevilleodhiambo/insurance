<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insurances = Insurance::all();
        return view('insurance.index', compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insurance.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insurance = Insurance::create($request->all());
        return redirect(route('insurance.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $insurance = Insurance::where('id', $id)->first();
        return view('insurance.show',[
            'insurance' => $insurance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $insurance = Insurance::where('id', $id)->first();
        return view('insurance.edit', [
            'insurance' => $insurance
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $insurance = Insurance::where('id', $id)->first();
        $insurance->name = $request->name;
        $insurance->description = $request->description;
        $insurance->save();
        return redirect(route('insurance.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $insurance = Insurance::where('id', $id)->first();
        $insurance->delete();
        return redirect(route('insurance.index'));
    }
}
