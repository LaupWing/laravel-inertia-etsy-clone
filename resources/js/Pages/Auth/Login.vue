<template>
   <form>
      <div class="w-1/2 mx-auto">
         <div>
            <label for="email">Email (username)</label>
            <input 
               type="email" 
               name="email" 
               id="email"
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

</script>