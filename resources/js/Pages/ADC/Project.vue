<script setup>
import CoolBox from "./../../Components/CoolBox.vue";
import hero1 from "./../../../assets/home.jpg";
import hero2 from "./../../../assets/group.jpg";
import Layout from "../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'

const props = defineProps({
    project: Object
})

console.log(props.project)
</script>
<template>
    <Layout>
        <Head>
            <title>{{ project.name }}</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-16 px-8" >
                <div class="relative flex flex-col md:flex-row w-full justify-between gap-8">
                    <div class="y gap-8">
                        <div class="y font-bold font-mono text-6xl mt-4">
                            <span class="w-fit">{{ project.name }}</span>
                        </div>
                        <CoolBox :title="project.location">
                            {{project.content}}
                        </CoolBox>
                    </div>
                    <div class="mr-3 mb-1" style="filter: drop-shadow(0.75rem 0.25rem #798772);">
                        <img class="w-[32rem] float-right" :src="hero1" alt="" style="clip-path: polygon(0 0,calc(100% - 3rem) 0,100% 3rem,100% 100%,3rem 100%,0 calc(100% - 3rem));"/>
                    </div>
                </div>
            </div>
        </main>
    </Layout>
</template>
