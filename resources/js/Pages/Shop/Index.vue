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
         <Link
            :href="route('shop.edit', {shop: shop.id})"
         >
            <img 
               :src="shop.profile_url" 
               alt=""
            >
         </Link>
         <Link 
            :href="route('shop.destroy', {shop: shop.id})"
            method="delete"
            as="button"
         >
            Delete
         </Link>
      </div>
   </div>
</template>

<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3"
import { computed } from "vue"

const props = defineProps({
   "shops": Object
})
const page = usePage()
const flashSuccess = computed(() => {
   return page.props?.flash.success
})

console.log(props.shops)
</script>