<script setup lang="ts">
import SearchInputField from '@/Components/SearchInputField.vue';

import { CircleUserRoundIcon } from 'lucide-vue-next';
</script>

<template>
    <header class="flex items-center justify-between w-full">
        <div>
            <SearchInputField />
        </div>
        <div class="flex items-center gap-x-4">
            <button type="button" class="text-neutral-400">
                <CircleUserRoundIcon :size="32" />
            </button>
        </div>
    </header>
</template>
