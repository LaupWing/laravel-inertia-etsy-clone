<template>
   <div>
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

const props = defineProps({
   "shops": Object
})

console.log(props.shops)
</script>