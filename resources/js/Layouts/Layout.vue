<script setup lang="ts">
import NavBar from "../Components/NavBar.vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";

import hero2 from "./../../assets/group.jpg";
</script>
<template>
    <div class="y relative overflow-hidden min-h-screen max-w-screen">
        <Header/>
        <NavBar/>
        <div class="y grow">
            <slot/>
        </div>
        <Footer/>
    </div>
</template>
<style>
.dotgrid {
    background-image: radial-gradient(#D7D9D2 1.1px, transparent 0);
    background-size: 17px 17px;
    background-position: -16px -20px;
}
</style>
