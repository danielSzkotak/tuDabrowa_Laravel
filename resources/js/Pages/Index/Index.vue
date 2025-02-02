<template>
      <div>
         This is an Index page.
         <Link href="/hello">Show Page</Link>
      </div>
      <div>
         The message is {{ message }}
      </div>
</template>

<script setup>
   import {Link} from '@inertiajs/vue3'
   
   defineProps({
      message: String
   })

</script>


<!-- Making another layout example
<script>
import MainLayout from '../../Layouts/MainLayout.vue';
   export default {
      layout: MainLayout
   }
</script> -->