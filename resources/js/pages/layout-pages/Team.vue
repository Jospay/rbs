<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { ChevronRight, Linkedin } from 'lucide-vue-next';

import aliImg from '@/assets/Ali-2.jpeg';
import bobbyImg from '@/assets/bobbyrekhi.jpeg';
import jayImg from '@/assets/jay.jpeg';
import RonaldoImg from '@/assets/ronaldo.png';

import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/components/ui/dialog';

const team = [
    {
        name: 'Ronaldo M. Salunga, CESE',
        title: 'President CEO',
        detail_title:
            'Ronaldo M. Salunga, CESE, is a seasoned executive, techno...',
        modalContent: [
            'Ronaldo M. Salunga, CESE, is a seasoned executive, technopreneur, and former senior government official with over three decades of leadership experience spanning public administration, transportation modernization, information technology, agriculture systems, and green mobility innovation.',
            'He is the Co-Founder and incumbent General Manager of <strong>Device Design Green and Smart Corporation</strong>, where he leads the development of intelligent, sustainable, and technology-driven solutions for infrastructure, mobility, and digital systems.',
            'Mr. Salunga also co-founded <strong>CMW Philippines</strong> in partnership with a Silicon Valley-based technopreneur. The company successfully secured government accreditation to distribute and sell Class 3 Modern Jeepneys in support of the national Public Utility Vehicle Modernization Program under the <strong>Department of Transportation Philippines</strong>.',
            '<strong>Public Service Leadership</strong> <br> Before entering private enterprise, Mr. Salunga dedicated nearly 20 years to public service, holding key executive positions in the Philippine government:',
            '<ul class="list-disc list-inside"><li>Presidential Staff Officer, Presidential Management Staff – Office of the President (1990–2003)</li><li>Assistant Director, <strong>Agricultural Training Institute</strong></li><li>Executive Director, <strong>Land Transportation Franchising and Regulatory Board</strong></li><li>Executive Director, <strong>Information Technology Center for Agriculture and Fisheries</strong></li></ul>',
            'His appointments during the administration of <strong>Gloria Macapagal-Arroyo</strong> reflect his trusted role in advancing national reforms in transport regulation, digital agriculture, and government systems modernization.',
            '<strong>Global Technology & Mobility Engagement</strong> <br> Mr. Salunga’s international and private-sector leadership includes:',
            '<ul class="list-disc list-inside"><li><strong>President, NWire Technology Consortium</strong>, representing U.S.-based wireless technology innovators</li> <li>Board Director, <strong>California Mobility Works</strong> (Santa Clara, California)</li> <li>President & CEO (2018–2024), <strong>Eltrans Innovators Inc.</strong>, an electric vehicle solutions provider</li> <li>Chairman (2018–Present), <strong>Centerstar Insurance Agency and Management Corporation</strong></li></ul>',
            '<strong>Leadership Vision</strong> <br> Mr. Salunga brings together deep government insight and private-sector innovation to advance:',
            '<ul class="list-disc list-inside"><li>Smart and sustainable mobility ecosystems</li> <li>Public transport modernization</li> <li>Digital agriculture transformation</li></ul>',
        ],
        image: RonaldoImg,
        delay: 100,
    },

    // {
    //     name: 'Reynaldo Sanchez',
    //     title: 'Director',
    //     detail_title:
    //         'Reynaldo C. Sanchez is a Filipino business leader, media...',
    //     modalContent: [
    //         '<strong>Reynaldo C. Sanchez</strong> is a Filipino business leader, media executive, and corporate officer known for leadership across multiple companies in media, mobility, development, and digital entertainment sectors.',
    //         '<ul class="list-disc list-inside"><li><strong>Chairman, E-Pinoy Mobility System Inc.</strong> - EMSi is a Philippine-based mobility company focused on operating and managing electric transport systems supported by modern digital platforms.</li><li><strong>President and CEO of Asian Television Content Corporation</strong> - A Philippine television content company responsible for programming and broadcast content, notably in partnerships with networks like IBC 13.</li><li><strong>Chairman of the Board, Esports World Federation (ESWF)</strong> - He is listed as Chairman of the Board of this international esports and digital sports governance organization.</li></ul>',
    //         'Reynaldo C. Sanchez is publicly identifiable as a professional engineer, corporate leader involved in broadcast media and digital entertainment governance, blending roles in traditional television distribution with emerging digital and esports platforms.',
    //         '<ul class="list-disc list-inside"><li>Wireless and emerging technologies integration</li><li>Green infrastructure and intelligent systems development</li></ul>',
    //         'His leadership reflects a lifelong commitment to nation-building through technology, governance reform, and sustainable enterprise development.',
    //     ],
    //     image: ReynaldoImg,
    //     delay: 100,
    // },
    {
        name: 'Bobby Rekhi',
        title: 'Managing General Partner',
        detail_title:
            'Silicon Valley veteran and early venture ecosystem pioneer...',
        modalContent: [
            'Silicon Valley veteran and early venture ecosystem pioneer. Key contributor to multiple success stories including AudioHighway (Nasdaq), TestDrive Systems, CyberPlus, and Mars Communications acquisitions.',
        ],
        image: bobbyImg,
        linkedIn: 'https://www.linkedin.com/in/bobby-rekhi-91a5a22/',
        delay: 200,
    },
    {
        name: 'Ali Bushehri',
        title: 'Managing General Partner',
        detail_title: 'Leads M&A and fundraising strategies with 35+...',
        modalContent: [
            'Leads M&A and fundraising strategies with 35+ years of executive leadership in high-tech and fintech. Active investor connected to a global network of top-tier financiers.',
        ],
        image: aliImg,
        linkedIn: 'https://www.linkedin.com/in/ali-bushehri-8291121/',
        delay: 300,
    },
    {
        name: 'Jay Amaran',
        title: 'Managing General Partner · India',
        detail_title: 'IIT Madras, IIM Ahmedabad, and MIT Cambridge...',
        modalContent: [
            'IIT Madras, IIM Ahmedabad, and MIT Cambridge alumnus with 44+ years in coding and consulting, including 27 years with the World Bank. Pioneer in early spreadsheet algorithms, co-creator of the Y2K DA-TE-2000 fix, and innovator in predictive analytics and genetic computing. Active investor and mentor across software, healthcare, agriculture, realty, and education sectors.',
        ],
        image: jayImg,
        linkedIn: 'https://www.linkedin.com/in/jay78iit80iim96mit/',
        delay: 300,
    },
];
</script>

