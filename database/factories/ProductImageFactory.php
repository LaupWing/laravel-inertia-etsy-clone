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
      $lastOrder = ProductImage::max("order") ?? 0;
      $order = $lastOrder + 1;

      return [
         "url" => fake()->imageUrl(),
         "product_id" => function() {
            return Product::inRandomOrder()->first()->id;
         },
         "order" => $order
      ];
   }
}
