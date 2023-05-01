<template>
   <div class="flex flex-col py-10">
      <div
         v-if="flashSuccess"
      >
         Shop just has been created
      </div>
      <div class="flex flex-col gap-6">
         <h2 class="mx-auto text-4xl">Shops Page</h2>
         <main class="flex flex-col gap-4 max-w-5xl w-full mx-auto">
            <h2 class="col-span-full text-2xl">All Shops</h2>
            <div class="grid grid-cols-2 gap-4">
               <ShopCard
                  v-for="shop in shops"
                  :key="shop.id"
                  :shop="shop"
               />
            </div>
         </main>
      </div>
   </div>
</template>

<script setup lang="ts">
import { Shop } from "@/types/types"
import { usePage } from "@inertiajs/vue3"
import { computed } from "vue"
import ShopCard from "./Components/ShopCard.vue"

const props = defineProps<{
   shops: Shop[],
   top_shops: Shop[]
}>()

console.log(props)
const page = usePage()
const flashSuccess = computed(() => {
   return page.props?.flash.success
})
</script>