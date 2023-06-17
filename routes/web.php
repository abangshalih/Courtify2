<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/choose-restaurant', [ReservationController::class, 'chooseRestaurant'])->name('choose-restaurant');
    // Route untuk memilih restoran

    Route::get('/choose-table/{restaurantId}', [ReservationController::class, 'chooseTable'])->name('choose-table');
    // Route untuk memilih meja berdasarkan restoran yang dipilih

    Route::post('/make-reservation', [ReservationController::class, 'makeReservation'])->name('make-reservation');
    // Route untuk membuat reservasi

    Route::get('/reservation-success', [ReservationController::class, 'reservationSuccess'])->name('reservation-success');
    // Route untuk halaman sukses reservasi
});

// Rute-rute untuk tampilan lainnya
Route::get('/landingpagevendor', function () {
    return view('landingpagevendor');
});

Route::get('/landingpagevendor', function ()
{
    return view('landingpagevendor');
});

Route:: get('/basesatu', function(){
    return view('basesatu');
});

Route:: get('/basedua', function()
{
    return view('basedua');
});

Route:: get('/loginpageowner', function()
{
    return view('loginpageowner');
});


Route:: get('/loginpagevndr', function()
{
    return view('loginpagevndr');
});


Route:: get('/loginpagecustomer', function()
{
    return view('loginpagecustomer');
});

Route:: get('/order', function()
{
    return view('order');
});

Route:: get('/review', function()
{
    return view('review');
});

Route:: get('/review2', function()
{
    return view('review2');
});

Route:: get('/menuvendor', function()
{
    return view('menuvendor');
});

Route:: get('/addmoremenu', function()
{
    return view('addmoremenu');
});

Route:: get('/yourspace', function()
{
    return view('yourspace');
});

Route:: get('/owner', function()
{
    return view('owner');
});

Route:: get('/pickatable', function()
{
    return view('pickatable');
});

Route:: get('/pickatable2', function()
{
    return view('pickatable2');
});


Route:: get('/pickatable3', function()
{
    return view('pickatable3');
});


Route:: get('/pickatable4', function()
{
    return view('pickatable4');
});


Route:: get('/offeropenspace', function()
{
    return view('offeropenspace');
});


Route:: get('/popup1', function()
{
    return view('popup1');
});

Route:: get('/popup2', function()
{
    return view('popup2');
});

Route:: get('/yourbooth', function()
{
    return view('yourbooth');
});

Route:: get('/index', function()
{
    return view('index');
});


Route:: get('/thanku', function()
{
    return view('thanku');
});

Route:: get('/searchrestaurants', function()
{
    return view('searchrestaurants');
});

Route:: get('/datagavalid', function()
{
    return view('datagavalid');
});

Route:: get('/punyadexter', function()
{
    return view('punyadexter');
});

Route:: get('/punyadexter2', function()
{
    return view('punyadexter2');
});

Route:: get('/punyadexter3', function()
{
    return view('punyadexter3');
});


Route:: get('/punyadexter4', function()
{
    return view('punyadexter4');
});


Route:: get('/punyajer', function()
{
    return view('punyajer');
});

Route:: get('/howwasthefood', function()
{
    return view('howwasthefood');
});



// Auth::routes();

// Route::get('loginpagevendor','RegisterController@index'); 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');