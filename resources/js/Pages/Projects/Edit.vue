<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

// Définir les props
const props = defineProps(['project']);

// Initialiser le formulaire avec les données actuelles du projet
const form = useForm({
    name: props.project.name,
    description: props.project.description,
});

function submit() {
    form.put(`/projects/${props.project.id}`);
}
</script>

<template>
    <Head title="Modifier Projet" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                Modifier le projet
            </h2>
        </template>

        <div class="py-12 bg-gray-100">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nom du Projet
                            </label>
                            <input v-model="form.name" type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" :class="{ 'border-red-500': form.errors.name }" />
                            <span v-if="form.errors.name" class="text-red-500 text-sm mt-1">{{ form.errors.name }}</span>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                Description
                            </label>
                            <textarea v-model="form.description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" :class="{ 'border-red-500': form.errors.description }"></textarea>
                            <span v-if="form.errors.description" class="text-red-500 text-sm mt-1">{{ form.errors.description }}</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Sauvegarder
                            </button>
                            <Link :href="`/projects/${props.project.id}`" class="ml-4 text-gray-600 underline">Annuler</Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
