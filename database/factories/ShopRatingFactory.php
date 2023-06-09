<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class ShopRatingFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      return [
         "user_id" => function () {
            return User::inRandomOrder()->first()->id;
         },
         "shop_id" => function () {
            return Shop::inRandomOrder()->first()->id;
         },
         "rating" => fake()->numberBetween(1, 5)
      ];
   }
}
