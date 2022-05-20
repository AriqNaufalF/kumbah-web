<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class StoreController extends Controller
{
    public function index()
    {
        $ip = Location::get(request()->ip()) ? request()->ip() : '101.128.68.113';
        $location = Location::get($ip);
        return view('customer.home', [
            'location' => $location
        ]);
    }

    public function all()
    {
        return view('customer.laundries');
    }

    public function show(Store $store)
    {
        return view('customer.laundry', [
            'store' => $store
        ]);
    }
}
