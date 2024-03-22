<script setup lang="ts">
import CoolBox from "../../../Components/CoolBox.vue";
import Layout from "../../../Layouts/Layout.vue";
import { Head } from '@inertiajs/vue3'
import recycling from "./../../../../assets/recovery.jpg";
import industrial from "./../../../../assets/industrial.jpg";

</script>
<template>
    <Layout>
        <Head>
            <title>Industrial / Environmental Services</title>
        </Head>
        <main class="y items-center grow">
            <div class="y relative items-center w-full p-8 bg-cover bg-bottom" :style="`background-image:url(${recycling});`">
                <div class="absolute inset-0 bg-black/60"></div>
                <div class="z-10 y space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                    <div class="text-white y font-bold font-mono text-4xl md:text-6xl">
                        <span>INDUSTRIAL / ENVIRONMENTAL</span>
                        <span>SERVICES</span>
                    </div>
                    <CoolBox class="max-w-full" title="Material Recycling">
                        American Demolition Corporation offers a sustainable approach to structural demolition that best serves our clients and the environment. By processing and recycling reusable materials onsite, such as concrete, asphalt and stone, American Demolition can supply building aggregate, road base or fill material for new construction. This eco-friendly solution reduces client costs for removing waste and acquiring new materials while minimizing a project’s environmental impact.
                        <br/>
                        <br/>
                        Through American Demolition’s asset recovery services, clients can recoup demolition expenses by salvaging and reselling building contents and scrap that would normally be disposed of in landfills. American Demolition’s LEED-certified personnel can ensure your project will accrue the maximum points to help achieve your specific goals.
                    </CoolBox>
                    <CoolBox class="max-w-full" title="Industrial Services">
                        For projects where selective dismantling of contents must be performed in a live, active operation, American Demolition’s crew works seamlessly with clients’ production schedules to minimize any disruptions to daily activities. In cases where industrial projects involve environmental management of toxic or dangerous substances, we follow the strictest methods and guidelines to stabilize and dispose of contaminated waste. American Demolition’s industrial services have enabled clients to recover reusable floor space, remove unwanted or unneeded equipment, improve the safety and health conditions of their facilities, modernize their entire operations and convert an outdated facility into a viable site once again.
                    </CoolBox>
                </div>
            </div>
            <div class="y relative items-center w-full p-8 bg-cover bg-bottom" :style="`background-image:url(${industrial});`">
                <div class="absolute inset-0 bg-black/75"></div>
                <div class="text-white z-10 y space-y-8 w-full lg:max-w-5xl xl:max-w-6xl">
                    <div class="px-8">
                        <h2 class="font-bold text-3xl">Recovery Services</h2>
                        <p>American Demolition is your one source for environmental project management at your demolition site. Our trained staff can safely contain, abate and rehabilitate the site to meet all environmental and municipal regulations for redevelopment. We manage such toxic substances as:</p>
                        <ul class="space-y-2 list-inside list-[square] text-lg">
                            <li>Asbestos-containing materials</li>
                            <li>Petroleum products</li>
                            <li>Lead, mercury and PCBs</li>
                            <li>Contaminated soils</li>
                            <li>Underground storage-tank content,
                                acids, chlorinated products and
                                other industrial solvents</li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </Layout>
</template>
