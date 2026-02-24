<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Cpu, HeartPulse, Zap, Bot, ShieldCheck } from 'lucide-vue-next';

import agentic from '@/assets/agentic-ai.jpg';
import energy from '@/assets/energy-compute.jpg';
import healthcare from '@/assets/healthcare-medtech.jpg';
import resilient from '@/assets/resilient-infrastructure.jpg';
import robotics from '@/assets/robotics-physical.jpg';

const domains = [
    {
        name: 'Agentic AI Decision Intelligence',
        desc: 'Control systems and autonomous reasoning layers for sovereign governance.',
        icon: Cpu,
        image: agentic,
        delay: 100,
    },
    {
        name: 'Healthcare & MedTech',
        desc: 'Infrastructure enabling privacy-first medical diagnostics and data sovereignty.',
        icon: HeartPulse,
        image: healthcare,
        delay: 200,
    },
    {
        name: 'Energy & Compute',
        desc: 'Sustainable power systems and specialized hardware for national AI scaling.',
        icon: Zap,
        image: energy,
        delay: 300,
    },
    {
        name: 'Robotics & Physical AI',
        desc: 'The intersection of sovereign software and resilient automated hardware.',
        icon: Bot,
        image: robotics,
        delay: 400,
    },
    {
        name: 'Resilient Infrastructure',
        desc: 'Communications and network security for high-availability national operations.',
        icon: ShieldCheck,
        image: resilient,
        delay: 500,
    },
];
</script>

<template>
    <Head title="Investors" />
    <div class="overflow-hidden">
        <section
            class="relative flex items-center overflow-hidden bg-slate-950 bg-cover bg-center bg-no-repeat pt-40 pb-24"
        >
            <div
                class="absolute inset-0 z-0 bg-linear-to-r from-slate-950 via-slate-950/80 to-transparent"
            ></div>

            <div class="relative z-10 container mx-auto px-6">
                <div
                    class="max-w-4xl"
                    data-aos="fade-right"
                    data-aos-delay="200"
                >
                    <h2
                        class="mb-8 text-5xl leading-[1.1] font-extrabold tracking-tight text-white"
                    >
                        Investors &
                        <span class="text-brand-green">Portfolio</span>
                    </h2>

                    <div class="space-y-6">
                        <p
                            class="border-l-2 border-brand-green/30 pl-6 text-lg leading-relaxed text-slate-200"
                        >
                            Rekhi Bisheri Salunga invests selectively in core
                            technologies, IP, and infrastructure required for
                            sovereign AI independence, prioritizing durability,
                            security, and long-duration value creation.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="absolute right-0 bottom-0 h-48 w-48 bg-brand-green/10 blur-3xl"
            ></div>
        </section>

        <section class="bg-slate-50 py-20">
            <div class="container mx-auto px-6">
                <div
                    class="mb-16 flex flex-col items-center text-center"
                    data-aos="fade-up"
                >
                    <h2
                        class="text-4xl font-black tracking-tight text-slate-900"
                    >
                        Priority Investment Domains
                    </h2>
                    <div
                        class="mt-4 h-1.5 w-16 rounded-full bg-brand-green"
                    ></div>
                </div>

                <div
                    class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3"
                >
                    <div
                        v-for="domain in domains"
                        :key="domain.name"
                        class="group relative flex flex-col overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-500 hover:shadow-2xl"
                        data-aos="fade-up"
                        :data-aos-delay="domain.delay"
                    >
                        <div
                            class="absolute top-0 left-0 h-1.5 w-0 bg-brand-green transition-all duration-500 group-hover:w-full"
                        ></div>

                        <div class="relative aspect-video overflow-hidden">
                            <img
                                :src="domain.image"
                                :alt="domain.name"
                                class="h-full w-full object-cover transition-all duration-1000 group-hover:scale-110"
                            />
                            <div
                                class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent opacity-60"
                            ></div>
                        </div>

                        <div class="flex grow flex-col p-8">
                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-slate-900 text-brand-green transition-colors group-hover:bg-brand-green group-hover:text-white"
                            >
                                <component :is="domain.icon" class="size-6" />
                            </div>

                            <h3
                                class="mb-3 text-xl leading-snug font-bold text-slate-900"
                            >
                                {{ domain.name }}
                            </h3>

                            <p
                                class="text-sm leading-relaxed text-slate-500 italic"
                            >
                                {{ domain.desc }}
                            </p>
                        </div>

                        <div
                            class="absolute right-6 bottom-4 text-[10px] font-bold tracking-widest text-slate-300 uppercase transition-colors group-hover:text-brand-green"
                        >
                            Strategic Asset
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
