<template>
   <div class="flex flex-col">
      <div
         v-if="flashSuccess"
      >
         Shop just has been created
      </div>
      <h2 class="mx-auto text-4xl my-6">Shops Page</h2>
      <main class="grid grid-cols-2 max-w-5xl w-full gap-4 mx-auto">
         <ShopCard
            v-for="shop in shops"
            :key="shop.id"
            :shop="shop"
         />
      </main>
   </div>
</template>

<script setup lang="ts">
import { Shop } from "@/types/types"
import { usePage } from "@inertiajs/vue3"
import { computed } from "vue"
import ShopCard from "./Components/ShopCard.vue"

defineProps<{
   shops: Shop[]
}>()
const page = usePage()
const flashSuccess = computed(() => {
   return page.props?.flash.success
})
</script>