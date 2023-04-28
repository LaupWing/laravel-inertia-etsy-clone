<template>
   <div class="flex flex-col">
      <div
         v-if="flashSuccess"
      >
         Shop just has been created
      </div>
      <h2 class="mx-auto text-4xl my-6">Shops Page</h2>
      <main class="grid grid-cols-2 max-w-5xl w-full gap-4 mx-auto">
         <section
            v-for="shop in shops"
            :key="shop.id"
            class="flex overflow-hidden grid-cols-1 border-[1.5px] shadow rounded-md"
         >
            <img 
               :src="shop.profile_url" 
               :alt="shop.name"
               class="w-32 aspect-square object-cover"
            >
            <div class="flex flex-col p-4">
               <h2>{{ shop.name }}</h2>
               <StarRating read-only :rating="rating"/>
            </div>
         </section>
      </main>
   </div>
</template>

<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3"
import { ref } from "vue"
import { computed } from "vue"
// @ts-ignore
import StarRating from "vue-star-rating"

const props = defineProps({
   "shops": Object
})
const page = usePage()
const flashSuccess = computed(() => {
   return page.props?.flash.success
})

const rating = ref(4)
console.log(props.shops)
</script>