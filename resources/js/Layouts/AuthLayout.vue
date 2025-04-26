<script setup lang="ts">
import { SidebarProvider, SidebarTrigger } from "@/Components/ui/sidebar";
import AppSidebar from "@/Components/Layout/AppSidebar.vue";
import AppHeader from "@/Components/Layout/AppHeader.vue";
</script>

<template>
    <div class="w-full">
        <SidebarProvider :default-open="true">
            <AppSidebar />
            <main class="flex w-full">
                <SidebarTrigger class="mt-8" />
                <div class="w-full min-h-screen p-8 space-y-12">
                    <AppHeader />
                    <slot />
                </div>
            </main>
        </SidebarProvider>
    </div>
</template>
