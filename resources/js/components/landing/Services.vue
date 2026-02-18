<script setup lang="ts">
import { Cpu, Scale, FlaskConical, Bolt } from 'lucide-vue-next';

const services = [
    {
        title: 'Sovereign AI Cloud',
        description:
            'Secure compute, orchestration, observability, and reliability for national workloads.',
        icon: Cpu,
        delay: 100,
    },
    {
        title: 'Governance & Oversight',
        description:
            'Policy guardrails, audit trails, approvals, and human-in-the-loop controls.',
        icon: Scale,
        delay: 200,
    },
    {
        title: 'Research & National Innovation',
        description:
            'Secure research compute and governed data environments for universities and labs.',
        icon: FlaskConical,
        delay: 300,
    },
    {
        title: 'Energy at AI Scale',
        description:
            'Renewable generation and storage engineered for high-availability compute.',
        icon: Bolt,
        delay: 400,
    },
];
</script>

<template>
    <section id="services" class="py-20">
        <div
            class="container mx-auto mb-20 px-6 text-center"
            data-aos="fade-up"
        >
            <span
                class="mb-3 block text-xs font-bold tracking-widest text-brand-green uppercase"
                >Solutions</span
            >
            <h2 class="text-4xl font-bold tracking-tight text-slate-900">
                Our Services
            </h2>
            <div
                class="mx-auto mt-4 h-1 w-12 rounded-full bg-brand-green"
            ></div>
        </div>

        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div
                    v-for="service in services"
                    :key="service.title"
                    class="group relative"
                    data-aos="fade-up"
                    :data-aos-delay="service.delay"
                >
                    <div
                        class="relative flex h-full flex-col items-center rounded-3xl border border-slate-100 bg-white px-8 py-12 shadow-sm transition-all duration-500 hover:border-brand-green/30 hover:shadow-xl"
                    >
                        <div
                            class="mb-8 flex h-20 w-20 items-center justify-center rounded-2xl bg-slate-50 text-brand-green transition-all duration-500 group-hover:bg-brand-green group-hover:text-white"
                        >
                            <component
                                :is="service.icon"
                                class="size-9 stroke-[1.5px]"
                            />
                        </div>

                        <h3 class="mb-4 text-xl font-bold text-slate-900">
                            {{ service.title }}
                        </h3>

                        <p
                            class="text-[15px] leading-relaxed text-slate-500 transition-colors group-hover:text-slate-700"
                        >
                            {{ service.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
