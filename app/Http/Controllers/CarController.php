<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars/index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars/create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = Car::create($request->all());
        return redirect(route('cars.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::where('id', $id)->first();
        return view('cars.show', [
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Car::where('id', $id)->first();
        return view('cars.edit', [
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();
        $car->name = $request->name;
        $car->save();
        return redirect(route('cars.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::where('id', $id)->first();
        $car->delete();
        return redirect(route('cars.index'));
    }
}
