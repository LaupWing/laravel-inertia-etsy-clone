<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      return [
         "name" => fake()->name(),
         "description" => fake()->paragraph(),
         "price" => fake()->randomFloat(2, 10, 100),
         "shop_id" => function () {
            return Shop::inRandomOrder()->first()->id;
         }
      ];
   }
}
