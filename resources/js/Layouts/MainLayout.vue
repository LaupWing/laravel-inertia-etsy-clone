<template>
   <div class="bg-white flex flex-col">
      <header class="flex flex-col border-b-2 py-2">
         <div class="flex flex-col mx-auto flex-1 w-full max-w-6xl">
            <div class="flex pt-2 items-center">
               <h1 class="text-orange-500 font-bold text-3xl mb-1">Betsy</h1>
               <div class="flex items-center ml-4">
                  <input class="px-2 py-1 rounded-full" type="text">
               </div>
            </div>
            <nav>
               <ul class="flex gap-2">
                  <li>
                     <Link href="/">index</Link>
                  </li>
                  <li>
                     <Link href="/show">Show</Link>
                  </li>
               </ul>
            </nav>
         </div>
      </header>
      <slot />
   </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3"
</script>