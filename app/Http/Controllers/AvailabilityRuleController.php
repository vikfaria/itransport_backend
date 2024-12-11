<?php

namespace App\Http\Controllers;

use App\Models\AvailabilityRule;
use Illuminate\Http\Request;

class AvailabilityRuleController extends Controller
{
    public function index()
	{
		$availabilityRules = AvailabilityRule::with('vehicle')->get();
		return view('availability_rules.index', compact('availabilityRules'));
	}

    public function create()
	{
		$vehicles = Vehicle::all();
		return view('availability_rules.create', compact('vehicles'));
	}

    public function store(Request $request)
    {
        AvailabilityRule::create($request->all());
        return redirect()->route('availability_rules.index');
    }

    public function show(AvailabilityRule $availabilityRule)
    {
        return view('availability_rules.show', compact('availabilityRule'));
    }

    public function edit(AvailabilityRule $availabilityRule)
	{
		$vehicles = Vehicle::all();
		return view('availability_rules.edit', compact('availabilityRule', 'vehicles'));
	}

    public function update(Request $request, AvailabilityRule $availabilityRule)
    {
        $availabilityRule->update($request->all());
        return redirect()->route('availability_rules.index');
    }

    public function destroy(AvailabilityRule $availabilityRule)
    {
        $availabilityRule->delete();
        return redirect()->route('availability_rules.index');
    }
}
