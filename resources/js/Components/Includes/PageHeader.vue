<script setup lang="ts">
const props = defineProps<{
    pageTitle: string
}>();
</script>

<template>
    <div>
        <h1 class="text-3xl font-bold">{{ pageTitle }}</h1>
    </div>
</template>
