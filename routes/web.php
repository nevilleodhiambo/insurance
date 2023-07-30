<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('customers', CustomerController::class);  
Route::resource('cars', CarController::class);
Route::resource('location', LocationController::class);
Route::resource('insurance', InsuranceController::class);


Route::get('/', 'App\Http\Controllers\HomeController@index');


