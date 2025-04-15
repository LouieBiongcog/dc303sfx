<script setup>

const props = defineProps({
    investor: {
        type: Object,
        required: true,
    },
});


</script>


<template>
    <div class="bg-white shadow rounded-md p-3 text-sm space-y-1">
    <h2 class="text-base font-bold text-gray-800">{{ investor.last_name }}, {{ investor.first_name }}</h2>
    <p class="text-gray-600"><strong>Phone:</strong> {{ investor.phone }}</p>
    <p class="text-gray-600"><strong>Address:</strong> {{ investor.address }}</p>
    <p class="text-gray-600"><strong>Type:</strong> {{ investor.investment_type }}</p>
  </div>
</template>
