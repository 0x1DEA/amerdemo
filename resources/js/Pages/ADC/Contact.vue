<script setup lang="ts">
import CoolBox from "./../../Components/CoolBox.vue";
import hero1 from "./../../../assets/home-rotator-1.jpg";
import hero2 from "./../../../assets/home-rotator-3.jpg";
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
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8 !mb-4">
                    <div class="y gap-8 md:w-2/3">
                        <div class=" y text-white font-bold font-mono text-6xl">
                            <span>CONTACT</span>
                            <span class="bg-white text-black w-fit">US</span>
                        </div>
                        <CoolBox class="max-w-full" title="Thank You">
                            Thank you for your interest in American Demolition Corporation. Headquartered in Elgin, Illinois – just 40 minutes from downtown Chicago – American Demolition provides complete demolition services to clients throughout the Midwest and nationwide. If you have any questions, need more information or would like to discuss an upcoming project, please contact us, and a representative will promptly respond to your request or inquiry.
                        </CoolBox>
                    </div>
                    <div class="y gap-4 text-white md:w-1/3">
                        <h2 class="font-bold text-3xl">American Demolition Corporation</h2>
                        <ul class="space-y-2 list-inside list-[square] text-lg">
                            <li>480 Randy Rd. Carol Stream, IL 60188</li>
                            <li>Phone: 847-608-0010</li>
                            <li>Fax: 847-608-0060</li>
                            <li>Email: info@amerdemo.com</li>
                        </ul>
                    </div>
                </div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8">

                </div>
            </div>
        </main>
    </Layout>
</template>
