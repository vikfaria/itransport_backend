<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
	{
		$vehicleTypes = VehicleType::all();
		$vehicleCompanies = VehicleCompany::all();
		return view('vehicles.create', compact('vehicleTypes', 'vehicleCompanies'));
	}

    public function store(Request $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index');
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
	{
		$vehicleTypes = VehicleType::all();
		$vehicleCompanies = VehicleCompany::all();
		return view('vehicles.edit', compact('vehicle', 'vehicleTypes', 'vehicleCompanies'));
	}

    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return redirect()->route('vehicles.index');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index');
    }
}
