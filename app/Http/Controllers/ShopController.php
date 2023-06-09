<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $shops = Shop::withAvg("ratings", "rating")
         ->withCount("ratings")
         ->withCount("products")
         ->get()
         ->map(function ($shop) {
            $shop->average_rating = round($shop->ratings_avg_rating);
            unset($shop->ratings_avg_rating);
            return $shop;
         });
      $top_shops = Shop::withCount("ratings")
         ->withAvg("ratings", "rating")
         ->with(["products" => function ($query) {
            $query->orderBy("name", "asc")->with("images");
         }])
         ->orderByDesc("ratings_count")
         ->take(8)
         ->get()
         ->map(function ($shop) {
            $shop->average_rating = round($shop->ratings_avg_rating);
            unset($shop->ratings_avg_rating);
            return $shop;
         });;
      
      return inertia("Shop/Index", [
         "shops" => $shops,
         "top_shops" => $top_shops
      ]);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      return inertia("Shop/Create");
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      $shop = Shop::make($request->validate([
         "name" => "required",
         "description" => "required",
         // "user_id" => 1
      ]));
      // if($request->hasFile("profile_image_file")){
      //    $path = $request->file("profile_image_file")->store("images", "public");
      //    $shop->profile_url = $path;
      // }
      $shop->save();
      
      return redirect()
         ->route("shop.index")
         ->with("success", "Listing was created!");
   }

   /**
    * Display the specified resource.
    */
   public function show(string $id)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Shop $shop)
   {
      return inertia(
         "Shop/Edit",
         [
            "shop" => $shop
         ]
      );
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
   {
      $shop = Shop::make($request->validate([
         "name" => "required",
         "description" => "required",
         // "user_id" => 1
      ]));
      // if($request->hasFile("profile_image_file")){
      //    $path = $request->file("profile_image_file")->store("images", "public");
      //    $shop->profile_url = $path;
      // }
      $shop->save();
      
      return redirect()
         ->route("shop.index")
         ->with("success", "Shop was updated!");
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Shop $shop)
   {
      $shop->delete();

      return redirect()->back()->with("success", "Shop was deleted!");
   }
}
