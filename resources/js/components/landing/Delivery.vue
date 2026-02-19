<script setup lang="ts">
import { Link2Off, ShieldCheck, Microscope } from 'lucide-vue-next';

const features = [
    {
        title: 'Reduce dependency risk across compute, models, and supply chains',
        icon: Link2Off,
        delay: 200,
    },
    {
        title: 'Build trusted national capability for high-stakes use cases',
        icon: ShieldCheck,
        delay: 300,
    },
    {
        title: 'Enable secure research, talent pipelines, and innovation at scale',
        icon: Microscope,
        delay: 400,
    },
];
</script>

<template>
    <section class="relative overflow-hidden bg-slate-50 py-20">
        <div class="pointer-events-none absolute inset-0 opacity-[0.03]">
            <svg
                class="h-full w-full"
                xmlns="http://www.w3.org/2000/svg"
                width="100"
                height="100"
                viewBox="0 0 100 100"
            >
                <rect width="100" height="100" fill="none" />
                <path
                    d="M10 10L90 90M90 10L10 90"
                    stroke="currentColor"
                    stroke-width="0.5"
                />
            </svg>
        </div>

        <div class="relative z-10 container mx-auto px-6">
            <div class="mx-auto max-w-4xl text-center" data-aos="fade-up">
                <span
                    class="mb-4 block text-xs font-bold tracking-[0.2em] text-brand-green uppercase"
                >
                    Strategic Deployment
                </span>

                <h2
                    class="mb-8 text-3xl font-extrabold text-slate-900 md:text-4xl"
                >
                    Delivery Models
                </h2>

                <div class="mb-10 flex items-center justify-center gap-4">
                    <div class="h-[1px] w-12 bg-slate-300"></div>
                    <div class="h-2 w-2 rounded-full bg-brand-green"></div>
                    <div class="h-[1px] w-12 bg-slate-300"></div>
                </div>

                <p
                    class="text-2xl leading-[1.3] font-medium tracking-tight text-slate-700 md:text-[30px]"
                >
                    Delivered through government and enterprise-owned, PPP, or
                    <span class="text-brand-green">concession structures</span>
                    — always deployed under sovereign governance, with
                    in-country data control.
                </p>
            </div>
        </div>
    </section>

    <section class="overflow-hidden bg-white py-24">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center gap-16 lg:flex-row">
                <div
                    class="relative w-full lg:w-1/2"
                    data-aos="fade-right"
                    data-aos-delay="200"
                >
                    <div
                        class="absolute -bottom-6 -left-6 h-32 w-32 rounded-full bg-brand-green/10 blur-2xl"
                    ></div>

                    <div
                        class="relative overflow-hidden rounded-2xl shadow-2xl transition-transform duration-500 hover:scale-[1.02]"
                        style="min-height: 480px"
                    >
                        <img
                            src="@/assets/why-sovereign-ai-now.jpg"
                            alt="Sovereign AI Infrastructure"
                            class="absolute inset-0 h-full w-full object-cover"
                        />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"
                        ></div>
                    </div>

                    <div
                        class="absolute -right-8 -bottom-8 hidden max-w-[200px] rounded-xl border border-slate-100 bg-white p-6 shadow-xl md:block"
                    >
                        <p class="mb-1 text-3xl font-bold text-brand-green">
                            100%
                        </p>
                        <p
                            class="text-xs font-semibold tracking-wider text-slate-600 uppercase"
                        >
                            Data Residency Guaranteed
                        </p>
                    </div>
                </div>

                <div
                    class="w-full lg:w-1/2"
                    data-aos="fade-left"
                    data-aos-delay="100"
                >
                    <div class="mb-8">
                        <span
                            class="mb-3 block text-xs font-bold tracking-widest text-brand-green uppercase"
                            >Strategic Imperative</span
                        >
                        <h3
                            class="mb-6 text-3xl leading-tight font-extrabold text-slate-900 md:text-4xl"
                        >
                            Why Sovereign AI Now
                        </h3>
                        <p class="text-lg leading-relaxed text-slate-600">
                            AI has become strategic infrastructure. Sovereign
                            deployment protects national security, scientific
                            leadership, and long-term competitiveness by keeping
                            governance authority and data control aligned with
                            public objectives.
                        </p>
                    </div>

                    <ul class="space-y-8">
                        <li
                            v-for="feature in features"
                            :key="feature.title"
                            class="group flex items-start gap-5"
                        >
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="flex h-14 w-14 items-center justify-center rounded-xl bg-slate-50 text-brand-green transition-all duration-300 group-hover:bg-brand-green group-hover:text-white group-hover:shadow-lg group-hover:shadow-brand-green/30"
                                >
                                    <component
                                        :is="feature.icon"
                                        class="size-7"
                                    />
                                </div>
                            </div>
                            <div class="pt-2">
                                <h5
                                    class="text-[17px] leading-snug font-bold text-slate-900 transition-colors group-hover:text-brand-green"
                                >
                                    {{ feature.title }}
                                </h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>
