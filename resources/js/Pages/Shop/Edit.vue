<template>
   <div>
      <form @submit.prevent="handleSubmit">
         <div>
            <input 
               type="file"
               @input="handleFileInput"
            >
         </div>
         <div>
            <label for="name">Name</label>
            <input 
               v-model="formData.name"
               type="text" 
               id="name"
            >
            <p
               v-if="formData.errors.name"
            >
               Name is required
            </p>
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
            <p
               v-if="formData.errors.description"
            >
               Name is required
            </p>
         </div>
         <button>update</button>
      </form>
   </div>
</template>

<script setup lang="ts">
import { useForm } from "@inertiajs/vue3"

const props = defineProps<{
   shop: {
      name: string
      id: string
      description: string
   }
}>()

const formData = useForm({
   name: props.shop.name,
   profile_image_file: null,
   description: props.shop.description
})

const handleSubmit = () => {
   formData.put(`/shop/${props.shop.id}`)
   console.log(formData.profile_image_file)
}

const handleFileInput = (event: Event) => {
   const input = event.target as HTMLInputElement
   if(input.files?.length){
      return
   }
   formData.profile_image_file = input!.files![0]!
} 

</script>