<template>
    <Head title="Team" />

    <div class="overflow-hidden bg-white">
        <!-- HEADER -->
        <section class="bg-slate-950 pt-32 pb-16">
            <div class="relative z-10 container mx-auto px-6 pt-5 text-center">
                <div class="mx-auto max-w-4xl" data-aos="fade-down">
                    <h2
                        class="mb-4 text-sm font-bold tracking-[0.3em] text-brand-green uppercase"
                    >
                        Leadership
                    </h2>
                    <h1
                        class="mb-6 text-5xl font-extrabold tracking-tight text-white"
                    >
                        Our Team
                    </h1>
                    <h5
                        class="mb-8 text-lg font-bold tracking-wide text-brand-l-green uppercase"
                    >
                        Over a Century of Collective Investment & Technology
                        Leadership
                    </h5>
                    <p
                        class="mx-auto max-w-3xl border-t border-white/10 pt-5 text-lg leading-relaxed text-slate-300"
                    >
                        Our Managing Team has been shaped at the world’s most
                        prestigious investment firms, global corporations, and
                        frontier technology ventures.
                    </p>
                </div>
            </div>
        </section>

        <!-- TEAM -->
        <section class="bg-slate-50 py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
                    <Dialog v-for="member in team" :key="member.name">
                        <!-- CARD -->
                        <div
                            class="group relative grid items-center overflow-hidden rounded-3xl border border-slate-100 bg-white p-6 shadow-sm transition-all duration-500 hover:shadow-xl sm:flex"
                            data-aos="fade-up"
                            :data-aos-delay="member.delay"
                        >
                            <div
                                class="relative mx-auto mb-5 h-32 w-32 overflow-hidden rounded-2xl bg-slate-200 sm:mx-0 sm:mb-0 md:h-44 md:w-44"
                            >
                                <img
                                    :src="member.image"
                                    class="h-full w-full object-cover"
                                />
                            </div>

                            <div class="grow text-center sm:ml-8 sm:text-start">
                                <h4
                                    class="mb-1 text-2xl font-black text-slate-900"
                                >
                                    {{ member.name }}
                                </h4>

                                <div
                                    class="flex justify-center sm:justify-start"
                                >
                                    <div
                                        class="mb-4 h-1 w-12 rounded-full bg-brand-green transition-all duration-700 group-hover:w-24"
                                    ></div>
                                </div>

                                <div class="mb-4">
                                    <span
                                        class="block text-sm font-bold text-brand-green uppercase"
                                    >
                                        {{ member.title }}
                                    </span>
                                    <p
                                        class="text-xs font-medium text-slate-500"
                                    >
                                        {{ member.detail_title }}
                                    </p>
                                </div>

                                <!-- ✅ TRIGGER -->
                                <div class="flex justify-end sm:justify-start">
                                    <DialogTrigger as-child>
                                        <button
                                            class="flex items-center gap-2 text-[10px] font-black tracking-widest text-slate-400 uppercase transition-all duration-400 group-hover:text-slate-900"
                                        >
                                            Read Full Bio
                                            <ChevronRight
                                                class="size-3 transition-all duration-400 group-hover:translate-x-1"
                                            />
                                        </button>
                                    </DialogTrigger>
                                </div>
                            </div>
                        </div>

                        <!-- MODAL -->
                        <DialogContent
                            class="flex max-h-[90vh] flex-col overflow-hidden bg-white p-0 sm:max-w-3xl"
                        >
                            <DialogHeader
                                class="border-b border-slate-200 px-6 py-4"
                            >
                                <DialogTitle
                                    class="text-xl font-bold text-brand-green"
                                >
                                    {{ member.name }}
                                </DialogTitle>
                                <DialogDescription
                                    class="text-sm font-medium tracking-wider text-gray-400 uppercase"
                                >
                                    {{ member.title }}
                                </DialogDescription>
                            </DialogHeader>

                            <!-- CONTENT -->
                            <div class="flex-1 overflow-y-auto px-6 py-4">
                                <p
                                    v-for="(
                                        paragraph, i
                                    ) in member.modalContent"
                                    :key="i"
                                    v-html="paragraph"
                                    class="mb-4 text-base leading-relaxed text-gray-700"
                                ></p>
                            </div>

                            <!-- FOOTER -->
                            <div
                                class="flex items-center justify-between border-t border-slate-200 px-6 py-4"
                            >
                                <!-- LINKEDIN -->
                                <a
                                    v-if="member.linkedIn"
                                    :href="member.linkedIn"
                                    target="_blank"
                                    class="flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-brand-green"
                                >
                                    <Linkedin class="size-5" />
                                    LinkedIn
                                </a>

                                <!-- CLOSE -->
                                <DialogTrigger as-child>
                                    <button
                                        class="rounded bg-brand-green px-4 py-2 text-white hover:bg-brand-l-green"
                                    >
                                        Close
                                    </button>
                                </DialogTrigger>
                            </div>
                        </DialogContent>
                    </Dialog>
                </div>
            </div>
        </section>
    </div>
</template>
