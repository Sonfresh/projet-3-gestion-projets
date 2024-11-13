<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link } from '@inertiajs/vue3';

    defineProps(['project']);
</script>

<template>
    <Head :title="`Projet - ${project.name}`" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                {{ project.name }}
            </h2>
        </template>

        <div class="py-12 bg-gray-100">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold">Détails du projet</h3>
                        <p class="text-gray-800 mt-2">{{ project.description || 'Aucune description' }}</p>
                        <p class="text-gray-500 text-sm">Créé le : {{ new Date(project.created_at).toLocaleDateString() }}</p>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-bold">Liste des tâches</h3>
                        <ul class="mt-2 space-y-2">
                            <li v-if="project.tasks && project.tasks.length > 0"
                                v-for="task in project.tasks" :key="task.id"
                                class="flex justify-between items-center bg-gray-50 p-4 rounded">

                                <div>
                                    <p class="font-medium text-gray-800">{{ task.title }}</p>
                                    <p class="text-sm text-gray-500">{{ task.description || 'Pas de description' }}</p>
                                </div>

                                <span :class="task.is_completed ? 'text-green-500' : 'text-red-500'">
                                    {{ task.is_completed ? 'Complétée' : 'En cours' }}
                                </span>
                            </li>

                            <li v-else>
                                <p class="text-gray-600">Aucune tâche trouvée pour ce projet.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="flex justify-end mt-6">
                        <Link href="/projects" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Retour aux projets</Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>