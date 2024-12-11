<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingExtraController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\VehicleAttributeController;
use App\Http\Controllers\VehicleCompanyController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PricingRuleController;
use App\Http\Controllers\AvailabilityRuleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\GeofenceController;
use App\Http\Controllers\TaxRateController;
use App\Http\Controllers\EmailAccountController;
use App\Http\Controllers\CurrencyController;


Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the Chauffeur Booking System!'], 200);
});

// Rotas Resource para todas as entidades
Route::resource('bookings', BookingController::class);
Route::resource('booking-extras', BookingExtraController::class);
Route::resource('routes', RouteController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('vehicle-types', VehicleTypeController::class);
Route::resource('vehicle-attributes', VehicleAttributeController::class);
Route::resource('vehicle-companies', VehicleCompanyController::class);
Route::resource('locations', LocationController::class);
Route::resource('pricing-rules', PricingRuleController::class);
Route::resource('availability-rules', AvailabilityRuleController::class);
Route::resource('drivers', DriverController::class);
Route::resource('coupons', CouponController::class);
Route::resource('geofences', GeofenceController::class);
Route::resource('tax-rates', TaxRateController::class);
Route::resource('email-accounts', EmailAccountController::class);
Route::resource('currencies', CurrencyController::class);

