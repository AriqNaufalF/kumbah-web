<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home', [
            'store' => Store::find(auth()->user()->store_id)
        ]);
    }

    public function isOpen($id)
    {
        $store = Store::find($id);

        if ($store->is_open) {
            Store::whereId($id)
                ->update(['is_open' => 0]);

            alert()->success("", "Store closed")->autoClose(3000);
            return redirect('/admin');
        } else {
            Store::whereId($id)
                ->update(['is_open' => 1]);

            alert()->success("", "Store opened")->autoClose(3000);
            return redirect('/admin');
        }
    }
}
