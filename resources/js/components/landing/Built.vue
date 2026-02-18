<script setup lang="ts">
import { Landmark, ShieldCheck, Globe } from 'lucide-vue-next';

const builds = [
    {
        icon: Landmark,
        text: 'Built for ministries, national labs, and universities',
    },
    {
        icon: ShieldCheck,
        text: 'Security-by-design with policy-driven oversight',
    },
    {
        icon: Globe,
        text: 'Flexible delivery models aligned to sovereign control',
    },
];
</script>

<template>
    <section class="relative overflow-hidden bg-gray-50 py-20">
        <!-- subtle background gradient -->
        <div
            class="absolute inset-0 bg-linear-to-b from-white via-gray-50 to-gray-100"
        ></div>

        <div class="relative container mx-auto px-6" data-aos="fade-up">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
                <div
                    v-for="(build, index) in builds"
                    :key="index"
                    class="group flex flex-col items-center"
                >
                    <!-- icon -->
                    <div
                        class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-brand-green/90 text-white shadow-xl backdrop-blur transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl"
                    >
                        <component :is="build.icon" class="size-7" />
                    </div>

                    <!-- card -->
                    <div
                        class="relative -mt-8 w-full rounded-2xl border border-gray-100 bg-white/90 p-10 pt-14 text-center shadow-xl backdrop-blur transition-all duration-300 group-hover:shadow-2xl"
                    >
                        <p
                            class="text-lg leading-relaxed font-semibold text-gray-900 md:text-xl"
                        >
                            {{ build.text }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
