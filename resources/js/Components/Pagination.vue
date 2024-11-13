<template>
    <nav v-if="links.length > 1" class="flex justify-center mt-6">
        <ul class="flex space-x-2">
            <li v-for="link in links" :key="link.label">
                <button
                    v-if="link.url"
                    :class="['px-3 py-1 border rounded', link.active ? 'bg-blue-500 text-white' : 'bg-white text-blue-500']"
                    @click="navigate(link.url)"
                    v-html="link.label"
                ></button>
                <span v-else class="px-3 py-1 text-gray-500" v-html="link.label"></span>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import { router } from '@inertiajs/vue3';

defineProps({
    links: Array,
});

const navigate = (url) => {
    if (url) {
        router.visit(url);
    }
};
</script>
