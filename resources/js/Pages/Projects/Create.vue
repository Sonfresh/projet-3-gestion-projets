<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    description: ''
});

const submit = () => {
    form.post('/projects', {
        onSuccess: () => {
            form.reset();
        }
    });
};
</script>

<template>
    <Head title="Créer un projet" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                Créer un projet
            </h2>
        </template>

        <div class="py-12 bg-gray-100">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nom du projet</label>
                            <input type="text" v-model="form.name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required />
                            <span v-if="form.errors.name" class="text-red-600 text-sm">{{ form.errors.name }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea v-model="form.description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                            <span v-if="form.errors.description" class="text-red-600 text-sm">{{ form.errors.description }}</span>
                        </div>

                        <div class="flex justify-between items-center">
                            <Link href="/projects" class="text-gray-600 underline">Annuler</Link>
                            <button type="submit" class="ml-4 bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700">
                                Créer le projet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
