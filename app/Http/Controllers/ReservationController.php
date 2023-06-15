<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    public function pickRestaurant()
    {
        $user = Auth::user();
        $restaurants = Restaurant::all();

        return view('reservations.pick-restaurant', compact('restaurants', 'user'));
    }

    public function storeRestaurant(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required',
        ]);

        $user = Auth::user();
        $user->selectedRestaurant()->associate($validatedData['restaurant_id']);
        $user->save();

        return redirect()->route('reservations.pick-table');
    }

    public function pickTable()
    {
        $user = Auth::user();
        $restaurant = $user->selectedRestaurant;
        $tables = $restaurant->tables;

        return view('reservations.pick-table', compact('tables', 'user', 'restaurant'));
    }

    public function storeTable(Request $request)
    {
        $validatedData = $request->validate([
            'table_id' => 'required',
        ]);

        $user = Auth::user();
        $restaurant = $user->selectedRestaurant;

        $reservation = new Reservation();
        $reservation->user_id = $user->id;
        $reservation->restaurant_id = $restaurant->id;
        $reservation->table_id = $validatedData['table_id'];
        $reservation->save();

        return redirect()->route('reservations.show', $reservation->id);
    }

    public function show(Reservation $reservation)
    {
        // You can customize the show method as per your requirements
        return view('reservations.show', compact('reservation'));
    }
}
