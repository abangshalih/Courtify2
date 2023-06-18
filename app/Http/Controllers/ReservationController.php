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
    public function chooseRestaurant()
    {
        // Ambil daftar restaurant dari database
        $restaurants = Restaurant::all();

        return view('choose-restaurant', compact('restaurants'));
    }

    public function chooseTable($restaurantId)
    {
        // Ambil restaurant berdasarkan ID
        $restaurant = Restaurant::findOrFail($restaurantId);

        // Ambil daftar table berdasarkan restaurant ID
        $tables = Table::where('restaurant_id', $restaurantId)->get();

        return view('choose-table', compact('restaurant', 'tables'));
    }

    public function chooseMenu($restaurantId, $tableId)
    {
        // Ambil restaurant berdasarkan ID
        $restaurant = Restaurant::findOrFail($restaurantId);

        // Ambil table berdasarkan ID
        $table = Table::findOrFail($tableId);

        return view('choose-menu', compact('restaurant', 'table'));
    }

    public function cart($restaurantId, $tableId)
    {
        // Ambil restaurant berdasarkan ID
        $restaurant = Restaurant::findOrFail($restaurantId);

        // Ambil table berdasarkan ID
        $table = Table::findOrFail($tableId);

        return view('cart', compact('restaurant', 'table'));
    }

    public function checkout($restaurantId, $tableId)
    {
        // Ambil restaurant berdasarkan ID
        $restaurant = Restaurant::findOrFail($restaurantId);

        // Ambil table berdasarkan ID
        $table = Table::findOrFail($tableId);

        return view('checkout', compact('restaurant', 'table'));
    }

    public function payment($restaurantId, $tableId)
    {
        // Ambil restaurant berdasarkan ID
        $restaurant = Restaurant::findOrFail($restaurantId);

        // Ambil table berdasarkan ID
        $table = Table::findOrFail($tableId);

        return view('payment', compact('restaurant', 'table'));
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

        return response()->json([
            'success' => true,
            'message' => 'Reservation created successfully',
            'url' => route('reservation-success', $reservation->id)
        ]);
    }

    public function reservationSuccess()
    {
        // Tampilkan halaman sukses reservasi
        return view('reservation-success');
    }
}
