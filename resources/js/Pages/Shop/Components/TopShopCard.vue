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
               src="https://cms-cdn.placeholder.co/Home_page1_76f0b1d7ab.png?width=1920" 
               :key="product.id"
               class="w-full object-cover"
               alt=""
            >
         </div>
      </div>
   </div>
</template>

<script setup lang="ts">
import { ShopType } from "@/types/types"

defineProps<{
   shop: ShopType
}>()
</script>