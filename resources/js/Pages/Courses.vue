<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import SidebarLayout from '@/Layouts/SidebarLayout.vue';

</script>

<template>
    <Head title="Courses" />

    <SidebarLayout>
        <template #header>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Courses page</div>
                </div>
            </div>
        </div>
    </SidebarLayout>
</template>
