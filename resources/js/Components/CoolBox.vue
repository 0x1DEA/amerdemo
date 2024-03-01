<script setup lang="ts">
const props = defineProps({
  title: String
})
</script>
<template>
    <div class="text-white max-w-xl bg-black/50 p-4 w-fit">
        <h2 class="text-white text-4xl font-bold">{{ title }}</h2>
        <p class="text-xl mt-2"><slot/></p>
    </div>
</template>
