<script setup lang="ts">
import NavBar from "../Components/NavBar.vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
</script>
<template>
    <div class="y overflow-hidden min-h-screen max-w-screen bg-neutral-900">
        <Header/>
        <NavBar/>
        <slot/>
        <Footer/>
    </div>
</template>
<style scoped>
.blockgrid {
    background-image: linear-gradient(to right, #171717 70%, transparent 70%), linear-gradient(to bottom, grey 30%, #171717 30%);
    background-size: 20px 20px;
    background-position: -5px -10px;
}
</style>
