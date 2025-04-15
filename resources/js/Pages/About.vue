<script setup>
import { Head } from '@inertiajs/vue3';
import PageLayout from './PageLayout.vue';
</script>

<template>
  <Head title="About Page" />

  <PageLayout>
    <div class="max-w-xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg border border-gray-200">
      <h1 class="text-3xl font-extrabold text-blue-700 mb-4 text-center">About Me</h1>
      <p class="text-lg text-gray-700 mb-2">
        <span class="font-semibold">Name:</span> Louiejay Biongcog
      </p>
      <p class="text-lg text-gray-700 mb-2">
        <span class="font-semibold">Course & Year:</span> BSIT - 3
      </p>
      <p class="text-lg text-gray-700">
        <span class="font-semibold">Cell No.:</span> 09123456789
      </p>
    </div>
  </PageLayout>
</template>
