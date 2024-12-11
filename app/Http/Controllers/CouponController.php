<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
	{
		$coupons = Coupon::all();
		return view('coupons.index', compact('coupons'));
	}

    public function create()
    {
        return view('coupons.create');
    }

    public function store(Request $request)
    {
        Coupon::create($request->all());
        return redirect()->route('coupons.index');
    }

    public function show(Coupon $coupon)
    {
        return view('coupons.show', compact('coupon'));
    }

    public function edit(Coupon $coupon)
    {
        return view('coupons.edit', compact('coupon'));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $coupon->update($request->all());
        return redirect()->route('coupons.index');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('coupons.index');
    }
}
