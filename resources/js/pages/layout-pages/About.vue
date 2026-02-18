<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

const hubs = [
    {
        title: 'Silicon Valley AI Lab',
        location: 'San Francisco, USA',
        image: '/assets/img/ai.jpg', // Replace with specific image if available
        delay: 100,
    },
    {
        title: 'India Innovation Hub',
        location: 'Chennai, India',
        image: '/assets/img/ai.jpg',
        delay: 200,
    },
    {
        title: 'Global Ecosystems',
        location: 'Singapore, Middle East & Beyond',
        image: '/assets/img/ai.jpg',
        delay: 300,
    },
];
</script>

<template>
    <Head title="About" />

    <!-- header section -->
    <section
        class="relative flex items-center overflow-hidden bg-slate-950 bg-cover bg-center bg-no-repeat pt-38 pb-20"
    >
        <div class="relative z-10 container mx-auto px-6">
            <div class="max-w-3xl" data-aos="fade-right" data-aos-delay="200">
                <h2
                    class="mb-8 text-5xl leading-[1.1] font-extrabold tracking-tight text-white"
                >
                    About
                    <span class="text-brand-green">Rekhi Bisheri Salunga</span>
                </h2>

                <div class="space-y-6">
                    <p
                        class="border-l-2 border-brand-green/30 pl-6 text-lg leading-relaxed text-slate-200"
                    >
                        Rekhi Bisheri Salunga is a sovereign AI automated
                        decision intelligence platform optimized with clean-
                        energy for nations and enterprises that demand full
                        ownership, independence, and security. We enable
                        countries to deploy and operate their own AI clouds and
                        power systems—privately, securely, and under complete
                        national control.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="absolute right-0 bottom-0 h-32 w-32 bg-linear-to-br from-transparent to-brand-green/10 blur-3xl"
        ></div>
    </section>

    <!-- mission section -->
    <section class="relative overflow-hidden bg-slate-50 py-20">
        <div
            class="absolute -top-20 -right-20 h-96 w-96 rounded-full bg-brand-green/5 blur-3xl"
        ></div>

        <div class="relative z-10 container mx-auto px-6">
            <div class="mx-auto max-w-5xl text-center" data-aos="fade-up">
                <span
                    class="mb-6 block text-xs font-bold tracking-[0.4em] text-brand-green uppercase"
                    >Our Purpose</span
                >

                <h2
                    class="mb-10 text-4xl font-black tracking-tight text-slate-900"
                >
                    Our Mission
                </h2>

                <div class="relative">
                    <span
                        class="absolute -top-10 left-1/2 -translate-x-1/2 font-serif text-8xl leading-none text-brand-green/10"
                        >“</span
                    >

                    <p
                        class="text-2xl leading-[1.35] font-semibold tracking-tight text-slate-700 italic md:text-[34px]"
                    >
                        To deliver true technology sovereignty: AI
                        infrastructure a nation
                        <span class="text-brand-green"
                            >owns, controls, and trusts</span
                        >
                        to power its most important decisions—supported by
                        clean, resilient energy at scale.
                    </p>
                </div>

                <div
                    class="mx-auto mt-12 h-1.5 w-16 rounded-full bg-brand-green"
                ></div>
            </div>
        </div>
    </section>

    <!-- Global Presence section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <div
                class="mb-16 flex flex-col items-center text-center"
                data-aos="fade-up"
            >
                <h2 class="mb-4 text-4xl font-extrabold text-slate-900">
                    Global Presence
                </h2>
                <div class="h-1 w-12 bg-brand-green"></div>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div
                    v-for="hub in hubs"
                    :key="hub.title"
                    class="group relative aspect-square overflow-hidden rounded-2xl bg-slate-900 shadow-lg transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up"
                    :data-aos-delay="hub.delay"
                >
                    <!-- <img
                        :src="hub.image"
                        class="absolute inset-0 h-full w-full object-cover opacity-60 transition-transform duration-700 group-hover:scale-110 group-hover:opacity-40"
                        :alt="hub.title"
                    /> -->

                    <img
                        src="@/assets/ai.jpg"
                        class="absolute inset-0 h-full w-full object-cover opacity-60 transition-transform duration-700 group-hover:scale-110 group-hover:opacity-40"
                    />

                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/20 to-transparent"
                    ></div>

                    <div class="absolute inset-0 flex flex-col justify-end p-8">
                        <h3
                            class="mb-2 text-2xl font-bold text-white transition-colors group-hover:text-brand-l-green"
                        >
                            {{ hub.title }}
                        </h3>
                        <p
                            class="text-sm font-medium tracking-wide text-white/70 uppercase"
                        >
                            {{ hub.location }}
                        </p>
                    </div>

                    <div
                        class="absolute top-4 right-4 h-8 w-8 scale-50 border-t-2 border-r-2 border-brand-green opacity-0 transition-all duration-500 group-hover:scale-100 group-hover:opacity-100"
                    ></div>
                </div>
            </div>
        </div>
    </section>
</template>
