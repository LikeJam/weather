<script setup>
defineProps(['weather'])
</script>

<template>
    <div class="weather-main">
        <div class="weather-feels-like">
            Feels like
            <strong>
                {{weather.feelsLike | round}}
                <sup>&deg;</sup>
            </strong>
        </div>
        <div class="weather-temp">
            <div
                class="weather-icon"
                :style="{'background-image': 'url(' + weather.icon + ')'}"
            >
            </div>
            <span>
                {{weather.temperature | round}}
            </span>
            <sup>&deg;</sup>
        </div>
        <div class="weather-description">{{weather.description}}</div>
    </div>
</template>

<style lang="less" scoped>
    .weather-main {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 40px;
    }
    .weather-temp {
        position: relative;
        width: 150px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100%;
        box-shadow: 0 0 40px fade(black, 20);
        background-color: #fff;
        margin: 40px 0;
        span {
            font-size: 80px;
            font-weight: 800;
            letter-spacing: -2px;
            position: relative;
        }
        sup {
            position: relative;
            top: -21px;
            font-size: 40px;
        }
    }
    .weather-icon {
        position: absolute;
        top: -5px;
        left: -5px;
        width: 55px;
        height: 55px;
        background-repeat: no-repeat;
        background-size: 100%;
        filter: drop-shadow(1px 1px 0 fade(black, 3))
        drop-shadow(-3px -3px 0 fade(black, 8));
    }
    .weather-feels-like,
    .weather-description {
        font-size: 18px;
        color: var(--darkColor);
        text-transform: capitalize;
        sup {
            position: relative;
            top: 5px;
            left: -2px;
            font-size: 18px;
        }
    }
</style>
