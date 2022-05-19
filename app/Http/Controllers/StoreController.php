<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('customer.home');
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
