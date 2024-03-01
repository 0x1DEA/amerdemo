<script setup>
import {useForm} from "@inertiajs/vue3";
import Layout from "@/Layouts/Layout.vue";

const form = useForm({
    name: '',
    slug: '',
    category: '',
    location: '',
    address: '',
    started_at: '',
    ended_at: '',
    content: '',
})

const submit = () => {
    form.post('/projects/new');
}
</script>
<template>
    <Layout>
        <div class="flex flex-col space-y-2 p-8">
            <h1 class="font-bold text-4xl">Create New Project</h1>
            <div class="flex flex-col space-y-2 rounded bg-pt-466 p-4 text-black">
                <label class="flex flex-col">
                    <span>Project Name</span>
                    <input class="rounded border-0 bg-pt-6197" type="text" v-model="form.name" placeholder="Example Project"/>
                </label>
                <label class="flex flex-col">
                    <span>Project URL</span>
                    <input class="rounded border-0 bg-pt-6197" type="text" v-model="form.slug" placeholder="example-project"/>
                </label>
                <label class="flex flex-col">
                    <span>Category</span>
                    <input class="rounded border-0 bg-pt-6197" type="text" v-model="form.category" placeholder="Nuclear"/>
                </label>
                <label class="flex flex-col">
                    <span>Location</span>
                    <input class="rounded border-0 bg-pt-6197" type="text" v-model="form.location" placeholder="Chicago, IL"/>
                </label>
                <label class="flex flex-col">
                    <span>Start Date</span>
                    <input class="rounded border-0 bg-pt-6197" type="date" v-model="form.started_at" placeholder="Chicago, IL"/>
                </label>
                <label class="flex flex-col">
                    <span>End Date (optional)</span>
                    <input class="rounded border-0 bg-pt-6197" type="date" v-model="form.ended_at" placeholder="Chicago, IL"/>
                </label>
                <span>Project Description</span>
                <textarea class="border-0 rounded-md bg-pt-6197" v-model="form.content" placeholder="project description"/>
                <button class="px-2 py-1 rounded bg-pt-6200" @click="submit">Submit</button>
            </div>
        </div>
    </Layout>
</template>
