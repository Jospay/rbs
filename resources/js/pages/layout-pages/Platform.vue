<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import {
    ShieldCheck,
    Cpu,
    Leaf,
    Fingerprint,
    Clock,
    Scale,
    Lock,
    Zap,
    Activity,
} from 'lucide-vue-next';

const platformFeatures = [
    {
        title: 'AI Ops & Multimodal AI Cloud',
        desc: 'Real-time operations, orchestration, optimization, and resilience.',
        icon: Activity,
    },
    {
        title: 'Automated Agentic AI Decision Intelligence',
        desc: 'Domain-tuned agent workflows for mission-critical decisions under policy oversight.',
        icon: Cpu,
    },
    {
        title: 'Cybersecurity & Ethical AI Governance',
        desc: 'Security-by-design with auditability and human-in-the-loop controls.',
        icon: ShieldCheck,
    },
    {
        title: 'Green Power & Compute Infrastructure',
        desc: 'AI-optimized data centers powered by sustainable energy (solar, storage, and other renewables).',
        icon: Leaf,
    },
];

const sovereigntyPillars = [
    {
        title: 'Control',
        desc: 'National ownership and policy authority',
        icon: Lock,
    },
    {
        title: 'Longevity',
        desc: 'Systems designed for long-term operation and upgradeability',
        icon: Clock,
    },
    {
        title: 'Alignment',
        desc: 'Capital and incentives aligned with public objectives',
        icon: Scale,
    },
    {
        title: 'Governance',
        desc: 'Security, reliability, and adaptability over time',
        icon: Fingerprint,
    },
    {
        title: 'Technology',
        desc: 'Agentic decision intelligence as a strategic national capability',
        icon: Cpu,
    },
    {
        title: 'Energy',
        desc: 'National energy strategy that scales with AI demand',
        icon: Zap,
    },
];
</script>

<template>
    <Head title="Platform" />
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
                        The
                        <span class="text-brand-green">Sovereign Platform</span>
                    </h2>

                    <div class="space-y-6">
                        <p
                            class="border-l-2 border-brand-green/30 pl-6 text-lg leading-relaxed text-slate-200"
                        >
                            Rekhi Bisheri Salunga delivers sovereign AI
                            automated decision intelligence platforms and
                            optimized clean- energy infrastructure for nations
                            and enterprises that demand full ownership,
                            independence, and security. Our platform integrates
                            automated agentic AI decision intelligence,
                            orchestration, governance, cybersecurity, advanced
                            data centers, and dedicated renewable energy,
                            delivered under complete national control.
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
                <div class="flex flex-col items-center gap-16 lg:flex-row">
                    <div class="w-full lg:w-1/2" data-aos="fade-up">
                        <div class="mb-10">
                            <span
                                class="mb-3 block text-xs font-bold tracking-widest text-brand-green uppercase"
                                >Full Stack Intelligence</span
                            >
                            <h3 class="mb-6 text-4xl font-black text-slate-900">
                                Platform Overview
                            </h3>
                            <div
                                class="h-1.5 w-12 rounded-full bg-brand-green"
                            ></div>
                        </div>

                        <div class="grid gap-8">
                            <div
                                v-for="item in platformFeatures"
                                :key="item.title"
                                class="group flex gap-5"
                            >
                                <div
                                    class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl border border-slate-200 bg-white text-brand-green shadow-sm transition-all group-hover:bg-brand-green group-hover:text-white"
                                >
                                    <component :is="item.icon" class="size-6" />
                                </div>
                                <div>
                                    <h5
                                        class="mb-1 text-lg font-bold text-slate-800"
                                    >
                                        {{ item.title }}
                                    </h5>
                                    <p class="leading-relaxed text-slate-600">
                                        {{ item.desc }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-full lg:w-1/2" data-aos="fade-left">
                        <div
                            class="absolute inset-0 -rotate-3 rounded-3xl bg-brand-green/5"
                        ></div>
                        <div
                            class="relative aspect-video overflow-hidden rounded-3xl border-4 border-white bg-slate-200 shadow-2xl"
                        >
                            <img
                                src="@/assets/platform-overview.jpg"
                                alt="Platform Intelligence"
                                class="h-full w-full object-cover opacity-90 mix-blend-multiply"
                            />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-20">
            <div class="container mx-auto px-6">
                <div
                    class="flex flex-col items-center gap-16 lg:flex-row-reverse"
                >
                    <div class="w-full lg:w-1/2" data-aos="fade-up">
                        <div class="mb-10">
                            <span
                                class="mb-3 block text-xs font-bold tracking-widest text-brand-green uppercase"
                                >Foundational Pillars</span
                            >
                            <h3 class="mb-6 text-4xl font-black text-slate-900">
                                Designed for Sovereignty
                            </h3>
                            <div
                                class="h-1.5 w-12 rounded-full bg-brand-green"
                            ></div>
                        </div>

                        <div class="grid gap-x-8 gap-y-10 sm:grid-cols-2">
                            <div
                                v-for="pillar in sovereigntyPillars"
                                :key="pillar.title"
                                class="space-y-3"
                            >
                                <div class="flex items-center gap-3">
                                    <component
                                        :is="pillar.icon"
                                        class="size-5 text-brand-green"
                                    />
                                    <h5
                                        class="text-sm font-bold tracking-wide text-slate-800 uppercase"
                                    >
                                        {{ pillar.title }}
                                    </h5>
                                </div>
                                <p
                                    class="text-sm leading-relaxed text-slate-500"
                                >
                                    {{ pillar.desc }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2" data-aos="fade-right">
                        <div
                            class="relative h-125 overflow-hidden rounded-3xl shadow-2xl"
                        >
                            <img
                                src="@/assets/designed-sovereinty.jpg"
                                alt="Sovereignty Design"
                                class="h-full w-full object-cover"
                            />

                            <div
                                class="absolute top-8 left-8 rounded-xl border border-white/20 bg-white/90 p-4 shadow-xl backdrop-blur"
                            >
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-3 animate-pulse rounded-full bg-brand-green"
                                    ></div>
                                    <span
                                        class="text-xs font-bold tracking-tighter text-slate-800 uppercase"
                                        >Secure Governance Active</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
