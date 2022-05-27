<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Service;
use App\Models\Store;

use Auth;
use Cart;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $orders         = Order::where('customer_id', '=', Auth::id())->orderBy('order_date', 'desc')->get();

        return view('customer.orderhistory', compact("orders"));
    }

    public function create()
    {
        // Generating Order Id
        $tempId         = Order::max('order_id');

        $orderNumber    = (int) substr($tempId, 3, 3);
        $orderNumber++;

        $orderId        = "ORD" . sprintf("%03s", $orderNumber);

        $order_date     = Carbon::now()->format('Y-m-d H:i:s');
        $total_payments = (int) Cart::session(Auth::id())->getTotal();
        $customer_id    = Auth::id();

        $items           = Cart::session(Auth::id())->getContent();

        foreach ($items as $item)
        {
            $order                  = new Order();
            $order->order_id        = $orderId;
            $order->order_date      = $order_date;
            $order->total_payments  = $total_payments;
            $order->customer_id     = $customer_id;
            $order->service_id      = $item->model->id;
            $order->save();
        }

        Cart::session(Auth::id())->clear();

        alert()->success('', 'Order Success !')->autoClose(3000);
        return redirect('order');
    }
}
