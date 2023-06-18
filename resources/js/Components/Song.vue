<script setup>
import { defineProps } from 'vue';

defineProps({
    song: Object
});
</script>

<template>
    <h1>{{ song.title }}</h1>
</template>
