<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class OrderController extends Controller
{
    //

    protected $provider;

    public function __construct()
    {

            $this->provider = new PayPalClient();

    }


    public function index()
    {
        return view('products.orders.index');
    }

    public function create()
    {
        return
        dd('create');

    }


    public function capture(Request $request)
    {
       foreach(Session::get('cart') as $key=> $cart)
       {
            Product::find($cart['id'])->update([

                'quantity' =>$cart['quantity']-$cart['qty_panier']

            ]);

            Session::flush();


            return view('produts.orders.capture');

       }
    }
}
