<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import {
    CheckCircle2,
    Coins,
    BarChart3,
    ShieldCheck,
    TrendingUp,
    FileText,
} from 'lucide-vue-next';

const orchestrationPoints = [
    {
        title: 'Blended capital stacks',
        desc: 'Equity, public grants, private finance, public debt, and private debt orchestration.',
        icon: Coins,
    },
    {
        title: 'Long-term operating contracts',
        desc: 'Stabilizing economics and reducing delivery risk through robust infrastructure-grade modeling.',
        icon: ShieldCheck,
    },
    {
        title: 'Lifecycle service integration',
        desc: 'Ensuring predictable outcomes and governance through integrated platform oversight.',
        icon: FileText,
    },
];

const financeOptions = [
    {
        title: 'Equity Solutions',
        desc: 'Strategic investors, sovereign funds, and PE/Infrastructure funds alignment.',
        icon: TrendingUp,
    },
    {
        title: 'Public Grants',
        desc: 'Coordination with strategic national programs and developmental funding.',
        icon: BarChart3,
    },
    {
        title: 'Debt Structures',
        desc: 'Project finance, bonds, and credit facilities tailored to national constraints.',
        icon: CheckCircle2,
    },
];
</script>

<template>
    <Head title="Capital" />
    <div class="overflow-hidden bg-white">
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
                        Capital &
                        <span class="text-brand-green">Financial Division</span>
                    </h2>

                    <div class="space-y-6">
                        <p
                            class="border-l-2 border-brand-green/30 pl-6 text-lg leading-relaxed text-slate-200"
                        >
                            Rekhi Bisheri Salunga provides turnkey financing for
                            sovereign AI clouds and data center
                            infrastructure—built around infrastructure-grade
                            economics and long-term operating models.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="absolute right-0 bottom-0 h-48 w-48 bg-brand-green/10 blur-3xl"
            ></div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="flex flex-col items-center gap-16 lg:flex-row">
                    <div class="lg:w-1/2" data-aos="fade-up">
                        <h3
                            class="mb-8 text-3xl font-black tracking-tight text-slate-900 uppercase"
                        >
                            Sovereign Finance & <br />
                            <span class="text-brand-green"
                                >Capital Orchestration</span
                            >
                        </h3>
                        <div class="space-y-8">
                            <div
                                v-for="item in orchestrationPoints"
                                :key="item.title"
                                class="group flex gap-6"
                            >
                                <div class="shrink-0">
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900 text-brand-green shadow-lg transition-colors duration-300 group-hover:bg-brand-green group-hover:text-white"
                                    >
                                        <component
                                            :is="item.icon"
                                            class="size-6"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <h5
                                        class="mb-1 text-lg font-bold text-slate-900"
                                    >
                                        {{ item.title }}
                                    </h5>
                                    <p
                                        class="text-sm leading-relaxed text-slate-600"
                                    >
                                        {{ item.desc }}
                                    </p>
                                    <div
                                        class="mt-4 h-1 w-8 rounded-full bg-brand-green/20 transition-all duration-500 group-hover:w-16 group-hover:bg-brand-green"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2" data-aos="fade-left">
                        <div
                            class="relative aspect-video overflow-hidden rounded-3xl bg-slate-200 shadow-2xl"
                        >
                            <img
                                src="@/assets/sovereign-fuinance.jpg"
                                alt="Financing Options"
                                class="h-full w-full object-cover transition-all duration-1000 hover:scale-105"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-50 py-20">
            <div class="container mx-auto px-6">
                <div
                    class="flex flex-col-reverse items-center gap-16 lg:flex-row"
                >
                    <div class="lg:w-1/2" data-aos="fade-right">
                        <div
                            class="relative aspect-video overflow-hidden rounded-3xl bg-slate-200 shadow-2xl"
                        >
                            <img
                                src="@/assets/financing-option.jpg"
                                alt="Financing Options"
                                class="h-full w-full object-cover transition-all duration-1000 hover:scale-105"
                            />
                        </div>
                    </div>
                    <div class="lg:w-1/2" data-aos="fade-up">
                        <h3
                            class="mb-8 text-3xl font-black tracking-tight text-slate-900 uppercase"
                        >
                            Financing
                            <span class="text-brand-green">Options</span>
                        </h3>
                        <div class="grid grid-cols-1 gap-6">
                            <div
                                v-for="option in financeOptions"
                                :key="option.title"
                                class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm transition-shadow hover:shadow-md"
                            >
                                <div class="flex items-start gap-4">
                                    <component
                                        :is="option.icon"
                                        class="mt-1 size-6 text-brand-green"
                                    />
                                    <div>
                                        <h5 class="font-bold text-slate-900">
                                            {{ option.title }}
                                        </h5>
                                        <p class="mt-2 text-sm text-slate-500">
                                            {{ option.desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
