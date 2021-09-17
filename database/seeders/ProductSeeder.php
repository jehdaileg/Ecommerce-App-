<?php

namespace Database\Seeders;

use App\Models\Product;
//use Facade\FlareClient\Stacktrace\File;

use File;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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

        $json = File::get("database/data/product.json");

        $products = json_decode($json);

        foreach($products as $key=> $value){

            Product::create([

                "nom" => $value->nom,
                "category_id" => $value->category_id,
                "description" => $value->description,
                "prix" => $value->prix
            ]);

        }






    }
}
