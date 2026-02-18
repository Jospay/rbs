<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { MapPin, Microscope, Network, Rocket } from 'lucide-vue-next';

const labs = [
    {
        name: 'Silicon Valley AI Lab',
        location: 'San Francisco, USA',
        focus: 'World model fine-tuning, agentic AI, AI Ops, optimization, and next-gen computing.',
        icon: Microscope,
        image: '/assets/img/ai.jpg',
        delay: 100,
    },
    {
        name: 'India Innovation Hub',
        location: 'Chennai, India',
        focus: 'IIT Madras anchored hub for applied AI, talent pipelines, and incubation.',
        icon: Rocket,
        image: '/assets/img/ai.jpg',
        delay: 200,
    },
    {
        name: 'Strategic Partnerships',
        location: 'Global Network',
        focus: 'Research centers, accelerators, and incubators for sovereign-aligned innovation.',
        icon: Network,
        image: '/assets/img/ai.jpg',
        delay: 300,
    },
];
</script>

<template>
    <Head title="Labs" />

    <div class="overflow-hidden">
        <section
            class="relative flex min-h-[60vh] items-center overflow-hidden bg-slate-950 bg-cover bg-center bg-no-repeat pt-40 pb-20"
            style="background-image: url('/src/assets/hero.jpeg')"
        >
            <div
                class="absolute inset-0 z-0 bg-linear-to-r from-slate-950 via-slate-950/85 to-transparent"
            ></div>

            <div class="relative z-10 container mx-auto px-6">
                <div
                    class="max-w-3xl"
                    data-aos="fade-right"
                    data-aos-delay="200"
                >
                    <h2
                        class="mb-8 text-5xl leading-[1.1] font-extrabold tracking-tight text-white"
                    >
                        Labs &
                        <span class="text-brand-green">Innovation</span>
                    </h2>

                    <div class="space-y-6">
                        <p
                            class="border-l-2 border-brand-green/30 pl-6 text-lg leading-relaxed text-slate-200"
                        >
                            Innovation is central to Seven Boson’s mission. Our
                            global labs and university alliances keep the
                            platform ahead of the curve and accelerate
                            commercialization.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-20">
            <div class="container mx-auto px-6">
                <div
                    class="mb-16 flex flex-col items-center text-center"
                    data-aos="fade-up"
                >
                    <span
                        class="mb-3 text-xs font-bold tracking-[0.3em] text-brand-green uppercase"
                        >Hubs</span
                    >
                    <h2 class="mb-4 text-4xl font-black text-slate-900">
                        Global Research Hubs
                    </h2>
                    <div class="h-1.5 w-12 rounded-full bg-brand-green"></div>
                </div>

                <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
                    <div
                        v-for="lab in labs"
                        :key="lab.name"
                        class="group relative"
                        data-aos="fade-up"
                        :data-aos-delay="lab.delay"
                    >
                        <div
                            class="relative mb-8 aspect-4/3 overflow-hidden rounded-2xl bg-slate-100 shadow-2xl"
                        >
                            <!-- <img
                                :src="lab.image"
                                class="h-full w-full object-cover grayscale transition-all duration-700 group-hover:scale-110 group-hover:grayscale-0"
                                :alt="lab.name"
                            /> -->

                            <img
                                src="@/assets/ai.jpg"
                                class="h-full w-full object-cover transition-all duration-700 group-hover:scale-110"
                            />
                            <div
                                class="absolute inset-0 bg-brand-green/10 mix-blend-overlay"
                            ></div>

                            <div
                                class="absolute top-4 left-4 flex items-center gap-2 rounded-lg bg-slate-950/80 px-3 py-1.5 text-[10px] font-bold tracking-tighter text-white uppercase backdrop-blur-md"
                            >
                                <MapPin class="size-3 text-brand-green" />
                                {{ lab.location }}
                            </div>
                        </div>

                        <div class="px-2">
                            <div class="mb-4 flex items-center gap-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-brand-green/10 text-brand-green"
                                >
                                    <component :is="lab.icon" class="size-5" />
                                </div>
                                <h3
                                    class="text-xl font-bold text-slate-900 transition-colors group-hover:text-brand-green"
                                >
                                    {{ lab.name }}
                                </h3>
                            </div>

                            <p
                                class="text-sm leading-relaxed text-slate-600 italic"
                            >
                                "{{ lab.focus }}"
                            </p>
                        </div>

                        <div
                            class="mt-6 h-px w-full bg-slate-100 transition-colors group-hover:bg-brand-green/30"
                        ></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
