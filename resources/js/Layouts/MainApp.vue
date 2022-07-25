<template>
    <Navbar></Navbar>
    <main class="w-[90%] container mx-auto md:w-auto">
        <slot></slot>
    </main>
</template>

<script>
import Navbar from '@/Components/Navbar.vue'

export default {
    components: {
        Navbar
    }
}
</script>