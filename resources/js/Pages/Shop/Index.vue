<template>
   <div>
      <div
         v-if="flashSuccess"
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
import { computed } from "vue";


defineProps({
   "shops": Object
})
const page = usePage<{
   flash: {
      success: string
   }
}>()
const flashSuccess = computed(() => {
   return page.props?.flash.success
})

</script>