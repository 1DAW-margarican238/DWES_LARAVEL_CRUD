<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $airlines = Airline::select('id','name','country','email')->get();
        
        return view('airline',[
            'cabeceras' => ['ID','Name', 'Country', 'email'],
            'datos' => $airlines->toArray()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('create_airline');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'country'=>'required',
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show-airline',[
            'cabeceras' => ['ID','Name', 'Country', 'email'],
            'datos' => [Airline::findOrFail($id)->only('id','name','country','email')],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit-airline');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
