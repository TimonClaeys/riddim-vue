<script setup>
import { defineProps } from 'vue';

defineProps({
    song: Object
});
</script>

<template>
    <div class="flex justify-between">
        <h1 class="w-24">{{ song.title }}</h1>
        <h1 class="w-24">{{ song.year }}</h1>
        <h1 class="w-24">{{ song.producer }}</h1>
    </div>

</template>
