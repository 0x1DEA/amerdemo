<script setup lang="ts">
import CoolBox from "./../../Components/CoolBox.vue";
import Layout from "../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'

</script>
<template>
    <Layout>
        <Head>
            <title>Featured Demolition Projects</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative flex flex-col items-center w-full justify-between gap-8 !mb-4">
                    <div class="y items-center gap-8">
                        <div class=" y text-white font-bold font-mono text-6xl">
                            <span>FEATURED</span>
                            <span>DEMOLITION</span>
                            <span class="bg-white text-black w-fit">PROJECTS</span>
                        </div>
                        <CoolBox class="max-w-full" title="Exceeding Expectations">
                            American Demolition Corporation has partnered with scores of businesses and organizations to successfully complete all types of challenging demolition projects on time and within budget. Our experienced crew has dismantled high-rise buildings in tightly confined city locations, expertly removed contaminated contents and soil from closed processing plants, and selectively demolished structural elements within active hotels without incident or delays. Here are just a few of the many projects we’ve managed and structures we’ve helped transform over the years.
                        </CoolBox>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-white w-full">
                            <div class="col-span-1">
                                <h2 class="font-bold text-2xl">Government</h2>
                                <ul class="space-y-2 list-inside list-[square] text-lg">
                                    <li class="flex flex-col">
                                        <span>Naval Station Great Lakes</span>
                                        <span>Great Lakes, IL</span>
                                    </li>
                                    <li class="flex flex-col">
                                        <span>Stickney Water Reclamation Plant</span>
                                        <span>Stickney, IL</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-bold text-2xl">High Rise</h2>
                                <ul class="space-y-2 list-inside list-[square] text-lg">
                                    <li class="flex flex-col">
                                        <span>VA Lakeside/Northwestern Memorial Hospital</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                    <li class="flex flex-col">
                                        <span>Passavant Pavilion/Northwestern Memorial Hospital</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                    <li class="flex flex-col">
                                        <span>Wesley Pavilion/Northwestern Memorial Hospital</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-bold text-2xl">Selective</h2>
                                <ul class="space-y-2 list-inside list-[square] text-lg">
                                    <li class="flex flex-col">
                                        <span>Radisson BLU Aqua Hotel</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                    <li class="flex flex-col">
                                        <span>Randolph Tower Apartments</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-bold text-2xl">Manufacturing</h2>
                                <ul class="space-y-2 list-inside list-[square] text-lg">
                                    <li class="flex flex-col">
                                        <span>Bedford Industrial Center</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                    <li class="flex flex-col">
                                        <span>Sapa Profiles North America Plant</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-bold text-2xl">Industrial Selective</h2>
                                <ul class="space-y-2 list-inside list-[square] text-lg">
                                    <li class="flex flex-col">
                                        <span>Archer Daniels Midland</span>
                                        <span>Various Midwest Sites</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-bold text-2xl">Commercial</h2>
                                <ul class="space-y-2 list-inside list-[square] text-lg">
                                    <li class="flex flex-col">
                                        <span>Brickyard Mall</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                    <li class="flex flex-col">
                                        <span>Lakehurst Mall</span>
                                        <span>Chicago, IL</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-bold text-2xl">Power Plant</h2>
                                <ul class="space-y-2 list-inside list-[square] text-lg">
                                    <li class="flex flex-col">
                                        <span>Collins Generating Station</span>
                                        <span>Morris, IL</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8">

                </div>
            </div>
        </main>
    </Layout>
</template>
