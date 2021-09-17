<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //3dd(Session::get('cart'));

        return view('cart.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $product = Product::find($request->id);

        Session::push('cart', array(

            'id' => $product->id,
            'nom' => $product->nom,
            'quantity' => $product->quantity,
            'qty_panier' => 1,
            'prix' => $product->prix,
            'image' => $product->image

        ));

        return redirect('/products')->with('success', 'Produit ajouté dans le panier avec succès');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $arr_products = array_map(function($product) use($id, $request){

            return $product['id'] == $id ?

                array_merge($product, ['qty_panier' => $request->quantity]) : $product;

        }, Session::get('cart'));

        Session::put('cart', $arr_products);

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);

        $cart_in_filtering = array_filter(Session::get('cart'), fn($prod) => $prod['id'] != $product->id);

        Session::put('cart', $cart_in_filtering);

        return back()->with('message', 'Produit retiré du panier !');
    }
}
