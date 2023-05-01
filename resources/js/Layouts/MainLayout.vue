<template>
   <div class="bg-white flex flex-col">
      <header class="flex flex-col border-b-2 py-2">
         <div class="flex flex-col mx-auto flex-1 w-full max-w-6xl">
            <div class="flex pt-2 items-center gap-4">
               <h1 class="text-orange-500 font-bold text-3xl mb-1">Betsy</h1>
               <div class="flex items-center flex-1">
                  <input 
                     class="px-4 py-1 rounded-full border-gray-400 w-full" 
                     type="text"
                     placeholder="Search for..."
                  >
               </div>
               <ul class="flex gap-4">
                  <li>Sign in</li>
                  <li>Login</li>
               </ul>
            </div>
            <nav class="mt-3">
               <ul class="flex gap-2 uppercase font-bold text-sm text-gray-500">
                  <li>
                     <Link 
                        href="/"
                     >
                        Home
                     </Link>
                  </li>
                  <li>
                     <Link 
                        :href="route('shop.index')"
                     >
                        Stores
                     </Link>
                  </li>
               </ul>
            </nav>
         </div>
      </header>
      <slot />
      <Footer/>
   </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3"
import Footer from "./Footer.vue"
</script>