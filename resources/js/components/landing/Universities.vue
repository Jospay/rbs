<script setup lang="ts">
import { Database, History, GraduationCap } from 'lucide-vue-next';

const universityFeatures = [
    {
        title: 'Secure research compute and governed data access',
        icon: Database,
        delay: 100,
    },
    {
        title: 'Reproducibility, auditability, and lifecycle monitoring',
        icon: History,
        delay: 200,
    },
    {
        title: 'Talent development pipelines and national innovation capacity',
        icon: GraduationCap,
        delay: 300,
    },
];
</script>

<template>
    <section id="universities" class="overflow-hidden bg-slate-50 py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center gap-16 lg:flex-row">
                <div
                    class="relative w-full lg:w-1/2"
                    data-aos="fade-right"
                    data-aos-delay="200"
                >
                    <div
                        class="absolute -top-6 -left-6 h-48 w-48 rounded-full bg-brand-green/5 blur-3xl"
                    ></div>

                    <div
                        class="relative overflow-hidden rounded-2xl shadow-2xl transition-transform duration-500 hover:rotate-[-1deg]"
                        style="min-height: 480px"
                    >
                        <img
                            src="@/assets/ai.jpg"
                            alt="National Labs AI Research"
                            class="absolute inset-0 h-full w-full object-cover"
                        />
                        <div
                            class="absolute inset-0 bg-brand-green/10 mix-blend-multiply"
                        ></div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"
                        ></div>
                    </div>

                    <div
                        class="absolute -right-4 bottom-10 hidden items-center gap-3 rounded-xl bg-slate-900 px-6 py-3 shadow-2xl md:flex"
                    >
                        <div
                            class="h-2 w-2 animate-ping rounded-full bg-brand-l-green"
                        ></div>
                        <span
                            class="font-mono text-xs tracking-widest text-white uppercase"
                            >Research Node: Active</span
                        >
                    </div>
                </div>

                <div
                    class="w-full lg:w-1/2"
                    data-aos="fade-left"
                    data-aos-delay="100"
                >
                    <div class="mb-10">
                        <span
                            class="mb-3 block text-xs font-bold tracking-widest text-brand-green uppercase"
                            >Scientific Leadership</span
                        >
                        <h3
                            class="mb-6 text-3xl leading-tight font-extrabold text-slate-900 md:text-4xl"
                        >
                            For Universities & National Labs:
                        </h3>
                        <div
                            class="h-1.5 w-12 rounded-full bg-brand-green"
                        ></div>
                    </div>

                    <div class="space-y-6">
                        <div
                            v-for="item in universityFeatures"
                            :key="item.title"
                            class="group flex items-start gap-6"
                        >
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-50 text-brand-green transition-all duration-300 group-hover:bg-brand-green group-hover:text-white group-hover:shadow-lg"
                                >
                                    <component :is="item.icon" class="size-5" />
                                </div>
                            </div>
                            <div
                                class="w-full border-b border-slate-100 pt-2 pb-4 transition-colors group-hover:border-brand-green/30"
                            >
                                <h5
                                    class="text-[17px] leading-snug font-bold text-slate-800"
                                >
                                    {{ item.title }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
