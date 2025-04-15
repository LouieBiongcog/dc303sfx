<script setup>
import { Link } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3';
import PageLayout from '../PageLayout.vue';
import InvestorCard from '../../Components/InvestorCard.vue';

defineProps({
    investors: Object
});



</script>

<template>

    <Head title="Investors" />

    <PageLayout>

        <div class="max-w-6xl mx-auto px-4 py-8">

             <div class="flex justify-end mb-4">
                <Link href="/investors/create" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Add Investor </Link>
             </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 py-8">


            <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Investor List</h1>


            <div class="flex justify-center items-center flex-wrap gap-2 mb-8">
            <Link :href="investors.first_page_url" class="px-3 py-1 rounded bg-blue-600 text-white hover:bg-blue-700" v-if="investors.current_page > 1">
                &laquo;
            </Link>

            <Link :href="investors.prev_page_url" class="px-3 py-1 rounded bg-blue-600 text-white hover:bg-blue-700" v-if="investors.prev_page_url">
                &lsaquo;
            </Link>

            <span class="px-4 py-1 text-gray-800 font-medium">
                Page {{ investors.current_page }} of {{ investors.last_page }}
            </span>

            <Link :href="investors.next_page_url" class="px-3 py-1 rounded bg-blue-600 text-white hover:bg-blue-700" v-if="investors.next_page_url">
                &rsaquo;
            </Link>

            <Link :href="investors.last_page_url" class="px-3 py-1 rounded bg-blue-600 text-white hover:bg-blue-700" v-if="investors.current_page < investors.last_page">
                &raquo;
            </Link>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
            <InvestorCard v-for="investor in investors.data" :key="investor.id" :investor="investor"/>
            </div>

        </div>

    </PageLayout>

</template>
