<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SidebarLayout from '@/Layouts/SidebarLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['projects']);

</script>

<template>
    <Head title="Projects" />

    <SidebarLayout>
        <template #header>
        </template>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Projects Page 
                        <ul>
                            <li v-for="p in projects">
                                {{ p.id }}
                                {{ p.name }}
                                {{ p.email }}
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </SidebarLayout>
</template>
