<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;
use PDO;

class ShopController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      return inertia("Shop/Index", [
         "shops" => Shop::all()
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
      if($request->hasFile("profile_image")){
         $path = $request->file("profile_image")->store("images", "public");
         $shop->profile_image = $path;
      }
      $shop->save();
      
      return redirect()->route("shop.index");
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
   public function edit(string $id)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
      //
   }
}
