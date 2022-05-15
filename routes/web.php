<?php

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
    return view('admin.home');
});

Route::get('/incoming-order', function () {
    return view('admin.incomingorder');
});

Route::get('/package-list', function () {
    return view('admin.packagelist');
});

Route::get('/order-history', function () {
    return view('admin.orderhistory');
});

Route::get('/add-order', function () {
    return view('admin.addorder');
});