<script setup lang="ts">
import { Mail, ShieldCheck } from 'lucide-vue-next';
import { Button } from '@/Components/ui/button';
</script>

<template>
    <section class="bg-brand-blue pt-20 pb-11">
        <div class="container mx-auto px-6 text-center">
            <div class="mx-auto max-w-4xl" data-aos="fade-up">
                <div
                    class="mb-8 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-brand-l-green"
                >
                    <ShieldCheck class="size-4" />
                    <span class="text-xs font-bold tracking-[0.2em] uppercase"
                        >Confidential Inquiry Channel</span
                    >
                </div>

                <h2
                    class="mb-6 text-4xl leading-tight font-extrabold text-white"
                >
                    Discuss a sovereign deployment pathway
                </h2>

                <p
                    class="mx-auto mb-12 max-w-2xl text-lg leading-relaxed text-white/80"
                >
                    Confidential inquiries welcomed. We respond promptly and
                    discreetly to government and enterprise leadership.
                </p>

                <div
                    class="flex flex-col items-center justify-center gap-4 sm:flex-row"
                >
                    <Button
                        size="lg"
                        class="h-auto w-full bg-brand-green px-8 py-5 text-base font-bold text-white transition-all duration-300 hover:scale-105 hover:bg-brand-l-green active:scale-95 sm:w-auto"
                    >
                        Request a Sovereign AI Briefing
                    </Button>

                    <Button
                        variant="outline"
                        size="lg"
                        class="h-auto w-full border-white/40 bg-white/5 px-8 py-5 text-base font-bold text-white backdrop-blur-sm transition-all duration-300 hover:bg-white hover:text-[#00008b] active:scale-95 sm:w-auto"
                    >
                        <Mail class="mr-2 size-5" />
                        Contact
                    </Button>
                </div>
            </div>
        </div>
    </section>
</template>
