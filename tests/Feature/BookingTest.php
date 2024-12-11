<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Booking;
use App\Models\Route;
use App\Models\Vehicle;
use App\Models\User;
use App\Models\Driver;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test creating a booking.
     */
    public function test_can_create_booking()
    {
        $user = User::factory()->create();
        $route = Route::factory()->create();
        $vehicle = Vehicle::factory()->create();
        $driver = Driver::factory()->create();

        $booking = Booking::factory()->create([
            'user_id' => $user->id,
            'route_id' => $route->id,
            'vehicle_id' => $vehicle->id,
            'driver_id' => $driver->id,
            'status' => 'pending',
            'booking_date' => now(),
            'pickup_date' => now()->addDay(),
            'dropoff_date' => now()->addDays(2),
        ]);

        $this->assertDatabaseHas('bookings', [
            'id' => $booking->id,
            'user_id' => $user->id,
            'route_id' => $route->id,
            'vehicle_id' => $vehicle->id,
        ]);
    }

    /**
     * Test reading a booking.
     */
    public function test_can_read_booking()
    {
        $booking = Booking::factory()->create();

        $this->assertDatabaseHas('bookings', [
            'id' => $booking->id,
        ]);

        $retrievedBooking = Booking::find($booking->id);

        $this->assertNotNull($retrievedBooking);
        $this->assertEquals($booking->id, $retrievedBooking->id);
    }

    /**
     * Test updating a booking.
     */
    public function test_can_update_booking()
    {
        $booking = Booking::factory()->create([
            'status' => 'pending',
        ]);

        $booking->update([
            'status' => 'completed',
        ]);

        $this->assertDatabaseHas('bookings', [
            'id' => $booking->id,
            'status' => 'completed',
        ]);

        $this->assertEquals('completed', $booking->fresh()->status);
    }

    /**
     * Test deleting a booking.
     */
    public function test_can_delete_booking()
    {
        $booking = Booking::factory()->create();

        $booking->delete();

        $this->assertDatabaseMissing('bookings', [
            'id' => $booking->id,
        ]);
    }

    /**
     * Test creating a booking with relations.
     */
    public function test_can_create_booking_with_relations()
	{
		$user = User::factory()->create();
		$route = Route::factory()->create();
		$vehicle = Vehicle::factory()->create();

		$booking = Booking::factory()->create([
			'user_id' => $user->id,
			'route_id' => $route->id,
			'vehicle_id' => $vehicle->id,
		]);
		
		// Reload the booking to ensure relations are loaded
        $booking = $booking->fresh();


		$this->assertNotNull($booking->user);
		$this->assertNotNull($booking->route);
		$this->assertNotNull($booking->vehicle);
	}


    /**
     * Test creating a booking with a driver.
     */
    public function test_can_create_booking_with_driver()
    {
        $driver = Driver::factory()->create();
        $booking = Booking::factory()->create([
            'driver_id' => $driver->id,
            'route_id' => Route::factory()->create()->id,
            'vehicle_id' => Vehicle::factory()->create()->id,
            'user_id' => User::factory()->create()->id,
        ]);

        $this->assertDatabaseHas('bookings', [
            'id' => $booking->id,
        ]);
    }

    /**
     * Test listing all bookings.
     */
    public function test_can_list_all_bookings()
    {
        $bookings = Booking::factory()->count(5)->create();

        $this->assertCount(5, Booking::all());
    }
}
