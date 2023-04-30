<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    */
   public function run(): void
   {
      \App\Models\User::factory(10)->create();
      \App\Models\Shop::factory(10)->create();
      \App\Models\ShopRating::factory(100)->create();
      // \App\Models\Product::factory(20)->create();
      // $productImages = \App\Models\ProductImage::factory(50)->make();
      // foreach ($productImages as $productImage) {
      //    $product = $productImage->product;
      //    $lastOrder = $product->images()->max("order") ?? 0;
      //    $order = $lastOrder + 1;
      //    $productImage->order = $order;
      //    $productImage->save();
      // }
   }
}
