<template>
   <section class="flex overflow-hidden grid-cols-1 border-[1.5px] shadow rounded-md">
      <img 
         :src="shop.profile_url" 
         :alt="shop.name"
         class="w-32 aspect-square object-cover"
      >
      <div class="flex p-4 justify-between flex-1">
         <div class="flex flex-col">
            <h2>{{ shop.name }}</h2>
            <div class="flex items-center">
               <StarRating 
                  :star-size="20" 
                  read-only 
                  :rating="shop.average_rating"
                  :show-rating="false"
               />
               <p class="mt-1 ml-1">({{ shop.ratings_count }})</p>
            </div>
            <div class="mt-auto">
               {{ shop.products_count }} items
            </div>
         </div>
         <div class="flex items-center ml-auto">
            <Heart />
         </div>
      </div>
   </section>
</template>

<script setup lang="ts">
import { Shop } from "@/types/types"
// @ts-ignore
import StarRating from "vue-star-rating"
import Heart from "../../../Global/Icons/Heart.vue"

defineProps<{
   shop: Shop
}>()
</script>