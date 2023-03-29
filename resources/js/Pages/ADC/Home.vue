<script setup lang="ts">
import CoolBox from "./../../components/CoolBox.vue";
import hero1 from "./../../../assets/home-rotator-1.jpg";
import hero2 from "./../../../assets/home-rotator-3.jpg";
import Layout from "../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'

</script>
<template>
    <Layout>
        <Head>
            <title>Home</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-16 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="!hidden y text-white font-bold font-mono text-6xl">
                    <span>DOING</span>
                    <span>IT</span>
                    <span class="bg-white text-black w-fit">RIGHT</span>
                </div>
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative flex flex-col md:flex-row w-full justify-between gap-8">
                    <CoolBox title="Start To Finish">
                        American Demolition Corporation is focused on your complete satisfaction. Whether your project is large or small, we strive to provide the highest level of service possible in completing projects on time, within budget and without surprises or complications.
                    </CoolBox>
                    <div class="mr-3 mb-1" style="filter: drop-shadow(0.75rem 0.25rem #FBBF24);">
                        <img class="w-[32rem] float-right" :src="hero1" alt="Hero" style="clip-path: polygon(0 0,calc(100% - 3rem) 0,100% 3rem,100% 100%,3rem 100%,0 calc(100% - 3rem));"/>
                    </div>
                </div>
                <div class="relative flex flex-col-reverse md:flex-row w-full justify-between gap-8 !mt-16 !mb-4">
                    <div class="mr-3 mb-1" style="filter: drop-shadow(0.75rem 0.25rem #FBBF24);">
                        <img class="w-[32rem] float-right" :src="hero2" alt="Hero" style="clip-path: polygon(0 0,calc(100% - 3rem) 0,100% 3rem,100% 100%,3rem 100%,0 calc(100% - 3rem));"/>
                    </div>
                    <CoolBox title="About Us">
                        American Demolition Corporation  is one of the Midwest’s leading demolition and environmental remediation companies with the proven professionalism, experience, resources and knowledge to successfully manage all types of building, structure or facility projects. Since 1989, we’ve helped private businesses, public institutions and government agencies nationwide “break into the future” by maximizing their asset potential.
                        <br/>
                        American Demolition Corporation offers proven capabilities encompassing all aspects in the dismantling of structures and facilities, including total and selective demolition, decommissioning, specialized industrial services, environmental remediation, safety management and asset recovery.
                    </CoolBox>
                </div>
            </div>
        </main>
    </Layout>
</template>
