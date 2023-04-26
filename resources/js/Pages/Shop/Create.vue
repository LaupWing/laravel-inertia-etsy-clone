<template>
   <div>
      <form @submit.prevent="handleSubmit">
         <div>
            <input 
               type="file"
               @input="formData.profile_url = $event.target.files[0]"
            >
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
   profile_url: null,
   description: ""
})

const handleSubmit = () => {
   formData.post("/shop")
   console.log(formData.profile_url)
}

</script>