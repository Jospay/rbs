<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Built from '@/components/landing/Built.vue';
import Delivery from '@/components/landing/Delivery.vue';
import Discuss from '@/components/landing/Discuss.vue';
import Government from '@/components/landing/Government.vue';
import Hero from '@/components/landing/Hero.vue';
import Services from '@/components/landing/Services.vue';
import Universities from '@/components/landing/Universities.vue';
import Works from '@/components/landing/Works.vue';
</script>

<template>
    <Head title="Home" />

    <!-- Hero Start -->
    <Hero />
    <!-- Hero End -->

    <!-- Built Start -->
    <Built />
    <!-- Built End -->

    <!-- Services Start -->
    <Services />
    <!-- Services End -->

    <!-- Delivery Start -->
    <Delivery />
    <!-- Delivery End -->

    <!-- Works Start -->
    <Works />
    <!-- Works End -->

    <!-- Government Start -->
    <Government />
    <!-- Government End -->

    <!-- Universities Start -->
    <Universities />
    <!-- Universities End -->

    <!-- Discuss Start -->
    <Discuss />
    <!-- Discuss End -->
</template>
