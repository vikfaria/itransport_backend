<?php

namespace App\Http\Controllers;

use App\Models\Geofence;
use Illuminate\Http\Request;

class GeofenceController extends Controller
{
    public function index()
	{
		$geofences = Geofence::all();
		return view('geofences.index', compact('geofences'));
	}

    public function create()
    {
        return view('geofence.create');
    }

    public function store(Request $request)
    {
        Geofence::create($request->all());
        return redirect()->route('geofence.index');
    }

    public function show(Geofence $geofence)
    {
        return view('geofence.show', compact('geofence'));
    }

    public function edit(Geofence $geofence)
    {
        return view('geofence.edit', compact('geofence'));
    }

    public function update(Request $request, Geofence $geofence)
    {
        $geofence->update($request->all());
        return redirect()->route('geofence.index');
    }

    public function destroy(Geofence $geofence)
    {
        $geofence->delete();
        return redirect()->route('geofence.index');
    }
}
