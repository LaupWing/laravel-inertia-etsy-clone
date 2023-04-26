<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
   use HasFactory;

   protected $fillable = [
      "name",
      "description",
      "profile_url",
      "user_id"
   ];

   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function products()
   {
      return $this->hasMany(Product::class);
   }

   public function orders()
   {
      return $this->hasMany(Order::class);
   }
}
