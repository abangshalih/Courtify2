<?php

namespace App\Http\Controllers;

use App\Models\Table;
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

    public function chooseRestaurant()
    {
        // Ambil daftar restaurant dari database
        $restaurants = Restaurant::all();

        // Tampilkan daftar restaurant kepada pengguna
        // Implementasikan tampilan HTML di sini
    }

    public function chooseTable($restaurantId)
    {
        // Ambil restaurant berdasarkan ID
        $restaurant = Restaurant::findOrFail($restaurantId);

        // Ambil daftar table berdasarkan restaurant ID
        $tables = Table::where('restaurant_id', $restaurantId)->get();

        // Tampilkan daftar table kepada pengguna
        // Implementasikan tampilan HTML di sini
    }

    public function pickTable()
    {
        $user = Auth::user();
        $restaurant = $user->selectedRestaurant;
        $tables = $restaurant->tables;

        return view('reservations.pick-table', compact('tables', 'user', 'restaurant'));
    }

    public function makeReservation(Request $request)
    {
        // Ambil user_id dari pengguna yang sedang login
        $userId = Auth::id();

        // Ambil input dari form yang dikirim oleh pengguna
        $restaurantId = $request->input('restaurant_id');
        $tableId = $request->input('table_id');

        // Lakukan validasi atau manipulasi data jika diperlukan
        // ...

        // Simpan data reservasi ke dalam tabel "reservations"
        $reservation = new Reservation();
        $reservation->user_id = $userId;
        $reservation->restaurant_id = $restaurantId;
        $reservation->table_id = $tableId;
        $reservation->save();

        // Berikan feedback atau redirect pengguna ke halaman yang sesuai
        // ...
    }
}
