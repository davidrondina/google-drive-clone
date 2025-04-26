<script setup lang="ts">
import { Inbox, SquareUserRoundIcon, Users, PlusIcon } from "lucide-vue-next"
import {
    Sidebar,
    SidebarContent,
    SidebarGroup,
    SidebarGroupContent,
    SidebarGroupLabel,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from "@/Components/ui/sidebar"

// Menu items.
const items = [
    {
        title: "My Files",
        url: "#",
        routeName: "test",
        icon: Inbox,
    },
    {
        title: "Shared with Me",
        url: "#",
        routeName: "test",
        icon: Users,
    },
    {
        title: "Shared by Me",
        url: "#",
        routeName: "test",
        icon: SquareUserRoundIcon,
    },
];
</script>

<template>
    <Sidebar class="p-4 bg-transparent">
        <SidebarHeader class="mb-4">
            Goggle Drive
        </SidebarHeader>
        <SidebarContent>
            <button class="flex items-center justify-center w-full py-3 mb-4 border gap-x-2 rounded-xl">
                <PlusIcon :size="16" />
                <span>Upload</span>
            </button>
            <SidebarMenu class="space-y-2">
                <SidebarMenuItem v-for="item in items" :key="item.title">
                    <SidebarMenuButton :tooltip="item.title" :is-active="route().current(item.routeName)" as-child>
                        <a :href="item.url">
                            <component :is="item.icon" />
                            <span>{{ item.title }}</span>
                        </a>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
            <!-- <SidebarGroup>
                <SidebarGroupLabel>Application</SidebarGroupLabel>
                <SidebarGroupContent>
                    <SidebarMenu>
                        <SidebarMenuItem v-for="item in items" :key="item.title">
                            <SidebarMenuButton asChild>
                                <a :href="item.url">
                                    <component :is="item.icon" />
                                    <span>{{ item.title }}</span>
                                </a>
                            </SidebarMenuButton>
                        </SidebarMenuItem>
                    </SidebarMenu>
                </SidebarGroupContent>
            </SidebarGroup> -->
        </SidebarContent>
    </Sidebar>
</template>
