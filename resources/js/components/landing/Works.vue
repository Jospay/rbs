<script setup lang="ts">
const steps = [
    {
        number: '01',
        label: 'STEP 1',
        title: 'National Blueprint',
        description:
            'Strategic planning and infrastructure mapping aligned with national objectives.',
        delay: 100,
    },
    {
        number: '02',
        label: 'STEP 2',
        title: 'Build & Integrate',
        description:
            'Deployment of sovereign compute and local data integration protocols.',
        delay: 200,
    },
    {
        number: '03',
        label: 'STEP 3',
        title: 'Operate & Transfer',
        description:
            'Phased knowledge transfer to local authorities for full sovereign control.',
        delay: 300,
    },
];
</script>
<template>
    <section class="overflow-hidden bg-slate-50 py-20">
        <div class="container mx-auto px-6">
            <div class="mb-20 text-center" data-aos="fade-up">
                <span
                    class="mb-3 block text-xs font-bold tracking-[0.3em] text-brand-green uppercase"
                    >Process</span
                >
                <h2
                    class="text-4xl font-extrabold tracking-tight text-slate-900"
                >
                    How We Work
                </h2>
                <div
                    class="mx-auto mt-4 h-1 w-12 rounded-full bg-brand-green"
                ></div>
            </div>

            <div class="relative">
                <div
                    class="absolute top-1/4 left-0 z-0 hidden h-[2px] w-full bg-slate-100 lg:block"
                >
                    <div
                        class="h-full w-full animate-pulse bg-brand-green/20"
                    ></div>
                </div>

                <div
                    class="relative z-10 grid grid-cols-1 gap-12 md:grid-cols-3"
                >
                    <div
                        v-for="step in steps"
                        :key="step.number"
                        class="group flex flex-col items-center"
                        data-aos="fade-up"
                        :data-aos-delay="step.delay"
                    >
                        <div class="relative mb-8">
                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-2xl border-2 border-slate-100 bg-white shadow-xl transition-all duration-500 group-hover:rotate-[10deg] group-hover:border-brand-green"
                            >
                                <span
                                    class="text-2xl font-black text-brand-green transition-transform group-hover:scale-110"
                                >
                                    {{ step.number }}
                                </span>
                            </div>

                            <div
                                class="absolute -top-3 -right-6 rotate-12 transform rounded bg-brand-green px-2 py-1 text-[10px] font-bold text-white shadow-lg transition-transform group-hover:rotate-0"
                            >
                                {{ step.label }}
                            </div>
                        </div>

                        <div class="text-center">
                            <h3
                                class="mb-4 text-2xl font-bold text-slate-900 transition-colors group-hover:text-brand-green"
                            >
                                {{ step.title }}
                            </h3>
                            <p
                                class="mx-auto max-w-[250px] text-sm leading-relaxed text-slate-500"
                            >
                                {{ step.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
