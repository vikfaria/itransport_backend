<?php

namespace App\Http\Controllers;

use App\Models\PricingRule;
use Illuminate\Http\Request;

class PricingRuleController extends Controller
{
    public function index()
	{
		$pricingRules = PricingRule::with('vehicleType')->get();
		return view('pricing_rules.index', compact('pricingRules'));
	}

    public function create()
	{
		$vehicleTypes = VehicleType::all();
		return view('pricing_rules.create', compact('vehicleTypes'));
	}

    public function store(Request $request)
    {
        PricingRule::create($request->all());
        return redirect()->route('pricing_rules.index');
    }

    public function show(PricingRule $pricingRule)
    {
        return view('pricing_rules.show', compact('pricingRule'));
    }

    public function edit(PricingRule $pricingRule)
	{
		$vehicleTypes = VehicleType::all();
		return view('pricing_rules.edit', compact('pricingRule', 'vehicleTypes'));
	}

    public function update(Request $request, PricingRule $pricingRule)
    {
        $pricingRule->update($request->all());
        return redirect()->route('pricing_rules.index');
    }

    public function destroy(PricingRule $pricingRule)
    {
        $pricingRule->delete();
        return redirect()->route('pricing_rules.index');
    }
}
