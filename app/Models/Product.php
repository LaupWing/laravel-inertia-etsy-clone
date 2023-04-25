<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   use HasFactory;

   protected $fillable = [
      "name",
      "description",
      "price",
      "shop_id"
   ];

   public function shop() {
      return $this->belongsTo(Shop::class);
   }

   public function images() {
      return $this->hasMany(ProductImage::class);
   }

   public function thumbnail() {
      return $this->hasOne(ProductImage::class)->where("is_thumbnail", true);
   }

   public function orders() {
      return $this->belongsToMany(Order::class);
   }
}
