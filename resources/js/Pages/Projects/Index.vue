<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';

defineProps(['projects']);
</script>

<template>
    <Head title="Projets" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                Mes Projets
            </h2>
        </template>

        <div class="py-12 bg-gray-100">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">Projects</h3>
                        <Link href="/projects/create" class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700">
                            Nouveau Projet
                        </Link>
                    </div>

                    <!-- Tableau des projets -->
                    <div class="overflow-x-auto">
                        <table class="w-full bg-white border rounded-lg">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-600">Nom du Projet</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-600">Description</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-600">Tâches Complétées</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-if="projects && projects.data.length > 0" v-for="project in projects.data" :key="project.id" class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ project.name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ project.description || 'Aucune description' }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ project.tasks_count }} tâches
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <Link :href="`/projects/${project.id}`" class="text-indigo-600 hover:text-indigo-900">Voir</Link>
                                        <Link :href="`/projects/${project.id}/edit`" class="ml-4 text-green-600 hover:text-green-900">Modifier</Link>
                                    </td>
                                </tr>
                                <tr v-else>
                                    <td colspan="4" class="px-6 py-4 text-center text-gray-600">
                                        Aucun projet trouvé.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div v-if="projects.links.length > 1" class="mt-4">
                        <Pagination :links="projects.links" />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
