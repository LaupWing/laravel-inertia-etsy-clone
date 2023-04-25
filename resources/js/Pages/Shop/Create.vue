<template>
   <div>
      <form action="">
         <div>
            <input type="file">
         </div>
         <div>
            <label for="name">Name</label>
            <input 
               v-model="formData.name"
               type="text" 
               id="name"
            >
         </div>
         <div>
            <label for="description">Description</label>
            <textarea 
               v-model="formData.description"
               name="" 
               id="description" 
               cols="30" 
               rows="10"
            ></textarea>
         </div>
         <button>create</button>
      </form>
   </div>
</template>

<script setup lang="ts">
import { useForm } from "@inertiajs/vue3"

const formData = useForm({
   name: "",
   profile_image: null,
   description: ""
})

</script>