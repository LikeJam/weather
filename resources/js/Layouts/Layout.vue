<script setup>
</script>

<template>
    <main>
        <header>
        </header>
        <div class="content">
            <slot />
        </div>
        <footer>
        </footer>
    </main>
</template>

<style scoped>
.content {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family: "Poppins", sans-serif;
}
</style>
