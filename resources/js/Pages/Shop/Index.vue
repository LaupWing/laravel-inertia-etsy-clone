<template>
   <div class="flex flex-col py-10">
      <div
         v-if="flashSuccess"
      >
         Shop just has been created
      </div>
      
      <div class="flex flex-col gap-6">
         <h2 class="mx-auto text-4xl">Shops Page</h2>
         <section class="flex flex-col gap-4 max-w-5xl w-full mx-auto">
            <h2 class="col-span-full text-2xl">All Shops</h2>
            <div class="grid grid-cols-4 gap-4">
               <div
                  v-for="shop in top_shops.splice(0, 4)"
                  :key="shop.id"
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
            </div>
         </section>
         <section class="flex flex-col gap-4 max-w-5xl w-full mx-auto">
            <h2 class="col-span-full text-2xl">All Shops</h2>
            <div class="grid grid-cols-2 gap-4">
               <ShopCard
                  v-for="shop in shops"
                  :key="shop.id"
                  :shop="shop"
               />
            </div>
         </section>
      </div>
   </div>
</template>

<script setup lang="ts">
import type { ShopType } from "@/types/types"
import { usePage } from "@inertiajs/vue3"
import { computed } from "vue"
import ShopCard from "./Components/ShopCard.vue"

const props = defineProps<{
   shops: ShopType[],
   top_shops: ShopType[]
}>()

console.log(props)
const page = usePage()
const flashSuccess = computed(() => {
   return page.props?.flash.success
})
</script>