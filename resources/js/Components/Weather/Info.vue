<script setup>
import VueFeather from "vue-feather";

defineProps(['weatherInfo'])
</script>

<template>
    <div class="weather-info">
        <div class="weather-item" title="Wind">
            <vue-feather type="wind"></vue-feather>
            <span class="value">{{weatherInfo.wind}}</span>
        </div>
        <div class="weather-item" title="Humidity">
            <vue-feather type="droplet"></vue-feather>
            <span class="value">%{{weatherInfo.humidity}}</span>
        </div>
        <div class="weather-item" title="Cloud">
            <vue-feather type="cloud"></vue-feather>
            <span class="value">%{{weatherInfo.clouds}}</span>
        </div>
    </div>
</template>

<style lang="less" scoped>
.weather-info {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 2px solid fade(black, 10);
    padding-top: 20px;
    .weather-item {
        display: flex;
        align-items: center;
        color: var(--darkColor);
        .value {
            margin-left: 5px;
            font-weight: 500;
        }
    }
}
</style>
