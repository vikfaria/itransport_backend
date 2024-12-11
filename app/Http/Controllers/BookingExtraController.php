<?php

namespace App\Http\Controllers;

use App\Models\BookingExtra;
use Illuminate\Http\Request;

class BookingExtraController extends Controller
{
    public function index()
    {
        $extras = BookingExtra::all();
        return view('booking_extras.index', compact('extras'));
    }

    public function create()
    {
        return view('booking_extras.create');
    }

    public function store(Request $request)
    {
        BookingExtra::create($request->all());
        return redirect()->route('booking_extras.index');
    }

    public function show(BookingExtra $bookingExtra)
    {
        return view('booking_extras.show', compact('bookingExtra'));
    }

    public function edit(BookingExtra $bookingExtra)
    {
        return view('booking_extras.edit', compact('bookingExtra'));
    }

    public function update(Request $request, BookingExtra $bookingExtra)
    {
        $bookingExtra->update($request->all());
        return redirect()->route('booking_extras.index');
    }

    public function destroy(BookingExtra $bookingExtra)
    {
        $bookingExtra->delete();
        return redirect()->route('booking_extras.index');
    }
}
