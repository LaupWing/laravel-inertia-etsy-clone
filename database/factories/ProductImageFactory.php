<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      $product = Product::inRandomOrder()->first();
      $lastOrder = $product->images()->max("order") ?? 0;
      $productImages = $product->images()->get()->toArray();
      print_r($productImages);
      $order = $lastOrder + 1;

      return [
         "url" => fake()->imageUrl(),
         "product_id" => $product->id,
         "order" => $order
      ];
   }
}
