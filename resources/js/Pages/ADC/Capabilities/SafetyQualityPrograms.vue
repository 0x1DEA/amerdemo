<script setup lang="ts">
import CoolBox from "../../../components/CoolBox.vue";
import Layout from "../../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'

</script>
<template>
    <Layout>
        <Head>
            <title>Safety Quality Programs</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                <div class="absolute p-20 blockgrid right-12 top-0"></div>
                <div class="absolute p-32 blockgrid left-12 top-[18rem]"></div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8 !mb-4">
                    <div class="y gap-8 md:w-3/5">
                        <div class=" y text-white font-bold font-mono text-6xl">
                            <span>SAFETY / QUALITY</span>
                            <span class="bg-white text-black w-fit">PROGRAMS</span>
                        </div>
                        <CoolBox class="max-w-full" title="Commitment to Safety">
                            At American Demolition Corporation, safety is our top priority at every stage in the demolition process. Advance planning and preparation are paramount. Every project starts with a safety assessment of: the site, structures, working environment, any unusual safety hazards, field-staff input, equipment operations and weather conditions, among other factors. Onsite safety managers constantly monitor conditions and risks to personnel, clients, subcontractors, the public and buildings or collateral in and around the project area.
                            <br/>
                            <br/>
                            To further ensure safety compliance, prevent injuries and control costs, every field worker, operator and manager must complete an intensive training program with regular follow-up sessions on best practices. All American Demolition safety procedures and systems strictly adhere to each and every OSHA, governmental and environmental regulation, and exceed industry standards.
                            <br/>
                            <br/>
                            American Demolition’s efforts have resulted in an excellent safety record with low incident rates and a consistent record of uninterrupted job-site performance.
                        </CoolBox>
                    </div>
                    <div class="y gap-4 text-white md:w-2/5">
                        <h2 class="font-bold text-3xl">Safety Advantages</h2>
                        <ul class="space-y-2 list-inside list-[square] text-lg">
                            <li>Full-time safety director</li>
                            <li>OSHA-trained foreman</li>
                            <li>Site-specific safety program</li>
                            <li>Morning safety meetings</li>
                            <li>Daily equipment inspection</li>
                            <li>Job-hazard analysis</li>
                            <li>In-house training sessions</li>
                            <li>Complete site security</li>
                            <li>Environmental-safety controls</li>
                            <li>Outstanding safety record</li>
                        </ul>
                        <CoolBox class="max-w-full text-black" title="Quality Assurance">
                            Along with a strong commitment to safety, American Demolition is equally dedicated to providing unsurpassed project quality and service, not only in the field, but behind the scenes as well. Every American Demolition employee is focused on your needs at all times, managing the process, quickly addressing your specific concerns and requests, watching your project’s bottom line and doing whatever it takes to successfully complete your project to your highest expectations of performance and excellence.
                        </CoolBox>
                    </div>
                </div>
                <div class="relative flex flex-col md:flex-row items-center w-full justify-between gap-8">

                </div>
            </div>
        </main>
    </Layout>
</template>
