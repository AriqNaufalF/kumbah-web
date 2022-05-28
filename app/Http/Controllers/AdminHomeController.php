<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\Store;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $services = Service::where('store_id', auth()->user()->store_id)->get();

        $i = 0;
        foreach ($services as $service) {
            $service_id[$i] = $service->id;
            $i++;
        }

        $count = Order::whereIn('service_id', $service_id)
            ->whereIn('status', ['ordered'])->count();

        $orders = Order::with(['user', 'service'])->whereIn('service_id', $service_id)
            ->whereIn('status', ['processed'])->get();

        return view('admin.home', [
            'store' => Store::find(auth()->user()->store_id),
            'orderCount' => $count,
            'orders' => $orders
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
