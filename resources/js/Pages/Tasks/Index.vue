<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps(['project', 'tasks']);
</script>

<template>
    <Head title="Tâches du Projet" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                Tâches pour le projet: {{ project.name }}
            </h2>
        </template>

        <div class="py-12 bg-gray-100">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">Liste des Tâches</h3>
                        <Link :href="`/projects/${project.id}/tasks/create`" class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700">
                            Nouvelle Tâche
                        </Link>
                    </div>

                    <table class="w-full bg-white border rounded-lg">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-600">Titre</th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-600">Statut</th>
                                <th class="px-6 py-3 border-b-2 border-gray-200"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="task in tasks" :key="task.id" class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">{{ task.title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :class="task.is_completed ? 'text-green-600' : 'text-red-600'">
                                        {{ task.is_completed ? 'Complétée' : 'En cours' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <Link :href="`/projects/${project.id}/tasks/${task.id}/edit`" class="text-indigo-600 hover:text-indigo-900">Modifier</Link>
                                    <form :action="`/projects/${project.id}/tasks/${task.id}`" method="POST" style="display: inline;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="ml-4 text-red-600 hover:text-red-900">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
