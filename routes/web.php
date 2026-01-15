<?php
use App\Http\Controllers\AirlineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});
Route::get('/test2', function () {
    return view('test2');
});
Route::get('/airline', [AirlineController::class,'index']);


Route::get('/create_airline', [AirlineController::class,'store']);


