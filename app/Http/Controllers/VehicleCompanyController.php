<?php

namespace App\Http\Controllers;

use App\Models\VehicleCompany;
use Illuminate\Http\Request;

class VehicleCompanyController extends Controller
{
    public function index()
	{
		$vehicleCompanies = VehicleCompany::all();
		return view('vehicle_companies.index', compact('vehicleCompanies'));
	}

    public function create()
    {
        return view('vehicle_companies.create');
    }

    public function store(Request $request)
    {
        VehicleCompany::create($request->all());
        return redirect()->route('vehicle_companies.index');
    }

    public function show(VehicleCompany $vehicleCompany)
    {
        return view('vehicle_companies.show', compact('vehicleCompany'));
    }

    public function edit(VehicleCompany $vehicleCompany)
    {
        return view('vehicle_companies.edit', compact('vehicleCompany'));
    }

    public function update(Request $request, VehicleCompany $vehicleCompany)
    {
        $vehicleCompany->update($request->all());
        return redirect()->route('vehicle_companies.index');
    }

    public function destroy(VehicleCompany $vehicleCompany)
    {
        $vehicleCompany->delete();
        return redirect()->route('vehicle_companies.index');
    }
}
