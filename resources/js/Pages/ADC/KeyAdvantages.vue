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
            <title>Key Advantages</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8 !mb-4">
                    <div class="y gap-8 md:w-2/3">
                        <div class=" y text-white font-bold font-mono text-6xl">
                            <span>KEY</span>
                            <span class="bg-white text-black w-fit">ADVANTAGES</span>
                        </div>
                        <CoolBox class="max-w-full" title="Your Reliable Demolition Partner">
                            From accurately estimating project costs and efficiently managing job-site activities, to closely controlling project deadlines and setting high safety standards, American Demolition Corporation has built a reputation for providing dependable, solutions-driven demolition services.
                            <br/>
                            <br/>
                            We tailor a demolition program to your particular needs so you’re assured that our cost and time projections are on target for your specific project. Our knowledgeable, professional team of construction engineers develop a comprehensive strategy for each project to ensure all work is completed efficiently, safely and cost-effectively, according to your schedule.
                            <br/>
                            <br/>
                            With American Demolition’s broad experience, varied resources and advanced equipment, no project challenge is too daunting or complex. Through the years, we’ve developed innovative solutions for unique project situations involving space restrictions, structural difficulties and unexpected site complications. We also have the expertise and qualifications to help you meet your environmental objectives while enhancing your bottom line.
                            <br/>
                            <br/>
                            As your trusted demolition partner, you can expect your demolition project to be completed in a responsible, sustainable and safe manner throughout the entire demolition process.
                        </CoolBox>
                    </div>
                    <div class="y gap-4 text-white md:w-1/3">
                        <h2 class="font-bold text-3xl">What We Offer</h2>
                        <ul class="space-y-2 list-inside list-[square] text-lg">
                            <li>Full-service resources</li>
                            <li>Extensive experience and knowledge</li>
                            <li>Comprehensive safety program</li>
                            <li>Single-source efficiencies and systems</li>
                            <li>Customized site solutions</li>
                            <li>Expertly trained field staff</li>
                            <li>Site-specific management team of experts </li>
                            <li>State-of-the-art equipment</li>
                            <li>Nationwide service area</li>
                        </ul>
                    </div>
                </div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8">

                </div>
            </div>
        </main>
    </Layout>
</template>
