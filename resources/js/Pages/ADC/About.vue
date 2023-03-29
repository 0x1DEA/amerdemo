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
            <title>About</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8 !mb-4">
                    <div class="y gap-8 md:w-2/3">
                        <div class=" y text-white font-bold font-mono text-6xl">
                            <span>OUR</span>
                            <span>COMPANY</span>
                            <span class="bg-white text-black w-fit">PROFILE</span>
                        </div>
                        <CoolBox class="max-w-full" title="About Us">
                            American Demolition Corporation  is one of the Midwest’s leading demolition and environmental remediation companies with the proven professionalism, experience, resources and knowledge to successfully manage all types of building, structure or facility projects. Since 1989, we’ve helped private businesses, public institutions and government agencies nationwide “break into the future” by maximizing their asset potential.
                        </CoolBox>
                    </div>
                    <div class="y gap-4 text-white md:w-1/3">
                        <h2 class="font-bold text-3xl">Project Services</h2>
                        <ul class="space-y-2 list-inside list-[square] text-lg">
                            <li>Structural and selective demolition</li>
                            <li>Site preparation and excavation</li>
                            <li>Asset recovery and artifact salvaging</li>
                            <li>Site decontamination and remediation</li>
                            <li>Hazardous-waste management</li>
                            <li>Environmental abatement</li>
                            <li>Utilities disconnection and relocation</li>
                            <li>Underground storage-tank removal</li>
                            <li>Onsite crushing and recycling</li>
                            <li>Specialized equipment modifications</li>
                        </ul>
                    </div>
                </div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8">

                </div>
            </div>
        </main>
    </Layout>
</template>
