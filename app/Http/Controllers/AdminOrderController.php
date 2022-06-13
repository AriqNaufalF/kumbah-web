<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $services = Service::where('store_id', auth()->user()->store_id)->get();
        $i = 0;
        foreach ($services as $service) {
            $service_id[$i] = $service->id;
            $i++;
        }

        $orders = Order::with(['user', 'service'])->whereIn('service_id', $service_id)
            ->whereIn('status', ['ordered'])->get();

        return view('admin.incomingorder', [
            'orders' => $orders
        ]);
    }

    public function process(Order $order)
    {
        Order::find($order->id)
            ->update(['status' => 'processed']);

        return back();
    }

    public function finish(Order $order)
    {
        Order::find($order->id)
            ->update(['status' => 'finished']);

        $makeReview = new ReviewController;
        $makeReview->store($order);

        return back();
    }

    public function history()
    {
        $services = Service::where('store_id', auth()->user()->store_id)->get();
        $i = 0;
        foreach ($services as $service) {
            $service_id[$i] = $service->id;
            $i++;
        }

        $orders = Order::with(['user', 'service'])->whereIn('service_id', $service_id)
            ->whereIn('status', ['finished'])->latest()->get();

        return view('admin.orderhistory', [
            'orders' => $orders
        ]);
    }
}
