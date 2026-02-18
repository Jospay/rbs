<script setup lang="ts">
import { Gavel, ShieldAlert, LineChart } from 'lucide-vue-next';

const leadershipFeatures = [
    {
        title: 'Sovereign governance authority and oversight',
        icon: Gavel,
        delay: 100,
    },
    {
        title: 'National security posture and resilience engineering',
        icon: ShieldAlert,
        delay: 200,
    },
    {
        title: 'Long-duration capability building aligned to public objectives',
        icon: LineChart,
        delay: 300,
    },
];
</script>

<template>
    <section class="overflow-hidden py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col-reverse items-center gap-16 lg:flex-row">
                <div
                    class="w-full lg:w-1/2"
                    data-aos="fade-right"
                    data-aos-delay="100"
                >
                    <div class="mb-10">
                        <span
                            class="mb-3 block text-xs font-bold tracking-widest text-brand-green uppercase"
                            >Executive Focus</span
                        >
                        <h3
                            class="mb-6 text-3xl leading-tight font-extrabold text-slate-900 md:text-4xl"
                        >
                            For Government and Enterprise Leadership:
                        </h3>
                        <div class="h-1 w-20 rounded-full bg-brand-green"></div>
                    </div>

                    <div class="space-y-4">
                        <div
                            v-for="item in leadershipFeatures"
                            :key="item.title"
                            class="group flex items-center gap-5 rounded-2xl border border-slate-100 bg-white p-5 shadow-sm transition-all duration-300 hover:border-brand-green/20 hover:shadow-md"
                        >
                            <div class="flex-shrink-0">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-green/10 text-brand-green transition-colors duration-300 group-hover:bg-brand-green group-hover:text-white"
                                >
                                    <component :is="item.icon" class="size-6" />
                                </div>
                            </div>
                            <h5
                                class="text-[17px] leading-snug font-bold text-slate-800"
                            >
                                {{ item.title }}
                            </h5>
                        </div>
                    </div>
                </div>

                <div
                    class="relative w-full lg:w-1/2"
                    data-aos="fade-left"
                    data-aos-delay="200"
                >
                    <div
                        class="absolute -top-4 -right-4 z-0 hidden h-full w-full rounded-2xl border-2 border-brand-green md:block"
                    ></div>

                    <div
                        class="relative z-10 overflow-hidden rounded-2xl shadow-2xl transition-transform duration-500 hover:-translate-y-2"
                        style="min-height: 480px"
                    >
                        <img
                            src="@/assets/ai.jpg"
                            alt="Government Leadership AI"
                            class="absolute inset-0 h-full w-full object-cover"
                        />
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-brand-blue/20 to-transparent"
                        ></div>
                    </div>

                    <div
                        class="absolute top-10 -left-6 hidden items-center gap-3 rounded-full border border-slate-50 bg-white px-5 py-3 shadow-lg md:flex"
                    >
                        <span
                            class="flex h-3 w-3 animate-pulse rounded-full bg-brand-green"
                        ></span>
                        <span
                            class="text-xs font-bold tracking-tighter text-slate-800 uppercase"
                            >Sovereign Oversight Active</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
