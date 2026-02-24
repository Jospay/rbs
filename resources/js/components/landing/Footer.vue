<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Linkedin, Phone, Mail, MapPin } from 'lucide-vue-next';
const quickLinks = [
    { name: 'Platform', href: '/platform' },
    { name: 'Security', href: '/security' },
    { name: 'Sectors', href: '/sectors' },
    { name: 'Labs', href: '/labs' },
    { name: 'Capital', href: '/capital' },
    { name: 'Investors', href: '/investors' },
];
</script>

<template>
    <footer class="bg-brand-blue pt-20 pb-10 text-white/90">
        <div class="container mx-auto px-6">
            <div
                class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-12 lg:gap-8"
            >
                <div class="space-y-6 lg:col-span-4">
                    <a href="/" class="group flex items-center gap-2">
                        <img
                            src="@/assets/footer-logo.png"
                            class="max-w-55"
                            alt=""
                        />
                    </a>
                    <div class="max-w-sm space-y-4">
                        <p class="text-lg font-bold text-brand-l-green">
                            Join Us in Shaping the Future
                        </p>
                        <p class="text-sm leading-relaxed text-white/70">
                            If you are interested in sovereign AI automated
                            decision intelligence supported by optimized green
                            energy and strategic capital deployment, we invite
                            you to explore our platform and meet our leadership
                            team.
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <Link
                            href="#"
                            class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 transition-all duration-300 hover:border-brand-green hover:bg-brand-green"
                        >
                            <Linkedin class="size-5" />
                        </Link>
                    </div>
                </div>

                <div class="hidden lg:col-span-1 lg:block"></div>

                <div class="lg:col-span-2">
                    <h4
                        class="relative mb-6 inline-block font-bold text-white after:absolute after:bottom-[-8px] after:left-0 after:h-[2px] after:w-8 after:bg-brand-green"
                    >
                        Quick Links
                    </h4>
                    <ul class="space-y-4">
                        <li v-for="link in quickLinks" :key="link.name">
                            <Link
                                :href="link.href"
                                class="inline-block text-sm text-white/60 transition-all hover:translate-x-1 hover:text-brand-l-green"
                            >
                                {{ link.name }}
                            </Link>
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-5">
                    <h4
                        class="relative mb-6 inline-block font-bold text-white after:absolute after:bottom-[-8px] after:left-0 after:h-[2px] after:w-8 after:bg-brand-green"
                    >
                        Global Headquarters
                    </h4>

                    <div class="space-y-6">
                        <div class="group flex items-start gap-4">
                            <div
                                class="mt-1 flex h-8 w-8 items-center justify-center rounded bg-white/5 text-white transition-colors group-hover:bg-brand-green"
                            >
                                <Phone class="size-4" />
                            </div>
                            <div class="space-y-1 text-sm text-white/70">
                                <p>+63 45 963 2025</p>
                            </div>
                        </div>

                        <div class="group flex items-start gap-4">
                            <div
                                class="mt-1 flex h-8 w-8 items-center justify-center rounded bg-white/5 text-white transition-colors group-hover:bg-brand-green"
                            >
                                <Mail class="size-4" />
                            </div>
                            <div
                                class="grid grid-cols-1 gap-1 text-sm text-white/70"
                            >
                                <a class="hover:text-brand-l-green"
                                    >info@bb88advertising.com</a
                                >
                                <a class="break-all hover:text-brand-l-green"
                                    >info@bb88group.com</a
                                >
                                <!-- <span class="opacity-50"
                                    >... and leadership team</span
                                >-->
                            </div>
                        </div>

                        <div class="group flex items-start gap-4">
                            <div
                                class="mt-1 flex h-8 w-8 items-center justify-center rounded bg-white/5 text-white transition-colors group-hover:bg-brand-green"
                            >
                                <MapPin class="size-4" />
                            </div>
                            <p class="text-sm leading-relaxed text-white/70">
                                Unit D, 2nd Floor Plaza Victoria Bldg., <br />
                                Sto. Rosario St., Sto. Domingo, Angeles City
                                2009 Philippines
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-20 flex flex-col items-center justify-center gap-4 border-t border-brand-l-green/40 pt-8 md:flex-row md:justify-between md:gap-0"
            >
                <p
                    class="text-center text-xs tracking-widest text-white/40 uppercase md:text-left"
                >
                    2026 ©
                    <strong class="text-white">Rekhi-Bisheri-Salunga</strong>.
                    All Rights Reserved.
                </p>

                <div
                    class="text-center text-[11px] tracking-[0.2em] text-white/90 uppercase md:text-right"
                >
                    Designed & Developed by
                    <a
                        href="https://bb88advertising.com/"
                        target="_blank"
                        class="font-bold text-brand-l-green hover:underline"
                    >
                        BB 88 Advertising and Digital Solution Inc.
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>
