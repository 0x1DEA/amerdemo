<script setup lang="ts">
import CoolBox from "./../../Components/CoolBox.vue";
import hero1 from "./../../../assets/home.jpg";
import hero2 from "./../../../assets/group.jpg";
import hero3 from "./../../../assets/industrial.jpg";
import Layout from "../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'

</script>
<template>
    <Layout>
        <Head>
            <title>Home</title>
        </Head>
        <main class="y items-center grow">
            <div class="y w-full">
                <div class="bg-center bg-cover h-[calc(100vh-9rem)]" :style="`background-image: url(${ hero1 });`">
                    <div class="flex flex-col justify-center items-center h-full md:flex-row w-full gap-8 p-8 bg-black/75">
                        <div class="y space-y-4 w-full lg:max-w-5xl xl:max-w-6xl">
                            <div class="y text-white font-bold font-mono text-6xl mt-4">
                                <span>AMERICAN</span>
                                <span class="w-fit">DEMOLITION</span>
                            </div>
                            <CoolBox title="Start To Finish">
                                American Demolition Corporation is focused on your complete satisfaction. Whether your project is large or small, we strive to provide the highest level of service possible in completing projects on time, within budget and without surprises or complications.
                            </CoolBox>
                        </div>
                    </div>
                </div>
                <div class="bg-cover py-[20rem] relative" :style="`background-image: url(${ hero2 });background-position:center 15%;`">
                    <div class="flex items-end p-8 justify-center bg-black/25 absolute inset-0">
                        <h1 v-if="false" class="font-bold text-6xl text-white bg-black/50 p-4 w-fit">Big Title</h1>
                    </div>
                </div>
                <div class="bg-cover" :style="`background-image: url(${ hero3 });background-position:center 15%;`">
                    <div class="items-center py-12 flex flex-col-reverse md:flex-row w-full justify-center bg-black/50 h-full">
                        <div class="y lg:flex-row gap-4 p-2 w-full items-center justify-between lg:max-w-5xl xl:max-w-6xl">
                            <CoolBox title="About Us">
                                American Demolition Corporation  is one of the Midwest’s leading demolition and environmental remediation companies with the proven professionalism, experience, resources and knowledge to successfully manage all types of building, structure or facility projects. Since 1989, we’ve helped private businesses, public institutions and government agencies nationwide “break into the future” by maximizing their asset potential.
                                <br/>
                                American Demolition Corporation offers proven capabilities encompassing all aspects in the dismantling of structures and facilities, including total and selective demolition, decommissioning, specialized industrial services, environmental remediation, safety management and asset recovery.
                            </CoolBox>
                            <div>
                                <h2 class="font-bold text-white text-3xl">American Demolition Corporation</h2>
                                <ul class="space-y-2 font-mono list-inside text-lg">
                                    <li class="w-full bg-black/50 text-white px-2">480 Randy Rd. Carol Stream, IL 60188</li>
                                    <li class="w-full bg-black/50 text-white px-2">Phone: 847-608-0010</li>
                                    <li class="w-full bg-black/50 text-white px-2">Fax: 847-608-0060</li>
                                    <li class="w-full bg-black/50 text-white px-2">Email: info@amerdemo.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </Layout>
</template>
