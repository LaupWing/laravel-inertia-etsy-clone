<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
    * Run the migrations.
    */
   public function up(): void
   {
      Schema::create('ratings', function (Blueprint $table) {
         $table->id();
         $table->timestamps();
         $table->unsignedTinyInteger("rating")->checkIn([1, 2, 3, 4, 5]);
         $table->foreignIdFor(
            \App\Models\Shop::class,
            "shop_id"
         )->constrained("shops")->onDelete("cascade");
         $table->foreignIdFor(
            \App\Models\User::class,
            "user_id"
         )->constrained("users")->onDelete("cascade");
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('ratings');
   }
};
