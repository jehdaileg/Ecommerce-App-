<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

use File;

class ProductCompleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        Product::truncate();

        $json = File::get("database/data/complete_product.json");

        $complete_product = json_decode($json);


        foreach($complete_product as $key => $value){

            Product::create([

                "nom" => $value->nom,
                "category_id" => $value->category_id,
                "description" => $value->description,
                "prix"=> $value->prix,
                "image" => $value->image->store('products', 'public')

            ]);
        }


    }
}
