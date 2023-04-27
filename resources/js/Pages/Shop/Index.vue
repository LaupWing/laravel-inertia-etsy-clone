<template>
   <div>
      <div
         v-if="page.props?.value.flash.success"
      >
         Shop just has been created
      </div>
      <div
         v-for="shop in shops"
         :key="shop.id"
      >
         <img 
            :src="shop.profile_url" 
            alt=""
         >
      </div>
   </div>
</template>

<script setup lang="ts">
import { usePage } from "@inertiajs/vue3"


const props = defineProps({
   "shops": Object
})
const page = usePage<{
   value: {
      flash: {
         success: string
      }
   }
}>()
</script>