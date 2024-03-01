<script setup lang="ts">
import CoolBox from "../../../Components/CoolBox.vue";
import Layout from "../../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'
import warehouse from "./../../../../assets/warehouse.jpg";

</script>
<template>
    <Layout>
        <Head>
            <title>Asset Recovery</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8 !mb-4">
                    <div class="y gap-8 md:w-2/3">
                        <div class=" y font-bold font-mono text-6xl">
                            <span>ASSET</span>
                            <span class="bg-black text-white w-fit">RECOVERY</span>
                        </div>
                        <CoolBox class="max-w-full" title="A Return On Investment">
                            American Demolition Corporation’s asset recovery services maximize the value and investment return of recovered, reusable and recycled scrap, building materials and content components to offset the expense of a demolition project.
                            <br/>
                            <br/>
                            Whether an assembly plant or manufacturing, warehousing or processing facility must be deconstructed in whole or in part, American Demolition focuses on recovering any valuable interior or exterior assets. Furthermore, we make the recovery process as efficient, cost-effective and safe as possible.
                            <br/>
                            <br/>
                            Everything within a structure, from outdated mechanical and electrical equipment, machinery parts, tools, transformers and turbines to metal, wood, piping and copper wiring, can be extracted, segregated, processed and sold for profit or savings. American Demolition’s knowledgeable experts can evaluate and inventory your onsite assets and work with our wide vendor network to transform your project’s obsolete scraps and discarded waste into a tangible benefit to your bottom line as well as the environment.
                        </CoolBox>
                    </div>
                    <div class="y gap-4 text-white md:w-1/3">
                        <div class="mr-3 mb-1" style="filter: drop-shadow(0.75rem 0.25rem #FBBF24);">
                            <img class="w-[32rem] float-right" :src="warehouse" alt="Hero" style="clip-path: polygon(0 0,calc(100% - 3rem) 0,100% 3rem,100% 100%,3rem 100%,0 calc(100% - 3rem));"/>
                        </div>
                        <h2 class="font-bold text-3xl">Recovery Services</h2>
                        <ul class="space-y-2 list-inside list-[square] text-lg">
                            <li>Asset evaluation and recommendations</li>
                            <li>Scrap material and equipment management</li>
                            <li>Reusable equipment sales</li>
                            <li>Liquidation of building contents</li>
                        </ul>
                    </div>
                </div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8">

                </div>
            </div>
        </main>
    </Layout>
</template>
