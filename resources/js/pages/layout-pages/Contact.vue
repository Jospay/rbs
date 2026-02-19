<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Mail, Send, Loader2, CheckCircle } from 'lucide-vue-next';
import { ref } from 'vue';

const isSubmitting = ref(false);
const isSent = ref(false);

const departments = [
    {
        title: 'General Inquiries',
        emails: [
            'generalinquiries@gmail.com',
            'sampleusers@gmail.com',
            'testquiries@gmail.com',
        ],
    },
    {
        title: 'Investors',
        emails: ['investor@gmail.com', 'sampleusers@gmail.com'],
    },
    {
        title: 'Media & Speaking',
        emails: ['media@gmail.com', 'sampleusers@gmail.com'],
    },
    {
        title: 'Careers',
        emails: ['careers@gmail.com', 'sampleusers@gmail.com'],
    },
    {
        title: 'Commercial Enquiries',
        emails: ['commercial@gmail.com', 'sampleusers@gmail.com'],
    },
];

const handleSubmit = () => {
    isSubmitting.value = true;
    setTimeout(() => {
        isSubmitting.value = false;
        isSent.value = true;
    }, 2000);
};
</script>

<template>
    <Head title="Contact" />

    <div class="overflow-hidden bg-white">
        <section class="bg-slate-950 pt-38 pb-17">
            <div class="relative z-10 container mx-auto px-6 text-center">
                <div class="mx-auto max-w-3xl" data-aos="fade-down">
                    <h2
                        class="mb-6 text-5xl font-extrabold tracking-tight text-white"
                    >
                        Contact
                    </h2>
                    <div
                        class="mx-auto mb-8 h-1.5 w-20 rounded-full bg-brand-green"
                    ></div>
                    <p class="text-lg leading-relaxed text-slate-300">
                        We welcome inquiries from governments, enterprises,
                        investors, media, and talent. Reach our relevant team
                        directly or use the secure form below.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-24">
            <div class="container mx-auto px-5" data-aos="fade-up">
                <div class="flex flex-col gap-16 lg:flex-row">
                    <div class="lg:w-1/2">
                        <div
                            class="relative overflow-hidden rounded-4xl p-5 shadow-2xl md:p-12"
                        >
                            <div class="relative z-10">
                                <h3
                                    class="mb-8 text-3xl font-bold text-slate-900"
                                >
                                    Send Us a
                                    <span class="text-brand-green"
                                        >Message</span
                                    >
                                </h3>

                                <form
                                    @submit.prevent="handleSubmit"
                                    class="space-y-6"
                                >
                                    <div class="grid grid-cols-1 gap-6">
                                        <div>
                                            <label
                                                class="mb-2 block text-xs font-bold tracking-widest text-brand-green uppercase"
                                                >Full Name *</label
                                            >
                                            <input
                                                type="text"
                                                required
                                                placeholder="Your Full Name"
                                                class="w-full rounded-xl border border-slate-800 px-4 py-3 text-slate-900 transition-colors focus:border-brand-green focus:outline-none"
                                            />
                                        </div>
                                        <div>
                                            <label
                                                class="mb-2 block text-xs font-bold tracking-widest text-brand-green uppercase"
                                                >Email Address *</label
                                            >
                                            <input
                                                type="email"
                                                required
                                                placeholder="Your Email Address"
                                                class="w-full rounded-xl border border-slate-800 px-4 py-3 text-slate-900 transition-colors focus:border-brand-green focus:outline-none"
                                            />
                                        </div>
                                        <div>
                                            <label
                                                class="mb-2 block text-xs font-bold tracking-widest text-brand-green uppercase"
                                                >Subject *</label
                                            >
                                            <input
                                                type="text"
                                                required
                                                placeholder="Subject"
                                                class="w-full rounded-xl border border-slate-800 px-4 py-3 text-slate-900 transition-colors focus:border-brand-green focus:outline-none"
                                            />
                                        </div>
                                        <div>
                                            <label
                                                class="mb-2 block text-xs font-bold tracking-widest text-brand-green uppercase"
                                                >Message *</label
                                            >
                                            <textarea
                                                required
                                                rows="5"
                                                placeholder="How can we help you?"
                                                class="w-full rounded-xl border border-slate-800 px-4 py-3 text-slate-900 transition-colors focus:border-brand-green focus:outline-none"
                                            ></textarea>
                                        </div>
                                    </div>

                                    <button
                                        type="submit"
                                        :disabled="isSubmitting || isSent"
                                        class="group flex w-full items-center justify-center gap-3 rounded-xl border-2 border-brand-green py-4 font-bold text-brand-green transition-all duration-300"
                                    >
                                        <template v-if="isSubmitting">
                                            <Loader2
                                                class="size-5 animate-spin"
                                            />
                                            Processing...
                                        </template>
                                        <template v-else-if="isSent">
                                            <CheckCircle class="size-5" />
                                            Message Sent
                                        </template>
                                        <template v-else>
                                            Send Message
                                            <Send
                                                class="size-4 transition-transform group-hover:translate-x-1"
                                            />
                                        </template>
                                    </button>

                                    <p
                                        v-if="isSent"
                                        class="animate-pulse text-center text-sm font-medium text-brand-green"
                                    >
                                        Thank you! Our team will contact you
                                        shortly.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-10 lg:w-1/2">
                        <div>
                            <h3
                                class="mb-2 text-3xl font-black tracking-tight text-slate-900 uppercase"
                            >
                                Contact
                                <span class="text-brand-green">Directory</span>
                            </h3>
                            <div
                                class="h-1 w-12 rounded-full bg-brand-green"
                            ></div>
                        </div>

                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                            <div
                                v-for="(dept, idx) in departments"
                                :key="idx"
                                class="group rounded-2xl border border-slate-100 p-6 transition-all duration-300 hover:border-brand-green/30 hover:bg-slate-50"
                            >
                                <div class="mb-4 flex items-center gap-3">
                                    <div
                                        class="rounded-lg bg-brand-green/10 p-2 text-brand-green transition-colors group-hover:bg-brand-green group-hover:text-white"
                                    >
                                        <Mail class="size-4" />
                                    </div>
                                    <h4
                                        class="text-xs font-bold tracking-widest text-slate-900 uppercase"
                                    >
                                        {{ dept.title }}
                                    </h4>
                                </div>
                                <ul class="space-y-2">
                                    <li
                                        v-for="email in dept.emails"
                                        :key="email"
                                        class="text-sm"
                                    >
                                        <a
                                            :href="`mailto:${email}`"
                                            class="font-medium break-all text-slate-500 transition-colors hover:text-brand-green"
                                        >
                                            {{ email }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
