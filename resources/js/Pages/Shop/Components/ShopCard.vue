<template>
   <section class="flex overflow-hidden grid-cols-1 border-[1.5px] shadow rounded-md">
      <img 
         :src="shop.profile_url" 
         :alt="shop.name"
         class="w-32 aspect-square object-cover"
      >
      <div class="flex flex-col p-4">
         <h2>{{ shop.name }}</h2>
         <StarRating 
            :star-size="20" 
            read-only 
            :rating="shop.average_rating"
         />
         
      </div>
   </section>
</template>

<script setup lang="ts">
import { Shop } from "@/types/types"
// @ts-ignore
import StarRating from "vue-star-rating"

defineProps<{
   shop: Shop
}>()

</script>