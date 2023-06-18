<script setup>
import { defineProps } from 'vue';
import Song from '@/Components/Song.vue';

defineProps({
    songs: Array
});
</script>

<template>
    <Song v-for="song in songs"  :song="song" />
</template>
