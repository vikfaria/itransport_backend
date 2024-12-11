<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
	{
		$currencies = Currency::all();
		return view('currencies.index', compact('currencies'));
	}


    public function create()
    {
        return view('currencies.create');
    }

    public function store(Request $request)
    {
        Currency::create($request->all());
        return redirect()->route('currencies.index');
    }

    public function show(Currency $currency)
    {
        return view('currencies.show', compact('currency'));
    }

    public function edit(Currency $currency)
    {
        return view('currencies.edit', compact('currency'));
    }

    public function update(Request $request, Currency $currency)
    {
        $currency->update($request->all());
        return redirect()->route('currencies.index');
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect()->route('currencies.index');
    }
}
