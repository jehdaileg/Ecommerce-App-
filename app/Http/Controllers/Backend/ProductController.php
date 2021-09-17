<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //

       $products = Product::latest()->paginate(12);


        return view('products.index', compact('products'));



      /* $product = new Product();

       $product->nom = 'phone';
       $product->prix = 200;
      $product->category_id = 1 ;
       $product->description = 'Voila notre premier telephone';

       $product->save();  */

       /*$produits = new Produit();

       $produits->nom = 'Malette';
       $produits->prix = 25;
       $produits->categorie = 1;
       $produits->  */





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $this->authorize('create-product');


        $categories = Category::all();

        return view('products.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSaveRequest $request)
    {
        //

        $this->authorize('create-product');

        $datas_received = [

           'nom' => $request->nom,
           'prix' => $request->prix,
           'description' => $request->description,
           'category_id' => $request->category_id

        ];

        $product_created = Product::create($datas_received);

        $this->isImageProduct($product_created);

        return redirect()->route('products.index')->with('success', 'product created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
       // $product = Product::find($id);

        return view('products.show', compact('product'));


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
    }

   public function isImageProduct(Product $product){

    if(request('image')){

        $product->update([

            'image' => request('image')->store('products', 'public')

        ]);
    }


   }

   public function search(string $query)
   {
       return Product::search($query)->get();

   }


}
