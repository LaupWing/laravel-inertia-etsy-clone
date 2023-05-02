<template>
   <div class="w-full max-w-sm mx-auto py-10">
      <h2 class="text-4xl">Login</h2>
      <form 
         @submit.prevent="login"
         class="py-4 flex flex-col gap-4"
      >
         <div class="w-full flex flex-col">
            <label for="email">Email</label>
            <input 
               type="email" 
               name="email" 
               id="email"
               class="rounded border-gray-400 shadow"
               placeholder="Your email"
               v-model="formData.email"
            >
            <div>
               <!-- Here comes the errors -->
            </div>
         </div>
         <div class="w-full flex flex-col">
            <label for="password">Password</label>
            <input 
               type="password" 
               name="password" 
               v-model="formData.password"
               id="password"
               class="rounded border-gray-400 shadow"
               placeholder="Your password"
            >
            <div>
               <!-- Here comes the errors -->
            </div>
         </div>
         <button 
            class="w-full bg-orange-400 rounded text-white font-bold uppercase py-1 mt-2" 
            type="submit"
         >
            Login
         </button>
         <div>
         </div>
      </form>
   </div>
</template>

<script setup lang="ts">
import { useForm } from "@inertiajs/vue3"

const formData = useForm({
   email: null,
   password: null
})

const login = () => {
   formData.post(route("login.store"))
}
</script>