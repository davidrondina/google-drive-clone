<script setup lang="ts">
import { Input } from '@/Components/ui/input';
import { Search } from 'lucide-vue-next'
</script>

<template>
    <div class="min-w-72 px-4 py-1.5 relative items-center w-full max-w-sm bg-gray-200 rounded-xl">
        <Input id="search" type="text" placeholder="Search..." class="pl-10 focus:outline-none" />
        <span class="absolute inset-y-0 flex items-center justify-center px-4 start-0">
            <Search class="size-6 text-muted-foreground" />
        </span>
    </div>
</template>
