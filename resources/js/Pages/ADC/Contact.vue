<script setup lang="ts">
import CoolBox from "./../../Components/CoolBox.vue";
import hero2 from "./../../../assets/conference.jpg";
import Layout from "../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'

</script>
<template>
    <Layout>
        <Head>
            <title>Contact Us</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative y items-center w-full justify-between gap-8 !mb-4">
                    <div class="flex items-center flex-col lg:flex-row w-full lg:justify-between gap-8">
                        <div class="y font-bold font-mono text-6xl">
                            <span>CONTACT</span>
                            <span class="bg-black text-white w-fit">US</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center lg:flex-row gap-8 w-full">
                        <div class="mr-3 mb-1" style="filter: drop-shadow(0.75rem 0.25rem #3F4443);">
                            <img class="w-[32rem] float-right" :src="hero2" alt="Hero" style="clip-path: polygon(0 0,calc(100% - 3rem) 0,100% 3rem,100% 100%,3rem 100%,0 calc(100% - 3rem));"/>
                        </div>
                        <div class="y space-y-4">
                            <CoolBox class="max-w-full" title="Thank You">
                                Thank you for your interest in American Demolition Corporation. Headquartered in Carol Stream, Illinois – just 30 minutes from downtown Chicago – American Demolition provides complete demolition services to clients throughout the Midwest and nationwide. If you have any questions, need more information or would like to discuss an upcoming project, please contact us, and a representative will promptly respond to your request or inquiry.
                            </CoolBox>
                            <div class="y pl-8">
                                <h2 class="font-bold text-3xl">American Demolition Corporation</h2>
                                <ul class="space-y-2 font-mono list-inside list-[square] text-lg">
                                    <li class="w-full bg-black text-white px-2">480 Randy Rd. Carol Stream, IL 60188</li>
                                    <li class="w-full bg-black text-white px-2">Phone: 847-608-0010</li>
                                    <li class="w-full bg-black text-white px-2">Fax: 847-608-0060</li>
                                    <li class="w-full bg-black text-white px-2">Email: info@amerdemo.com</li>
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
