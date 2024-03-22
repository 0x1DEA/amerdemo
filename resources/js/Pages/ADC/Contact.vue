<script setup lang="ts">
import CoolBox from "./../../Components/CoolBox.vue";
import hero2 from "./../../../assets/meeting.jpg";
import Layout from "../../Layouts/Layout.vue";
import { Head, useForm } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    phone: '',
    email: '',
    message: '',
})

const submit = () => {
    form.post('/contact/send')
}
</script>
<template>
    <Layout>
        <Head>
            <title>Contact Us</title>
        </Head>
        <main class="y items-center grow bg-cover bg-center" :style="`background-image: url(${ hero2 });`">
            <div class="y w-full bg-black/50 grow justify-center items-center">
                <div class="relative x items-center w-full lg:max-w-5xl xl:max-w-6xl justify-between space-x-2 !mb-4">
                    <form @submit.prevent="submit" class="y relative w-1/2 space-y-2 p-4 bg-black/50 w-full lg:max-w-5xl xl:max-w-6xl">
                        <h2 class="font-bold text-4xl text-white">Contact Us</h2>
                        <div :class="{'invisible': !form.wasSuccessful}" class="x items-center justify-center absolute inset-0 text-green-400">
                            <span class="rounded bg-black/50 px-2 py-1">Your Inquiry Has Been Submitted!</span>
                        </div>
                        <div :class="{'invisible': form.wasSuccessful}" class="y space-y-2">
                            <label class="y">
                                <span class="text-white">Name*</span>
                                <input v-model="form.name" type="text" class="bg-white/50"/>
                            </label>
                            <label class="y">
                                <span class="text-white">Phone*</span>
                                <input v-model="form.phone" type="tel" class="bg-white/50"/>
                            </label>
                            <label class="y">
                                <span class="text-white">Email*</span>
                                <input v-model="form.email" type="email" class="bg-white/50"/>
                            </label>
                            <label class="y">
                                <span class="text-white">Message*</span>
                                <textarea v-model="form.message" class="bg-white/50"/>
                            </label>
                            <input type="submit" class="rounded cursor-pointer bg-pt-3517 text-pt-6197 w-fit font-bold px-2 py-1" value="Submit">
                        </div>
                    </form>
                    <div class="y">
                        <h2 class="font-bold text-white text-3xl">American Demolition Corporation</h2>
                        <ul class="space-y-2 font-mono list-inside list-[square] text-lg">
                            <li class="w-full bg-black text-white px-2">480 Randy Rd. Carol Stream, IL 60188</li>
                            <li class="w-full bg-black text-white px-2">Phone: 847-608-0010</li>
                            <li class="w-full bg-black text-white px-2">Fax: 847-608-0060</li>
                            <li class="w-full bg-black text-white px-2">Email: info@amerdemo.com</li>
                        </ul>
                    </div>
                </div>
                <CoolBox class="w-full lg:max-w-5xl xl:max-w-6xl" title="">
                    Thank you for your interest in American Demolition Corporation. Headquartered in Carol Stream, Illinois – just 30 minutes from downtown Chicago – American Demolition provides complete demolition services to clients throughout the Midwest and nationwide. If you have any questions, need more information or would like to discuss an upcoming project, please contact us, and a representative will promptly respond to your request or inquiry.
                </CoolBox>
            </div>
        </main>
    </Layout>
</template>
