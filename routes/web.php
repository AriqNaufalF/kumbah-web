<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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

Route::group(['middleware' => ['isUser']], function () {

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
});

Route::get('landing', [AuthController::class, 'landing']);
Route::get('login', [AuthController::class, 'index']);
Route::post('loginp', [AuthController::class, 'login']);
Route::post('registerp', [AuthController::class, 'register']);

Route::get('logout', [AuthController::class, 'logout']);
