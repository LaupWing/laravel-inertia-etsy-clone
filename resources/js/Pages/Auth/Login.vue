<template>
   <form @submit.prevent="login">
      <div class="w-1/2 mx-auto">
         <div>
            <label for="email">Email (username)</label>
            <input 
               type="email" 
               name="email" 
               id="email"
               v-model="formData.email"
            >
            <div>
               <!-- Here comes the errors -->
            </div>
         </div>
         <div>
            <label for="password">Password (username)</label>
            <input 
               type="password" 
               name="password" 
               v-model="formData.password"
               id="password"
            >
            <div>
               <!-- Here comes the errors -->
            </div>
         </div>
         <div>
            <button type="submit">Login</button>
         </div>
      </div>
   </form>
</template>

<script setup lang="ts">
import { useForm } from "@inertiajs/vue3"

const formData = useForm({
   email: null,
   password: null
})

const login = () => {
   
}
</script>