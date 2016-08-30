<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
          'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
          'title' => 'Harry Potter',
          'description' => 'A good novel especially for kids',
          'price' => 10
      ]);
        $product -> save();



        $product = new Product([
          'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
          'title' => 'Harry Potter',
          'description' => 'A good novel especially for kids',
          'price' => 12
      ]);
        $product -> save();



        $product = new Product([
          'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
          'title' => 'Harry Potter',
          'description' => 'A good novel especially for kids',
          'price' => 14
      ]);
        $product -> save();



        $product = new Product([
          'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
          'title' => 'Harry Potter',
          'description' => 'A good novel especially for kids',
          'price' => 16
      ]);
        $product -> save();



        $product = new Product([
          'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
          'title' => 'Harry Potter',
          'description' => 'A good novel especially for kids',
          'price' => 18
        ]);
           $product -> save();


        $product = new Product([
          'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
          'title' => 'Harry Potter',
          'description' => 'A good novel especially for kids',
          'price' => 20
        ]);
             $product -> save();


    }
}
