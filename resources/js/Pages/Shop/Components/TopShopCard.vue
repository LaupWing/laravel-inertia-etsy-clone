<template>
   <section
      class="aspect-square border-2 flex flex-col p-2 border-gray-200 rounded"
   >
      <div class="h-[80%] grid grid-cols-2 grid-rows-2 gap-1 overflow-hidden">
         <div 
            class="overflow-hidden"
            v-for="(product, index) in shop.products"
            :class="shopProductsGridClasses(shop.products?.length!, index)"
            :key="product.id"
         >
            <img 
               :src="product.images && product.images?.length! > 0 
                  ? product.images[0].url 
                  : 'https://cms-cdn.placeholder.co/Home_page1_76f0b1d7ab.png?width=1920'" 
               class="w-full h-full object-cover"
               alt="First product image"
            >
         </div>
      </div>
      <div class="flex items-center mt-auto">
         <img 
            class="w-10 h-10 rounded-full"
            :src="shop.profile_url"
         />
         <div class="flex flex-col h-full ml-2">
            <h2 class="text-sm">
               {{ shop.name }}
            </h2>
            <div class="flex items-center -mt-1">
               <StarRating
                  :star-size="12" 
                  read-only 
                  :rating="shop.average_rating"
                  :show-rating="false"
               />
               <p class="mt-1 ml-1 text-xs">({{ shop.ratings_count }})</p>
            </div>
         </div>
      </div>
   </section>
</template>

<script setup lang="ts">
import { ShopType } from "@/types/types"
// @ts-ignore
import StarRating from "vue-star-rating"

defineProps<{
   shop: ShopType
}>()

const shopProductsGridClasses = (shopProductsLength:number, index:number) => {
   switch(shopProductsLength){
      case 1:
         return "col-span-2 row-span-2"
      case 2:
         return "col-span-2 row-span-1"
      case 3:
         return index === 2 ? "col-span-2 row-span-1" : "col-span-1 row-span-1"
      default:
         return "col-span-1 row-span-1"
   }
}
</script>