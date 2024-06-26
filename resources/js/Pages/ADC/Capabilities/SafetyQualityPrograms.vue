<script setup lang="ts">
import CoolBox from "../../../Components/CoolBox.vue";
import Layout from "../../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'
import conference from "./../../../../assets/conference.jpg";
</script>
<template>
    <Layout>
        <Head>
            <title>Safety Quality Programs</title>
        </Head>
        <main class="y items-center grow">
            <div class="y items-center relative md:py-8 px-8 space-y-8 w-full bg-cover bg-center" :style="`background-image: url(${conference});`">
                <div class="bg-black/75 inset-0 absolute"></div>
                <div class="y lg:flex-row text-white relative md:py-8 px-8 space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                    <div class="y gap-8">
                        <div class="y font-bold font-mono text-6xl">
                            <span>SAFETY/</span>
                            <span>QUALITY</span>
                            <span>PROGRAMS</span>
                        </div>
                        <div class="y gap-4">
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
                        </div>
                    </div>
                    <div class="relative flex flex-col md:flex-row-reverse items-center md:items-start w-full justify-between gap-8">
                        <div class="y gap-8">
                            <CoolBox class="max-w-full" title="Commitment to Safety">
                                At American Demolition Corporation, safety is our top priority at every stage in the demolition process. Advance planning and preparation are paramount. Every project starts with a safety assessment of: the site, structures, working environment, any unusual safety hazards, field-staff input, equipment operations and weather conditions, among other factors. Onsite safety managers constantly monitor conditions and risks to personnel, clients, subcontractors, the public and buildings or collateral in and around the project area.
                                <br/>
                                <br/>
                                To further ensure safety compliance, prevent injuries and control costs, every field worker, operator and manager must complete an intensive training program with regular follow-up sessions on best practices. All American Demolition safety procedures and systems strictly adhere to each and every OSHA, governmental and environmental regulation, and exceed industry standards.
                                <br/>
                                <br/>
                                American Demolition’s efforts have resulted in an excellent safety record with low incident rates and a consistent record of uninterrupted job-site performance.
                            </CoolBox>
                            <CoolBox class="max-w-full text-black" title="Quality Assurance">
                                Along with a strong commitment to safety, American Demolition is equally dedicated to providing unsurpassed project quality and service, not only in the field, but behind the scenes as well. Every American Demolition employee is focused on your needs at all times, managing the process, quickly addressing your specific concerns and requests, watching your project’s bottom line and doing whatever it takes to successfully complete your project to your highest expectations of performance and excellence.
                            </CoolBox>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </Layout>
</template>
