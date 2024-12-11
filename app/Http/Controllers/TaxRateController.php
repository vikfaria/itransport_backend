<?php

namespace App\Http\Controllers;

use App\Models\TaxRate;
use Illuminate\Http\Request;

class TaxRateController extends Controller
{
    public function index()
	{
		$taxRates = TaxRate::all();
		return view('tax_rates.index', compact('taxRates'));
	}

    public function create()
    {
        return view('tax_rates.create');
    }

    public function store(Request $request)
    {
        TaxRate::create($request->all());
        return redirect()->route('tax_rates.index');
    }

    public function show(TaxRate $taxRate)
    {
        return view('tax_rates.show', compact('taxRate'));
    }

    public function edit(TaxRate $taxRate)
    {
        return view('tax_rates.edit', compact('taxRate'));
    }

    public function update(Request $request, TaxRate $taxRate)
    {
        $taxRate->update($request->all());
        return redirect()->route('tax_rates.index');
    }

    public function destroy(TaxRate $taxRate)
    {
        $taxRate->delete();
        return redirect()->route('tax_rates.index');
    }
}
