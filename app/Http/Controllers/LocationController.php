<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $location = Location::create($request->all());
        return redirect(route('location.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $location = Location::where('id', $id)->first();
        return view('location.show', [
            'location' => $location
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $location = Location::where('id', $id)->first();
        return view('location.edit', [
            'location' => $location
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $location = Location::where('id', $id)->first();
        $location->name = $request->name;
        $location->save();
        return redirect(route('location.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $location = Location::where('id', $id)->first();
        $location->delete();
        return redirect(route('location.index'));

    }
}
