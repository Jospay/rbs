<script setup lang="ts">
import { Button } from '@/Components/ui/button';
</script>

<template>
    <section
        class="relative flex min-h-screen w-full items-center justify-center bg-cover bg-center bg-no-repeat px-6 pt-28 pb-14"
        :style="{
            backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/assets/img/hero.jpeg')`,
        }"
    >
        <div class="relative z-10 container">
            <div
                class="mx-auto max-w-5xl text-center text-white"
                data-aos="fade-down"
                data-aos-delay="100"
            >
                <h1
                    class="mb-6 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl"
                >
                    Sovereign & Enterprise – controlled AI
                    <br class="hidden lg:block" />
                    automated decision intelligence –
                    <br class="hidden lg:block" />
                    deployed incountry, governed locally – for
                    <br class="hidden lg:block" />
                    government and enterprise
                </h1>

                <p
                    class="mx-auto mb-10 max-w-3xl text-lg leading-relaxed opacity-90"
                >
                    RBS's AI automated decision intelligence platform and
                    optimized clean- <br class="hidden lg:block" />power systems
                    that let nations run advanced multimodal AI with data
                    residency, <br class="hidden lg:block" />
                    security-by-design, and policy authority — without
                    dependency risk.
                </p>

                <div
                    class="flex flex-col items-center justify-center gap-5 sm:flex-row"
                >
                    <Button
                        size="lg"
                        class="h-auto w-full bg-brand-green px-5 py-4 text-base font-semibold whitespace-normal text-white transition-all duration-300 hover:bg-brand-l-green active:scale-95 sm:w-auto"
                    >
                        Request a Sovereign & Enterprise AI Briefing
                    </Button>

                    <Button
                        variant="outline"
                        size="lg"
                        class="h-auto w-full border-2 border-white bg-transparent py-4 text-base font-semibold text-white transition-all duration-300 hover:border-brand-green hover:bg-brand-green hover:text-white active:scale-95 sm:w-auto"
                    >
                        View Platform Architecture
                    </Button>
                </div>
            </div>
        </div>
    </section>
</template>
