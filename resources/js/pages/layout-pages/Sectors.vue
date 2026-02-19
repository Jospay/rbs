<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import {
    Stethoscope,
    ShieldAlert,
    Truck,
    Satellite,
    Zap,
    GraduationCap,
} from 'lucide-vue-next';

import communication from '@/assets/communication.jpg';
import defense from '@/assets/defense.jpg';
import edcation from '@/assets/edcation-research.jpg';
import energy from '@/assets/energy.jpg';
import healthcare from '@/assets/healthcare.jpg';
import transportation from '@/assets/transportation.jpg';

const sectors = [
    {
        name: 'Healthcare',
        desc: 'Privacy-secured health data environments enabling diagnostics and multi-omics decision intelligence under local governance.',
        icon: Stethoscope,
        image: healthcare,
        delay: 100,
    },
    {
        name: 'Defense',
        desc: 'Sovereign intelligence, surveillance, and operational decision support with rigorous security and oversight.',
        icon: ShieldAlert,
        image: defense,
        delay: 200,
    },
    {
        name: 'Transportation',
        desc: 'Smart mobility, logistics automation, and autonomous coordination with sovereign data residency.',
        icon: Truck,
        image: transportation,
        delay: 300,
    },
    {
        name: 'Communications',
        desc: 'Network optimization, anomaly detection, and resilient telecom operations with cyber defense.',
        icon: Satellite,
        image: communication,
        delay: 400,
    },
    {
        name: 'Energy',
        desc: 'Grid balancing, renewable integration, and predictive maintenance to power national AI growth.',
        icon: Zap,
        image: energy,
        delay: 500,
    },
    {
        name: 'Education & Research',
        desc: 'Secure research compute and talent pipelines for universities and national labs.',
        icon: GraduationCap,
        image: edcation,
        delay: 600,
    },
];
</script>

<template>
    <Head title="Sectors" />
    <div class="overflow-hidden">
        <section
            class="relative flex min-h-[60vh] items-center overflow-hidden bg-slate-950 bg-cover bg-center bg-no-repeat pt-40 pb-20"
        >
            <div
                class="bg-liner-to-r absolute inset-0 z-0 from-slate-950 via-slate-950/80 to-transparent"
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
                        National
                        <span class="text-brand-green">Critical Sectors</span>
                    </h2>

                    <div class="space-y-6">
                        <p
                            class="border-l-2 border-brand-green/30 pl-6 text-lg leading-relaxed text-slate-200"
                        >
                            Rekhi Bisheri Salunga’s sovereign platform is
                            applied across critical national sectors. We tailor
                            systems to local data, policy constraints, and
                            mission goals while preserving sovereign control.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-50 py-20">
            <div class="container mx-auto px-6">
                <div
                    class="mb-16 flex flex-col items-center text-center"
                    data-aos="fade-up"
                >
                    <span
                        class="mb-3 text-xs font-bold tracking-[0.3em] text-brand-green uppercase"
                        >Applications</span
                    >
                    <h2 class="mb-4 text-4xl font-black text-slate-900">
                        Sector Applications
                    </h2>
                    <div class="h-1.5 w-12 rounded-full bg-brand-green"></div>
                </div>

                <div
                    class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3"
                >
                    <div
                        v-for="sector in sectors"
                        :key="sector.name"
                        class="group relative h-[400px] overflow-hidden rounded-3xl bg-slate-900 shadow-xl transition-all duration-500 hover:-translate-y-2"
                        data-aos="fade-up"
                        :data-aos-delay="sector.delay"
                    >
                        <img
                            :src="sector.image"
                            class="absolute inset-0 h-full w-full object-cover opacity-40 transition-transform duration-700 group-hover:scale-110 group-hover:opacity-30"
                            :alt="sector.name"
                        />

                        <div
                            class="absolute inset-0 flex flex-col justify-end p-8"
                        >
                            <div
                                class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl border border-white/20 bg-white/10 text-brand-l-green shadow-xl backdrop-blur-md transition-all duration-300 group-hover:bg-brand-green group-hover:text-white"
                            >
                                <component :is="sector.icon" class="size-7" />
                            </div>

                            <h3
                                class="mb-4 text-2xl font-bold tracking-tight text-white"
                            >
                                {{ sector.name }}
                            </h3>

                            <p
                                class="text-sm leading-relaxed text-slate-300 transition-colors duration-300 group-hover:text-white"
                            >
                                {{ sector.desc }}
                            </p>
                        </div>

                        <div
                            class="absolute top-6 right-6 opacity-0 transition-opacity duration-500 group-hover:opacity-100"
                        >
                            <div class="flex items-center gap-2">
                                <span
                                    class="text-[10px] font-bold tracking-widest text-brand-l-green text-white/50 uppercase"
                                    >Active Deployment</span
                                >
                                <div
                                    class="size-2 animate-pulse rounded-full bg-brand-green"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
