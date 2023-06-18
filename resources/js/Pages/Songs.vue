<script setup>
import { defineProps } from 'vue';
import Song from '@/Components/Song.vue';

defineProps({
    songs: Array
});
</script>

<template>
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between">
            <div class="w-24">Title</div>
            <div class="w-24">Year</div>
            <div class="w-24">Producer</div>
        </div>

        <Song v-for="song in songs"  :song="song" />
    </div>

</template>
