<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShopFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      return [
         // "user_id" => function () {
         //    return User::inRandomOrder()->first()->id;
         // },
         "name" => fake()->company(),
         "description" => fake()->paragraph(),
         "profile_url" => fake()->imageUrl()
      ];
   }
}
