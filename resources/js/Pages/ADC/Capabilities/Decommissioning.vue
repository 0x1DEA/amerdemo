<script setup lang="ts">
import CoolBox from "../../../Components/CoolBox.vue";
import Layout from "../../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'

</script>
<template>
    <Layout>
        <Head>
            <title>Decommissioning</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8 !mb-4">
                    <div class="y gap-8 md:w-3/5">
                        <div class=" y font-bold font-mono text-4xl md:text-6xl">
                            <span>DEMOLITION &</span>
                            <span>DECOMMISSIONING</span>
                        </div>
                        <CoolBox class="max-w-full" title="Delivering Results">
                            American Demolition Corporation offers structural, selective and customized demolition, decommissioning, dismantlement and deconstruction services for a wide variety of clients and industries. From single-family homes and multi-story buildings to mega structures and unique installations, no project is too complex or challenging with American Demolition’s expertise, resources and capabilities.
                            <br/>
                            <br/>
                            Whether the project requires a total teardown or partial demolition in an active site, our integrated approach is designed to solve problems, present solutions, control costs, improve efficiencies and ensure safety every step of the way. American Demolition begins by assigning an experienced team of managers, construction engineers and skilled equipment operators to your project. These professionals plan and execute the entire process, including site preparation, demolition, materials processing and site restoration.
                            <br/>
                            <br/>
                            American Demolition customizes every service option to fit your exact needs and recommends leading-edge strategies to ensure the ultimate success of your project. We continually enhance our machinery and modify our techniques to reflect the most advanced demolition concepts and equipment currently in practice.
                        </CoolBox>
                    </div>
                    <div class="y gap-4 md:w-2/5">
                        <h2 class="font-bold text-3xl">Industry-Specific Projects</h2>
                        <ul class="space-y-2 list-inside list-[square] text-lg">
                            <li><b>Industrial:</b> Power Plants, Paper Mills, Coal Mines,Tank Removal, Transformers, Silo Bins, Stacks/Chimneys</li>
                            <li><b>Commercial:</b> High Rises, Shopping Centers, Grain Elevators, Auto Assembly Plants, Medical Facilities, Theatres, Apartments, Residential Buildings</li>
                            <li><b>Government/Municipalities:</b> Park Structures, Schools, Stadiums, Roads/Bridges, Cellular Towers, Water Treatment Facilities</li>
                        </ul>
                    </div>
                </div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8">

                </div>
            </div>
        </main>
    </Layout>
</template>
