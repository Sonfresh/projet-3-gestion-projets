<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

    const props = defineProps(['project', 'tasks']);
    const project = props.project;
    const tasks = props.tasks;

</script>

<template>
    <Head title="Détails du Projet" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                Détails du projet: {{ project.name }}
            </h2>
        </template>

        <div class="py-12 bg-gray-100">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                    <h3 class="text-xl font-bold">Description du Projet</h3>
                    <p class="mt-2">{{ project.description || 'Aucune description disponible' }}</p>
                </div>

                <!-- Liste des Tâches -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold">Tâches</h3>
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
