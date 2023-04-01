<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SidebarLayout from '@/Layouts/SidebarLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['user']);

</script>

<template>
    <Head title="Users" />

    <SidebarLayout>
        <template #header>
        </template>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        User Page 
                        <ul>
                            <li v-for="u in user">
                                {{ u.id }}
                                {{ u.name }}
                                {{ u.email }}
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </SidebarLayout>
</template>
