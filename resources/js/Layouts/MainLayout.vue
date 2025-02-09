<template>
   <Link href="/">Main Page</Link>&nbsp;
   <Link href="/hello">Show Page</Link>

   <div v-if="flashSuccess" class="success">
      {{ flashSuccess }}
   </div>

   <slot>Default</slot>
</template>

<script setup>
import { computed, watchEffect } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const page = usePage();

// Użycie computed(), aby śledzić wartość flash
const flashSuccess = computed(() => page.props.flash?.success || '');

// Dodanie watchEffect(), aby automatycznie logować zmiany
// watchEffect(() => {
//     console.log("Flash message:", flashMessage.value);
// });

</script>

<style scoped>
   .success{
      background-color: green;
      color: azure;
   }
</style>
