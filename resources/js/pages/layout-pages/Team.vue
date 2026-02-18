<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { ChevronRight } from 'lucide-vue-next';

const team = [
    {
        name: 'Chet White',
        title: 'Chairman, CEO and Managing General Partner, 7Boson',
        details: 'MGP/PM Helios Alpha | MP Carat Ventures',
        image: '/assets/img/teams/p.jpeg',
        delay: 100,
    },
    {
        name: 'Ramesh Santhanam',
        title: 'CSO, CTO and Managing Partner, 7Boson',
        details: 'Strategic technology lead and platform architect.',
        image: '/assets/img/teams/p.jpeg',
        delay: 200,
    },
    {
        name: 'Chris Jarrous',
        title: 'Chief Investment Officer and Managing Partner, 7Boson',
        details: 'Capital orchestration and global investment strategy.',
        image: '/assets/img/teams/p.jpeg',
        delay: 300,
    },
    {
        name: 'Dr. Aniruddh Ramesh, Ph.D',
        title: 'Director of Technology & Deputy CTO, 7Boson',
        details: 'Advanced R&D and frontier AI engineering leadership.',
        image: '/assets/img/teams/p.jpeg',
        delay: 400,
    },
];
</script>

<template>
    <Head title="Team" />
    <div class="overflow-hidden bg-white">
        <section class="bg-slate-950 pt-32 pb-16">
            <div class="relative z-10 container mx-auto px-6 pt-5 text-center">
                <div class="mx-auto max-w-4xl" data-aos="fade-down">
                    <h2
                        class="mb-4 text-sm font-bold tracking-[0.3em] text-brand-green uppercase"
                    >
                        Leadership
                    </h2>
                    <h1
                        class="mb-6 text-5xl font-extrabold tracking-tight text-white"
                    >
                        Our Team
                    </h1>
                    <h5
                        class="mb-8 text-lg font-bold tracking-wide text-brand-l-green uppercase"
                    >
                        Over a Century of Collective Investment & Technology
                        Leadership
                    </h5>
                    <p
                        class="mx-auto max-w-3xl border-t border-white/10 pt-5 text-lg leading-relaxed text-slate-300"
                    >
                        Our Managing Team has been shaped at the world’s most
                        prestigious investment firms, global corporations, and
                        frontier technology ventures.
                    </p>
                </div>
            </div>
        </section>

        <section class="bg-slate-50 py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
                    <div
                        v-for="member in team"
                        :key="member.name"
                        class="group relative grid items-center overflow-hidden rounded-3xl border border-slate-100 bg-white p-6 shadow-sm transition-all duration-500 hover:shadow-xl sm:flex"
                        data-aos="fade-up"
                        :data-aos-delay="member.delay"
                    >
                        <div
                            class="relative mx-auto mb-5 h-32 w-32 shrink-0 overflow-hidden rounded-2xl bg-slate-200 sm:mx-0 sm:mb-0 md:h-44 md:w-44"
                        >
                            <!-- <img
                                :src="member.image"
                                class="h-full w-full object-cover grayscale transition-all duration-700 group-hover:scale-110 group-hover:grayscale-0"
                            /> -->
                            <img
                                src="@/assets/ai.jpg"
                                class="h-full w-full object-cover transition-all duration-700 group-hover:scale-110"
                            />
                        </div>

                        <div class="grow text-center sm:ml-8 sm:text-start">
                            <h4
                                class="mb-1 text-2xl leading-tight font-black text-slate-900"
                            >
                                {{ member.name }}
                            </h4>

                            <div class="flex justify-center sm:justify-start">
                                <div
                                    class="mb-4 h-1 w-12 rounded-full bg-brand-green transition-all duration-500 group-hover:w-24"
                                ></div>
                            </div>

                            <div class="mb-4">
                                <span
                                    class="mb-1 block text-sm font-bold tracking-tighter text-brand-green uppercase"
                                >
                                    {{ member.title.split(',')[0] }}
                                </span>
                                <p
                                    class="text-xs leading-relaxed font-medium text-slate-500"
                                >
                                    {{ member.title }}
                                </p>
                            </div>

                            <div class="flex justify-end sm:justify-start">
                                <button
                                    class="flex items-center gap-2 text-[10px] font-black tracking-widest text-slate-400 uppercase transition-colors group-hover:text-slate-900"
                                >
                                    Read Full Bio
                                    <ChevronRight
                                        class="size-3 transition-transform group-hover:translate-x-1"
                                    />
                                </button>
                            </div>
                        </div>

                        <div
                            class="pointer-events-none absolute -right-4 -bottom-4 text-9xl font-black text-slate-50 opacity-[0.03] select-none"
                        >
                            {{ member.name.charAt(0) }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
