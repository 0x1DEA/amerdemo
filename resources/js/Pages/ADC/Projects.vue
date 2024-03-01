<script setup lang="ts">
import CoolBox from "./../../Components/CoolBox.vue";
import Layout from "../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'
import hero2 from "./../../../assets/group.jpg";

const props = defineProps({
    projects: Object
})
</script>
<template>
    <Layout>
        <Head>
            <title>Featured Demolition Projects</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="relative flex flex-col items-center w-full justify-between gap-8 !mb-4">
                    <div class="y items-center gap-8 w-full">
                        <h1 class="font-bold font-mono text-6xl">FEATURED DEMOLITION PROJECTS</h1>
                        <div>
                            <h2 class="text-2xl font-bold ml-6">Exceeding Exceptions</h2>
                            <div data-augmented-ui="tl-clip tr-clip br-clip bl-clip both">
                                <p class="p-4">American Demolition Corporation has partnered with scores of businesses and organizations to successfully complete all types of challenging demolition projects on time and within budget. Our experienced crew has dismantled high-rise buildings in tightly confined city locations, expertly removed contaminated contents and soil from closed processing plants, and selectively demolished structural elements within active hotels without incident or delays. Here are just a few of the many projects we’ve managed and structures we’ve helped transform over the years.</p>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-4 w-full">
                            <div v-for="(category, key) in projects" class="text-pt-6197 bg-pt-466 px-6 py-4 border-l-[0.5rem] border-pt-3517">
                                <h2 class="font-bold text-2xl capitalize">{{ key }}</h2>
                                <ul>
                                    <li v-for="project in category" class="flex flex-col">
                                        <span>{{ project.name }}</span>
                                        <span>{{ project.location }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </Layout>
</template>
