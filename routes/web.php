<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageListController;
use App\Http\Controllers\ReviewController;

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
// User route
Route::group(['middleware' => ['isUser']], function () {

    Route::controller(StoreController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/laundries', 'all');
        Route::get('/laundry/{store:slug}', 'show');
    });

    Route::prefix('order')->group(function () {
        Route::controller(OrderController::class)->group(function () {
            Route::get('', 'index');
            Route::post('create', 'create');
        });
    });

    Route::resource('/reviews', ReviewController::class)->only(['index', 'store', 'show', 'update']);

    Route::resource('/profile', CustomerProfileController::class)->only(['index', 'update']);
    Route::post('/profile/change-password', [CustomerProfileController::class, 'change']);

    Route::prefix('cart')->group(function () {
        Route::controller(CartController::class)->group(function () {
            Route::get('', 'index');
            Route::post('add', 'add');
            Route::post('update', 'update');
            Route::post('delete', 'delete');
            Route::post('clear', 'clear');
        });
    });
});

// Admin route
Route::group(['middleware' => ['isAdmin']], function () {
    Route::controller(AdminHomeController::class)->group(function () {
        Route::get('/admin', 'index');
        Route::post('/admin/open-store/{store}', 'isOpen');
    });

    Route::controller(AdminOrderController::class)->group(function () {
        Route::get('/admin/incoming-order', 'index');
        Route::post('/admin/{order}/process', 'process');
        Route::post('/admin/{order}/finish', 'finish');
        Route::get('/admin/order-history', 'history');
    });

    Route::resource('/admin/package-list', PackageListController::class)->except(['create', 'edit', 'show']);

    Route::get('/admin/add-order', function () {
        return view('admin.addorder');
    });

    Route::controller(AdminProfileController::class)->group(function () {
        Route::get('/admin/profile', 'index');
        Route::post('/admin/profile', 'change');
        Route::post('/admin/profile/{store:slug}/edit', 'storeUpdate');
        Route::post('/admin/profile/{user}', 'adminUpdate');
    });
});

// global route
Route::get('landing', [AuthController::class, 'landing']);
Route::get('login', [AuthController::class, 'index']);
Route::post('loginp', [AuthController::class, 'login']);
Route::post('registerp', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);
