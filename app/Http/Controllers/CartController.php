<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

use Auth;
use Alert;
use Cart;
use Carbon\Carbon;

class CartController extends Controller
{
    public function index(Request $req)
    {
        $items          = Cart::session(Auth::id())->getContent();

        return view('customer.cart', compact('items'));
    }

    public function add(Request $req)
    {
        Cart::session(Auth::id())->add([

            'id' => $req->id,
            'name' => $req->name,
            'price' => $req->price,
            'unit' => $req->unit,
            'quantity' => $req->quantity,
            'associatedModel' => Service::find($req->id)

        ]);

        alert()->success('', 'Items added to cart !')->autoClose(3000);
        return redirect('cart');
    }

    public function update(Request $req)
    {
        Cart::session(Auth::id())->update(

            $req->id,
            [
                'quantity' => [

                    'relative' => false,
                    'value' => $req->quantity

                ],
            ]

        );

        alert()->success('', 'Cart updated !')->autoClose(3000);
        return redirect('cart');
    }

    public function delete(Request $req)
    {
        Cart::session(Auth::id())->remove($req->id);

        alert()->success('', 'Items removed from cart !')->autoClose(3000);
        return redirect('cart');
    }

    public function clear()
    {
        Cart::session(Auth::id())->clear();

        alert()->success('', 'Cart cleared !')->autoClose(3000);
        return redirect('cart');
    }
}
