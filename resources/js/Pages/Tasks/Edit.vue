<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps(['project', 'task']);

const form = useForm({
    title: props.task.title,
    description: props.task.description,
    is_completed: props.task.is_completed,
});

function submit() {
    form.put(`/projects/${props.project.id}/tasks/${props.task.id}`);
}
</script>

<template>
    <Head title="Modifier Tâche" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                Modifier la Tâche
            </h2>
        </template>

        <div class="py-12 bg-gray-100">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Titre</label>
                            <input v-model="form.title" type="text" id="title" class="w-full px-3 py-2 border rounded shadow" />
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
                            <textarea v-model="form.description" id="description" class="w-full px-3 py-2 border rounded shadow"></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="inline-flex items-center">
                                <input type="checkbox" v-model="form.is_completed" class="form-checkbox text-indigo-600">
                                <span class="ml-2">Marquer comme complétée</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded">Sauvegarder</button>
                            <Link :href="`/projects/${props.project.id}/tasks`" class="ml-4 text-gray-600 underline">Annuler</Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
