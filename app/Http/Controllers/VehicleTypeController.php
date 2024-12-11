<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function index()
	{
		$vehicleTypes = VehicleType::all();
		return view('vehicle_types.index', compact('vehicleTypes'));
	}

    public function create()
    {
        return view('vehicle_types.create');
    }

    public function store(Request $request)
    {
        VehicleType::create($request->all());
        return redirect()->route('vehicle_types.index');
    }

    public function show(VehicleType $vehicleType)
    {
        return view('vehicle_types.show', compact('vehicleType'));
    }

    public function edit(VehicleType $vehicleType)
    {
        return view('vehicle_types.edit', compact('vehicleType'));
    }

    public function update(Request $request, VehicleType $vehicleType)
    {
        $vehicleType->update($request->all());
        return redirect()->route('vehicle_types.index');
    }

    public function destroy(VehicleType $vehicleType)
    {
        $vehicleType->delete();
        return redirect()->route('vehicle_types.index');
    }
}
