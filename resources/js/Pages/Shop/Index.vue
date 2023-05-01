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
               <TopShopCard
                  v-for="shop in top_shops.splice(0, 4)"
                  :key="shop.id"
                  :shop="shop"
               />
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
import TopShopCard from "./Components/TopShopCard.vue"

defineProps<{
   shops: ShopType[],
   top_shops: ShopType[]
}>()

const page = usePage()
const flashSuccess = computed(() => {
   return page.props?.flash.success
})
</script>