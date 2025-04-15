<script setup>
import { useForm, Head } from '@inertiajs/vue3';

const form = useForm({
  first_name: '',
  last_name: '',
  phone: '',
  address: '',
  investment_type: '',
});

const submit = () => {
  form.post('/investors');
};
</script>

<template>
  <Head title="Create Investor" />

  <div class="max-w-3xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Create New Investor</h1>

    <form @submit.prevent="submit" class="space-y-5 bg-white p-6 rounded-lg shadow-md">


      <div>
        <label class="block text-sm font-semibold mb-1">First Name</label>
        <input
          v-model="form.first_name"
          type="text"
          class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200"
          :class="{ 'border-red-500': form.errors.first_name }"
        />
        <p v-if="form.errors.first_name" class="text-red-500 text-sm">{{ form.errors.first_name }}</p>
      </div>


      <div>
        <label class="block text-sm font-semibold mb-1">Last Name</label>
        <input
          v-model="form.last_name"
          type="text"
          class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200"
          :class="{ 'border-red-500': form.errors.last_name }"
        />
        <p v-if="form.errors.last_name" class="text-red-500 text-sm">{{ form.errors.last_name }}</p>
      </div>


      <div>
        <label class="block text-sm font-semibold mb-1">Phone</label>
        <input
          v-model="form.phone"
          type="text"
          class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200"
          :class="{ 'border-red-500': form.errors.phone }"
        />
        <p v-if="form.errors.phone" class="text-red-500 text-sm">{{ form.errors.phone }}</p>
      </div>


      <div>
        <label class="block text-sm font-semibold mb-1">Address</label>
        <input
          v-model="form.address"
          type="text"
          class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200"
          :class="{ 'border-red-500': form.errors.address }"
        />
        <p v-if="form.errors.address" class="text-red-500 text-sm">{{ form.errors.address }}</p>
      </div>

      <div>
        <label class="block text-sm font-semibold mb-1">Investment Type</label>
        <select
          v-model="form.investment_type"
          class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200"
          :class="{ 'border-red-500': form.errors.investment_type }"
        >
          <option value="">-- Select Type --</option>
          <option value="micro">micro</option>
          <option value="Sponsor">Sponsor</option>
          <option value="benefactor">Benefactor</option>
        </select>
        <p v-if="form.errors.investment_type" class="text-red-500 text-sm">{{ form.errors.investment_type }}</p>
      </div>


      <div>
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700"
          :disabled="form.processing"
        >
          Create Investor
        </button>
      </div>
    </form>
  </div>
</template>
