<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos=Vehiculo::all();

        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'plate_number'=>'required|string|max:255|min:3',
            'brand'=>'required|string|max:255|min:3',
            'model'=>'required|string|max:255|min:3',
            'vehicle_type'=>'required|string|max:255|min:3',
            'color'=>'required|string|max:255|min:3',
            'capacity'=>'required|numeric|max:255|min:3',
            'daily_rate'=>'required|max:255|min:3',
            'status'=>'required|string|max:255|min:3',
        ]);

        Vehiculo::create($validated);

        return redirect()->route('vehiculos.index')->with('status', 'Vehiculo Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $validated=$request->validate([
            'plate_number'=>'required|string|max:255|min:3',
            'brand'=>'required|string|max:255|min:3',
            'model'=>'required|string|max:255|min:3',
            'vehicle_type'=>'required|string|max:255|min:3',
            'color'=>'required|string|max:255|min:3',
            'capacity'=>'required|string|max:255|min:3',
            'daily_rate'=>'required|string|max:255|min:3',
            'status'=>'required|string|max:255|min:3',
        ]);

        $vehiculo->update($validated);

        return redirect()->route('vehiculos.index')->with('status', 'Cliente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vehiculo)
    {
        //
    }
}
