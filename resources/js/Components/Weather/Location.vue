<script setup>
import {VSelect} from "vuetify/components";
import {ref} from "vue";

const select = ref("Tashkent")
</script>
<template>
    <div class="weather-location">
        <v-select
            :items="['Tashkent']"
            v-model="select"
            variant="solo"
            density="compact"
            single-line
        >
        </v-select>
    </div>
</template>

<style scoped>

</style>
