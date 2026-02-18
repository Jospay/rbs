<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Lock, GanttChartSquare, Globe, ServerCrash } from 'lucide-vue-next';

const securityPillars = [
    {
        title: 'Secure National AI Infrastructure',
        desc: 'Zero-trust, strong identity access management, encryption, continuous monitoring, and resilience-by-design.',
        image: '/assets/ai.jpg',
        delay: 100,
    },
    {
        title: 'Policy-Driven Oversight & Ethical AI',
        desc: 'Configurable guardrails, audit trails, transparency, and human-in-the-loop controls for responsible intelligence.',
        image: '/assets/ai.jpg',
        delay: 200,
    },
    {
        title: 'Global Regulatory Alignment',
        desc: 'Adaptable governance model across jurisdictions while preserving absolute sovereign accountability.',
        image: '/assets/ai.jpg',
        delay: 300,
    },
    {
        title: 'Cyber-Physical Protection',
        desc: 'Security across data centers, power systems, and OT interfaces with integrated incident playbooks.',
        image: '/assets/ai.jpg',
        delay: 400,
    },
];
</script>

<template>
    <Head title="Security" />

    <div class="overflow-hidden">
        <section
            class="relative flex min-h-[60vh] items-center overflow-hidden bg-slate-950 bg-cover bg-center bg-no-repeat pt-40 pb-20"
            style="background-image: url('/src/assets/hero.jpeg')"
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
                        Governance &
                        <span class="text-brand-green">Cybersecurity</span>
                    </h2>

                    <div class="space-y-6">
                        <p
                            class="border-l-2 border-brand-green/30 pl-6 text-lg leading-relaxed text-slate-200"
                        >
                            Sovereign AI requires robust governance and
                            cybersecurity. Seven Boson builds trust through
                            security-by-design, policy-driven oversight, and
                            cyber-physical protection across infrastructure and
                            operations.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="absolute top-1/2 right-10 hidden -translate-y-1/2 opacity-20 lg:block"
            >
                <div
                    class="relative flex h-64 w-64 items-center justify-center"
                >
                    <div
                        class="absolute h-full w-full animate-ping rounded-full border border-brand-green/40"
                    ></div>
                    <div
                        class="absolute h-2/3 w-2/3 animate-pulse rounded-full border border-brand-green/20"
                    ></div>
                    <Lock class="size-16 text-brand-green" />
                </div>
            </div>
        </section>

        <section class="bg-white py-24">
            <div class="container mx-auto px-6">
                <div
                    class="mb-16 flex flex-col items-center text-center"
                    data-aos="fade-up"
                >
                    <span
                        class="mb-3 text-xs font-bold tracking-[0.3em] text-brand-green uppercase"
                        >Security</span
                    >
                    <h2 class="mb-4 text-4xl font-black text-slate-900">
                        Core Security Pillars
                    </h2>
                    <div class="h-1.5 w-12 rounded-full bg-brand-green"></div>
                </div>

                <div
                    class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4"
                >
                    <div
                        v-for="pillar in securityPillars"
                        :key="pillar.title"
                        class="group relative overflow-hidden rounded-2xl bg-slate-900 shadow-xl transition-all duration-500 hover:-translate-y-2"
                        data-aos="fade-up"
                        :data-aos-delay="pillar.delay"
                    >
                        <div class="relative aspect-4/5">
                            <!-- <img
                                :src="pillar.image"
                                class="h-full w-full object-cover opacity-50 transition-transform duration-700 group-hover:scale-110"
                                :alt="pillar.title"
                            /> -->

                            <img
                                src="@/assets/ai.jpg"
                                class="h-full w-full object-cover opacity-50 transition-transform duration-700 group-hover:scale-110"
                            />
                            <div
                                class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-900/40 to-transparent"
                            ></div>
                        </div>

                        <div
                            class="absolute inset-0 flex flex-col justify-end p-6"
                        >
                            <div
                                class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg border border-brand-green/30 bg-brand-green/20 text-brand-l-green backdrop-blur-md transition-colors duration-300 group-hover:bg-brand-green group-hover:text-white"
                            >
                                <GanttChartSquare
                                    v-if="pillar.title.includes('Policy')"
                                    class="size-5"
                                />
                                <Globe
                                    v-else-if="pillar.title.includes('Global')"
                                    class="size-5"
                                />
                                <ServerCrash
                                    v-else-if="
                                        pillar.title.includes('Cyber-Physical')
                                    "
                                    class="size-5"
                                />
                                <Lock v-else class="size-5" />
                            </div>

                            <h3
                                class="mb-3 text-lg leading-tight font-bold text-white transition-colors group-hover:text-brand-l-green"
                            >
                                {{ pillar.title }}
                            </h3>

                            <p class="text-xs leading-relaxed text-white/60">
                                {{ pillar.desc }}
                            </p>
                        </div>

                        <div
                            class="absolute inset-x-0 bottom-0 h-1 origin-left scale-x-0 bg-brand-green transition-transform duration-500 group-hover:scale-x-100"
                        ></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
