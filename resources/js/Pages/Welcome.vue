<template>
    <div class="w-1/3 p-20">
        <p class="p-6">
            <Link :href="route('test1')" class="text-blue-600">Vidstack Test1</Link>
        </p>
        <p class="p-6">
            <Link :href="route('test2')" class="text-blue-600">Vidstack Test2</Link>
        </p>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
