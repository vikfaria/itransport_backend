<?php

namespace App\Http\Controllers;

use App\Models\VehicleAttribute;
use Illuminate\Http\Request;

class VehicleAttributeController extends Controller
{
    public function index()
	{
		$vehicleAttributes = VehicleAttribute::with('vehicle')->get();
		return view('vehicle_attributes.index', compact('vehicleAttributes'));
	}

    public function create()
	{
		$vehicles = Vehicle::all();
		return view('vehicle_attributes.create', compact('vehicles'));
	}

    public function store(Request $request)
    {
        VehicleAttribute::create($request->all());
        return redirect()->route('vehicle_attributes.index');
    }

    public function show(VehicleAttribute $vehicleAttribute)
    {
        return view('vehicle_attributes.show', compact('vehicleAttribute'));
    }

    public function edit(VehicleAttribute $vehicleAttribute)
	{
		$vehicles = Vehicle::all();
		return view('vehicle_attributes.edit', compact('vehicleAttribute', 'vehicles'));
	}


    public function update(Request $request, VehicleAttribute $vehicleAttribute)
    {
        $vehicleAttribute->update($request->all());
        return redirect()->route('vehicle_attributes.index');
    }

    public function destroy(VehicleAttribute $vehicleAttribute)
    {
        $vehicleAttribute->delete();
        return redirect()->route('vehicle_attributes.index');
    }
}
