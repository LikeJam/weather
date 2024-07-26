<script setup>
import Main from "../../Components/Weather/Main.vue";
import Info from "../../Components/Weather/Info.vue";
import Layout from "../../Layouts/Layout.vue";
import Location from "../../Components/Weather/Location.vue";

defineProps(['forecast'])
</script>

<template>
    <Layout>
        <div class="container">
            <Location />
            <Main :weather="forecast.weather"/>
            <Info :weatherInfo="forecast.weatherInfo"/>
        </div>
    </Layout>
</template>

<style scoped>
.container {
    max-width: 360px;
    width: 100%;
    padding: 40px;
    margin: 20px;
    border-radius: 20px;
    background-color: #f1f1f1;
}
</style>
