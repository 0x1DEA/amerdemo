<script setup lang="ts">
const props = defineProps({
  title: String
})
</script>
<template>
    <div class="relative max-w-lg ml-4 md:ml-12 mt-8" style="filter: drop-shadow(-0.5rem 0 0 #3F4443) drop-shadow(-0.25rem 0 0 #798772);">
        <div class="hidden md:flex flex-col absolute -left-8 -top-8">
            <div class="py-8 bg-pt-6183"></div>
            <div class="border-[1rem] border-transparent border-r-pt-6183 border-t-pt-6183"></div>
        </div>
        <div class="x absolute -top-8 md:-left-4">
            <h2 class="font-bold text-xl pl-4 md:pl-0 pt-1 font-mono bg-pt-6183 uppercase">{{ props.title }}</h2>
            <div class="border-[1rem] border-transparent border-l-pt-6183 border-b-pt-6183"></div>
        </div>
        <p class="bg-pt-6183 px-4 py-2" style="clip-path: polygon(0 0,100% 0,100% calc(100% - 2.00rem),calc(100% - 2.00rem) 100%,0 100%);"><slot/></p>
    </div>
</template>
