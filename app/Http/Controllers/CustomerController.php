<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Location;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with('insurance','location', 'car')->get();
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $insurances = Insurance::all();
        $locations = Location::all();
        $cars = Car::all();
        return view('customers.create', [
            'cars' => $cars,
            'insurances' => $insurances,
            'locations' => $locations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'no_plate' => 'required|unique:customers',
            'top_id' => 'required',
            'location_id' => 'required',
            'cartype_id' => 'required'
        ]);
         Customer::create($request->all());
        return redirect(route('customers.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customer = Customer::where('id', $id)->first();
        return view('customers.show', [
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $locations = Location::all();
        $cars = Car::all();
        $insurances =Insurance::all();
        $customer = Customer::where('id', $id)->first();
        return view('customers.edit', [
            'customer' => $customer,
            'cars' => $cars,
            'insurances' => $insurances,
            'locations' => $locations
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::where('id', $id)->first();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->location_id = $request->location_id;
        $customer->email = $request->email;
        $customer->national = $request->national;
        $customer->pno = $request->pno;
        $customer->sno = $request->sno;
        $customer->cartype_id = $request->cartype_id;
        $customer->top_id = $request->top_id;
        $customer->no_plate = $request->no_plate;
        $customer->date_issued = $request->date_issued;
        $customer->date_expire = $request->date_expire;
        $customer->save();
        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::where('id', $id)->first();
        $customer->delete();
        return redirect(route('customers.index'));
    }
}
