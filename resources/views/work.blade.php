@extends('shared.base', ['title' => 'Work'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative">
        <div class="inner-container-small">
            <div
                class="relative z-10 flex flex-col overflow-hidden md:gap-20 gap-10 bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)] md:pt-7.5 md:px-11.25 md:pb-35 pb-22 pt-4 px-6">
                <div class="grid grid-cols-2 gap-2.5 items-center">
                    <img alt="Aydem Image" class="rounded-4xl" src="{{ asset('images/avatar/aiden.jpg') }}"/>
                    <div class="flex flex-col text-end gap-1.5">
                        <img alt="Globe Icon" class="w-6.75 h-4.5 ms-auto" src="{{ asset('images/svg/globe.svg') }}"/>
                        <div class="flex flex-col gap-0.5">
                            <div class="font-medium">Based in Indonesia</div>
                            <div class="text-default-600 text-nowrap">62.328° N - 15.845° E</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 text-center">
                    <div>
                        <h1 class="lg:text-[42px] md:text-4xl text-3xl mb-2.5">Brandora - Creative Agency Website</h1>
                        <p>A clean and scalable CRM dashboard built to streamline sales tracking and boost team
                            productivity.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.25 bg-default-700/20 rounded-xl p-2.5 text-start">
                            <h2 class="md:text-xl text-base">Service</h2>
                            <div class="text-sm">UI/UX design</div>
                        </div>
                        <div class="flex flex-col gap-1.25 bg-default-700/20 rounded-xl p-2.5 text-start">
                            <h2 class="md:text-xl text-base">Release date</h2>
                            <div class="text-sm">October 15, 2025</div>
                        </div>
                        <div class="flex flex-col gap-1.25 bg-default-700/20 rounded-xl p-2.5 text-start">
                            <h2 class="md:text-xl text-base">Client</h2>
                            <div class="text-sm">Toronto, Canada</div>
                        </div>
                        <div class="flex flex-col gap-1.25 bg-default-700/20 rounded-xl p-2.5 text-start">
                            <h2 class="md:text-xl text-base">Location</h2>
                            <div class="text-sm">Tech Co.</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="p-0.75 rounded-xl bg-body-bg/40 hover:shadow-[0_0_40px_#0a0a0a4d] transition justify-center items-center inline-flex"
                           href="https://unifato.com/">
                            <div class="flex items-center gap-2.5 rounded-xl bg-body-bg text-white py-3 px-5.5">
                                <img alt="Calendar Icon" class="size-3.5" loading="eager"
                                     src="{{ asset('images/svg/prev.svg') }}"/>
                                <div class="font-medium">live preview</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div
                    class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:start-3.75 start-2 z-10 absolute opacity-40"></div>
                <div
                    class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:end-3.75 end-2 z-10 absolute opacity-40"></div>
                <div
                    class="absolute z-10 h-27.5 w-full start-0 end-0 bottom-0 bg-linear-to-b from-body-bg/0 via-body-bg/65 to-body-bg"></div>
            </div>
        </div>
        <div class="absolute -bottom-10 start-1/2 -translate-x-1/2 overflow-hidden">
            <div class="md:w-200 w-92 mx-auto md:px-7.5 px-5">
                <div class="md:flex hidden rounded-2xl p-3 bg-default-900 overflow-hidden">
                    <div class="bg-body-bg w-full h-15 overflow-hidden"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:pb-37.5 md:pb-25 py-20">
        <div class="inner-container-small">
            <div class="flex flex-col gap-12.5">
                <img alt="" class="rounded-xl" src="{{ asset('images/work/01.png') }}"/>
                <div>
                    <p class="mb-5 text-white/70">Brandora is a boutique creative agency with a bold visual identity.
                        They needed a website that reflected their energy, creativity, and premium positioning—without
                        sacrificing performance or usability.</p>
                    <p class="mb-5 text-white/70">We created a high-impact visual experience with smooth animations,
                        crisp typography, and an editorial layout that highlights their case studies and team culture.
                        Built in TailwindCSS, the site is easy for their internal team to update and maintain.</p>
                    <p class="mb-5 text-white/70">Highlights:</p>
                    <ul class="list-disc mb-2.5 ps-5 text-white/70" role="list">
                        <li>Interactive homepage with scroll-triggered animations</li>
                        <li>Custom CMS setup for portfolio and blog content</li>
                        <li>Engaging "About Us" and team spotlight sections</li>
                        <li>Fully responsive, with mobile-optimized interactions</li>
                    </ul>
                    <p class="mb-5 text-white/70">The finished site reflects Brandora's style while giving them a
                        powerful platform to showcase their talent and attract high-value clients.</p>
                </div>
                <div class="grid grid-cols-2 gap-5" data-toggle="gallery">
                    <a href="{{ asset('images/work/gallery-1.png') }}">
                        <img alt="Gallery 1" class="rounded-xl" src="{{ asset('images/work/gallery-1.png') }}"/>
                    </a>
                    <a href="{{ asset('images/work/gallery-2.png') }}">
                        <img alt="Gallery 2" class="rounded-xl" src="{{ asset('images/work/gallery-2.png') }}"/>
                    </a>
                </div>
                <div>
                    <p class="mb-2.5 text-white/70">The core goal was to reduce complexity while keeping advanced
                        features accessible. We redesigned the architecture of the dashboard to highlight only the most
                        relevant metrics per user role—allowing sales reps, managers, and executives to view only what
                        matters to them.</p>
                    <p class="mb-2.5 text-white/70">Using card-based modules, we enabled users to personalize their
                        dashboard layouts. We also integrated visual cues (color states, progress rings, tooltips) to
                        create a more intuitive experience.</p>
                </div>
                <div class="bg-default-900 p-5 flex flex-col gap-5 rounded-xl">
                    <h6 class="text-xl text-white">They understood our vision from day one. The result feels bold,
                        stylish, and totally us. Also, the CMS setup makes updates super easy.</h6>
                    <div class="text-[15px] text-white/70">Sofia Mendes - @sofia.codes</div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:pb-37.5 md:pb-25 pb-15">
        <div class="inner-container-small">
            <div class="md:mb-12.5 mb-8">
                <h2 class="text-white lg:text-4xl md:text-[32px] text-[26px]">Recent work</h2>
            </div>
            <div class="flex flex-col gap-5">
                <a class="group" href="{{ url('/work') }}">
                    <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                        <div class="relative overflow-hidden">
                            <img alt=""
                                 class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                 src="{{ asset('images/work/02.png') }}"/>
                            <div
                                class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                View Project
                            </div>
                        </div>
                        <div
                            class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                            <div class="text-lg">Bloom CRM - Sales Dashboard</div>
                            <div class="flex items-center gap-2.5">
                                <div
                                    class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                <div>SaaS Web Design</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="group" href="{{ url('/work') }}">
                    <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                        <div class="relative overflow-hidden">
                            <img alt=""
                                 class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                 src="{{ asset('images/work/03.png') }}"/>
                            <div
                                class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                View Project
                            </div>
                        </div>
                        <div
                            class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                            <div class="text-lg">Shoppr - E-commerce Landing Page</div>
                            <div class="flex items-center gap-2.5">
                                <div
                                    class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                <div>UI Design</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
