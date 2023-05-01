<template>
   <div
      
      class="aspect-square border-2 flex flex-col p-2 border-gray-200 rounded"
   >
      <div class="h-[80%] grid grid-cols-2 grid-rows-2 gap-1 overflow-hidden">
         <div 
            class="col-span-1 overflow-hidden"
            v-for="product in shop.products"
         >
            <img 
               :src="product.images && product.images?.length! > 0 
                  ? product.images[0].url 
                  : 'https://cms-cdn.placeholder.co/Home_page1_76f0b1d7ab.png?width=1920'" 
               :key="product.id"
               class="w-full h-full object-cover"
               alt="First product image"
            >
         </div>
      </div>
   </div>
</template>

<script setup lang="ts">
import { ShopType } from "@/types/types"

const prop = defineProps<{
   shop: ShopType
}>()

console.log
</script>