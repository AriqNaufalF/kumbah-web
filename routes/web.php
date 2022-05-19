<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('customer.home');
});

Route::controller(StoreController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/laundries', 'all');
    Route::get('/laundry/{store:slug}', 'show');
});

Route::get('/cart', function () {
    return view('customer.cart');
});

Route::get('/order', function () {
    return view('customer.orderhistory');
});

Route::get('/reviews', function () {
    return view('customer.reviews');
});
Route::get('/reviews/name', function () {
    return view('customer.review');
});

Route::get('/profile/user', function () {
    return view('customer.profile');
});
