<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { Menu, X } from 'lucide-vue-next';
import { ref, onMounted, onUnmounted } from 'vue';
import Footer from '@/components/landing/Footer.vue';
import { home } from '@/routes';

const page = usePage();
const isScrolled = ref(false);
const isMobileNavOpen = ref(false);

// Function to check if a link is active
const isActive = (href: string) => {
    return page.url === href || (href !== '/' && page.url.startsWith(href));
};

const handleScroll = () => {
    isScrolled.value = window.scrollY > 50;
};

const toggleMobileNav = () => {
    isMobileNavOpen.value = !isMobileNavOpen.value;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

const navLinks = [
    { name: 'Home', href: '/' },
    { name: 'About', href: '/about' },
    { name: 'Platform', href: '/platform' },
    { name: 'Security', href: '/security' },
    { name: 'Sectors', href: '/sectors' },
    { name: 'Labs', href: '/labs' },
    { name: 'Capital', href: '/capital' },
    { name: 'Investors', href: '/investors' },
    { name: 'Team', href: '/team' },
    { name: 'Contact', href: '/contact' },
];
</script>

<template>
    <header
        id="header"
        :class="[
            'fixed top-0 z-50 w-full border-b py-4 transition-all duration-400 ease-in-out',
            isScrolled || isMobileNavOpen || page.url !== '/'
                ? 'border-gray-100 bg-white text-gray-900 shadow-md'
                : 'border-transparent bg-transparent',
        ]"
    >
        <div class="container mx-auto flex items-center justify-between px-5">
            <Link
                :href="home()"
                class="flex shrink-0 items-center gap-2 leading-none"
            >
                <img
                    src="@/assets/logo_name.png"
                    class="h-14 sm:h-16"
                    alt="Logo"
                />
            </Link>

            <nav class="hidden items-center gap-8 lg:flex">
                <ul class="m-0 flex list-none gap-8 p-0">
                    <li v-for="link in navLinks" :key="link.href">
                        <Link
                            :href="link.href"
                            :class="[
                                'group relative pb-1 text-sm font-semibold transition-all duration-300 hover:text-brand-green',
                                isActive(link.href) ? 'text-brand-green' : '',
                            ]"
                        >
                            {{ link.name }}
                            <span
                                :class="[
                                    'absolute bottom-0 left-0 h-0.5 bg-brand-green transition-all duration-300',
                                    isActive(link.href)
                                        ? 'w-full'
                                        : 'w-0 group-hover:w-full',
                                ]"
                            ></span>
                        </Link>
                    </li>
                </ul>
            </nav>

            <button
                @click="toggleMobileNav"
                class="relative z-50 p-2 transition-colors duration-300 lg:hidden"
            >
                <component :is="isMobileNavOpen ? X : Menu" class="size-8" />
            </button>

            <nav
                :class="[
                    'absolute top-full left-0 w-full overflow-y-auto border-t border-gray-100 bg-white shadow-lg transition-all duration-500 ease-in-out lg:hidden',
                    isMobileNavOpen
                        ? 'h-[calc(100vh-96px)] opacity-100'
                        : 'pointer-events-none h-0 opacity-0',
                ]"
            >
                <ul class="flex list-none flex-col gap-0 p-4">
                    <li
                        v-for="link in navLinks"
                        :key="link.href"
                        class="border-b border-gray-50 last:border-0"
                    >
                        <Link
                            :href="link.href"
                            @click="isMobileNavOpen = false"
                            :class="[
                                'block px-2 py-4 text-lg font-medium transition-colors hover:text-brand-green',
                                isActive(link.href)
                                    ? 'text-brand-green'
                                    : 'text-gray-800',
                            ]"
                        >
                            {{ link.name }}
                        </Link>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <slot />
    </main>

    <Footer />
</template>
