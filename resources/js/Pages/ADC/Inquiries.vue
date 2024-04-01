<script setup>
import Layout from "../../Layouts/Layout.vue";
import Inquiry from "@/Components/Inquiry.vue";

const props = defineProps({
    inquiries: Object
})
</script>
<template>
    <Layout title="Inquiries">
        <div class="y space-y-2 p-8">
            <Inquiry v-for="inq in inquiries" :inq="inq"/>
        </div>
    </Layout>
</template>
