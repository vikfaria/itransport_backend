<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));
    }

    public function create()
    {
    $locations = Location::all();
    return view('routes.create', compact('locations'));
    }

    public function store(Request $request)
    {
        Route::create($request->all());
        return redirect()->route('routes.index');
    }

    public function show(Route $route)
    {
        return view('routes.show', compact('route'));
    }

    public function edit(Route $route)
    {
        return view('routes.edit', compact('route'));
    }

    public function edit(Route $route)
    {
      $locations = Location::all();
      return view('routes.edit', compact('route', 'locations'));
    }

    public function destroy(Route $route)
    {
        $route->delete();
        return redirect()->route('routes.index');
    }
}
