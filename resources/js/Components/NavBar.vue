<script setup lang="ts">
import NavLink from "./NavLink.vue";
import Dropdown from "./Dropdown.vue";
import DropdownLink from "./DropdownLink.vue";
import route from 'ziggy-js'
import {ref} from "vue";

const nav = [
    {
        title: 'Home',
        link: '/',
    },
    {
        title: 'About',
        link: '/about',
    },
    {
        title: 'Capabilities',
        link: '/capabilities',
        children: [
            {
                title: 'Asset Recovery',
                link: '/asset-recovery',
            },
            {
                title: 'Safety/Quality Programs',
                link: '/safety-quality-programs',
            },
            {
                title: 'Industrial/Environmental Services',
                link: '/industrial-environmental-services',
            },
            {
                title: 'Demolition/Decommissioning',
                link: '/demolition-decommissioning',
            },
        ],
    },
    {
        title: 'Key Advantages',
        link: '/advantages',
    },
    {
        title: 'Featured Projects',
        link: '/projects',
        // children: [
        //     {
        //         title: 'Government',
        //         link: '/naval-station-great-lakes-il',
        //     },
        //     {
        //         title: 'High Rise',
        //         link: '/va-lakeside',
        //     },
        //     {
        //         title: 'Selective',
        //         link: '/radisson-blu-aqua-hotel',
        //     },
        //     {
        //         title: 'Industrial Selective',
        //         link: '/archer-daniels-midland',
        //     },
        //     {
        //         title: 'Manufacturing',
        //         link: '/bedford-industrial-center',
        //     },
        //     {
        //         title: 'Commercial',
        //         link: '/brickyard-mall',
        //     },
        //     {
        //         title: 'Power Plant',
        //         link: '/collins-generating-station',
        //     },
        // ],
    },
    {
        title: 'Contact',
        link: '/contact',
    },
];

const nodeRoute = (node: any, subnode: any = null) => {
    let url = '/';
    if (node.link) url = node.link
    else if (node.route) url = route(node.route).toString()

    if (subnode) {
        if (subnode.link) {
            url += subnode.link
        } else if (subnode.route) {
            url = route(node.route).toString()
        }
    }

    return url;
}

const open = ref(false);
</script>
<template>
    <div class="relative z-50 flex flex-col md:flex-row justify-center w-full text-white bg-pt-466 text-pt-6200 border-pt-466">
        <div class="flex md:hidden items-center justify-between w-full px-4 py-4">
            <div class="cursor-pointer" @click="open = !open">
                <svg v-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <svg v-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </div>
        </div>
        <div v-show="open" class="flex flex-col md:hidden w-full items-center divide-y divide-pt-6200 border-t border-pt-466">
            <template v-for="(node, index) in nav" :key="index">
                <NavLink class="w-full" :href="nodeRoute(node)">{{ node.title }}</NavLink>
                <DropdownLink class="bg-pt-3517" v-for="(subnode, subindex) in node.children" :key="subindex" :href="nodeRoute(node, subnode)">{{ subnode.title }}</DropdownLink>
            </template>
        </div>
        <div class="hidden md:flex justify-between w-full lg:max-w-5xl xl:max-w-6xl">
            <div class="x space-x-4 items-stretch">
                <template v-for="(node, index) in nav" :key="index">
                    <Dropdown class="flex items-stretch" v-if="node.hasOwnProperty('children')">
                        <NavLink class="block bg-pt-466" :href="nodeRoute(node)">{{ node.title }}</NavLink>
                        <template #contents>
                            <DropdownLink v-for="(subnode, subindex) in node.children" :key="subindex" :href="nodeRoute(node, subnode)">{{ subnode.title }}</DropdownLink>
                        </template>
                    </Dropdown>
                    <NavLink class="block bg-pt-466" v-else :href="nodeRoute(node)">{{ node.title }}</NavLink>
                </template>
            </div>
            <div v-if="false" class="x ml-4 border-y-2 border-pt-466">
                <div class="border-[1.4rem] aspect-square border-transparent border-r-pt-6183 border-t-pt-6183"></div>
                <div class="border-[1.4rem] aspect-square border-transparent border-l-pt-6183 border-b-pt-6183"></div>
                <div class="border-[1.4rem] aspect-square border-transparent border-r-pt-6183 border-t-pt-6183"></div>
                <div class="border-[1.4rem] aspect-square border-transparent border-l-pt-6183 border-b-pt-6183"></div>
                <div class="border-[1.4rem] aspect-square border-transparent border-r-pt-6183 border-t-pt-6183"></div>
                <div class="border-[1.4rem] aspect-square border-transparent border-l-pt-6183 border-b-pt-6183"></div>
                <div class="border-[1.4rem] aspect-square border-transparent border-r-pt-6183 border-t-pt-6183"></div>
                <div class="border-[1.4rem] aspect-square border-transparent border-l-pt-6183 border-b-pt-6183"></div>
            </div>
        </div>
    </div>
</template>
