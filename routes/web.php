<?php
use App\Http\Controllers\AirlineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/airline', [AirlineController::class,'index']);

Route::get('/airline/show/{id}',[AirlineController::class,'show'])->name('airline.show');

Route::get('airline/edit/{id}',[AirlineController::class,'edit'])->name('airline.edit');


// Route::get('/create_airline', [AirlineController::class,'store']);


