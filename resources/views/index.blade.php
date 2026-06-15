@extends('shared.base', ['title' => 'rullumgrafis'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <!-- Hero Section -->
    <section class="relative" id="hero">
        <div class="inner-container-small">
            <div
                class="relative z-10 flex flex-col overflow-hidden md:gap-20 gap-10 bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)] md:pt-7.5 md:px-11.25 pt-4 px-6">
                <div class="grid grid-cols-2 gap-2.5 items-center">
                    <img alt="rullumgrafis Image" class="rounded-4xl" src="{{ asset('images/avatar/ulum.jpg') }}"/>
                    <div class="flex flex-col text-end gap-1.5">
                        <img alt="Globe Icon" class="w-9.75 h-7.5 ms-auto" src="{{ asset('images/svg/globe-1.svg') }}"/>
                        <div class="flex flex-col gap-0.5">
                            <div class="font-medium">Based in Indonesia</div>
                            <div class="text-default-600 text-nowrap">Sidoarjo, East Java</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:gap-7.5 gap-5">
                    <div class="flex flex-col gap-4 max-w-md">
                        <div class="flex gap-2 items-center">
                            <div class="bg-body-bg/26 rounded-full flex justify-center items-center size-3.75">
                                <div class="rounded-full bg-white size-1.75"></div>
                            </div>
                            <div>Available for a new project</div>
                        </div>
                        <h1 class="md:text-[42px] text-[26px]">Hey👋 I'm rullumgrafis, Professional Content Creator</h1>
                        <p class="font-medium">I transform ideas into engaging content, compelling visual identities, and creative strategies that make brands stand out.</p>
                    </div>
                    <div>
                        <a class="p-0.75 rounded-xl bg-body-bg/40 hover:shadow-[0_0_40px_#0a0a0a4d] transition justify-center items-center inline-flex"
                           href="#contact">
                            <div class="flex items-center gap-2.5 rounded-xl bg-body-bg text-white py-3 px-5.5">
                                <img alt="Calendar Icon" class="size-3.5" loading="eager"
                                     src="{{ asset('images/svg/calendar.svg') }}"/>
                                <div class="font-medium">Schedule a call</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-7.5">
                    <img alt="img1" class="rounded-t-full md:h-50 w-full" src="{{ asset('images/home/img-1.png') }}"/>
                    <div class="md:h-50 relative">
                        <video autoplay=""
                               class="rounded-t-full w-full h-full absolute object-cover start-0 top-0 bg-cover" loop=""
                               src="{{ asset('images/video/video-transcode.mp4') }}"></video>
                    </div>
                    <img alt="img3" class="rounded-t-full md:h-50 w-full" src="{{ asset('images/home/img-3.png') }}"/>
                    <img alt="img2" class="rounded-t-full md:h-50 w-full" src="{{ asset('images/home/img-2.png') }}"/>
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
    <!-- Client Section -->
<section class="lg:pt-37.5 md:pt-25 pt-12" id="client">
    <div class="inner-container-small">

        <div class="text-white/70 text-center mb-12.5">
            Collaborated with industry Rockstars:
        </div>

        <div class="flex flex-nowrap w-full overflow-hidden">

            <ul class="infinite-scroll flex items-center gap-10 shrink-0">
                <li class="shrink-0">
                    <img alt="client-1" src="{{ asset('images/client/client-1.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-2" src="{{ asset('images/client/client-2.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-3" src="{{ asset('images/client/client-3.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-4" src="{{ asset('images/client/client-4.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-5" src="{{ asset('images/client/client-5.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-1" src="{{ asset('images/client/client-1.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-2" src="{{ asset('images/client/client-2.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-3" src="{{ asset('images/client/client-3.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-4" src="{{ asset('images/client/client-4.svg') }}">
                </li>
                <li class="shrink-0">
                    <img alt="client-5" src="{{ asset('images/client/client-5.svg') }}">
                </li>
            </ul>
        </div>

    </div>
</section>
    <!-- Work / Portfolio Section -->
    <section class="lg:pt-37.5 md:pt-25 pt-12 overflow-hidden" id="work">
        <div class="container-small">
            <div class="lg:w-150 w-auto mx-auto flex justify-between items-center mb-12.5">
                <h2 class="lg:text-4xl md:text-[32px] text-2xl text-white">Work Showcase</h2>
                <div class="flex gap-5">
                    <button
                        class="swiper-button-prev static! flex justify-center items-center size-10! bg-default-900 rounded-xl">
                        <i class="iconify lucide--chevron-left text-white size-6"></i>
                    </button>
                    <button
                        class="swiper-button-next static! flex justify-center items-center size-10! bg-default-900 rounded-xl">
                        <i class="iconify lucide--chevron-right text-white size-6"></i>
                    </button>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper work-swiper lg:overflow-visible!">
                <div class="swiper-wrapper">
                    <!-- Work Card 1 -->
                    <div class="swiper-slide">
                        <a class="group" href="{{ url('/work') }}">
                            <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                                <div class="relative overflow-hidden">
                                    <img alt=""
                                         class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                         src="{{ asset('images/work/01.png') }}"/>
                                    <div
                                        class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                        View Project
                                    </div>
                                </div>
                                <div
                                    class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    <div class="text-lg">Brandora - Creative Agency Website</div>
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                        <div>UI/UX design</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Work Card 2 -->
                    <div class="swiper-slide">
                        <a class="group" href="{{ url('/work') }}">
                            <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                                <div class="relative overflow-hidden">
                                    <img alt=""
                                         class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                         src="{{ asset('images/work/01.png') }}"/>
                                    <div
                                        class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                        View Project
                                    </div>
                                </div>
                                <div
                                    class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    <div class="text-lg">Brandora - Creative Agency Website</div>
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                        <div>UI/UX design</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Work Card 3 -->
                    <div class="swiper-slide">
                        <a class="group" href="{{ url('/work') }}">
                            <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                                <div class="relative overflow-hidden">
                                    <img alt=""
                                         class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                         src="{{ asset('images/work/01.png') }}"/>
                                    <div
                                        class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                        View Project
                                    </div>
                                </div>
                                <div
                                    class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    <div class="text-lg">Brandora - Creative Agency Website</div>
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                        <div>UI/UX design</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Work Card 4 -->
                    <div class="swiper-slide">
                        <a class="group" href="{{ url('/work') }}">
                            <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                                <div class="relative overflow-hidden">
                                    <img alt=""
                                         class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                         src="{{ asset('images/work/01.png') }}"/>
                                    <div
                                        class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                        View Project
                                    </div>
                                </div>
                                <div
                                    class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    <div class="text-lg">Brandora - Creative Agency Website</div>
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                        <div>UI/UX design</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Work Card 5 -->
                    <div class="swiper-slide">
                        <a class="group" href="{{ url('/work') }}">
                            <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                                <div class="relative overflow-hidden">
                                    <img alt=""
                                         class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                         src="{{ asset('images/work/01.png') }}"/>
                                    <div
                                        class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                        View Project
                                    </div>
                                </div>
                                <div
                                    class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    <div class="text-lg">Brandora - Creative Agency Website</div>
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                        <div>UI/UX design</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Work Card 6 -->
                    <div class="swiper-slide">
                        <a class="group" href="{{ url('/work') }}">
                            <div class="flex flex-col gap-2 p-2 bg-default-900 rounded-md">
                                <div class="relative overflow-hidden">
                                    <img alt=""
                                         class="rounded-md group-hover:blur-sm transition-all duration-700 overflow-hidden"
                                         src="{{ asset('images/work/01.png') }}"/>
                                    <div
                                        class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl bg-primary py-3 px-5.5 opacity-0 group-hover:opacity-100 group-hover:translate-y-1/2 transition-all duration-700">
                                        View Project
                                    </div>
                                </div>
                                <div
                                    class="p-2 gap-4 flex justify-between text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    <div class="text-lg">Brandora - Creative Agency Website</div>
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="bg-white/70 group-hover:bg-white/50 flex justify-center items-center rounded-full size-1.25 transition-all duration-700"></div>
                                        <div>UI/UX design</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="lg:py-37.5 md:py-25 py-12" id="about">
        <div class="inner-container-small">
            <div class="flex flex-col gap-12.5 relative">
                <div class="flex justify-center items-center gap-2.5">
                    <div class="relative z-10 md:-rotate-4 h-full">
                        <img alt="" class="rounded-md" src="{{ asset('images/avatar/ulum-1.jpg') }}"/>
                    </div>
                    <div
                        class="bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)] rounded-md p-5 flex flex-col justify-between md:h-58 h-48 md:max-w-47 max-w-42 md:rotate-11">
                        <h2 class="text-[42px] text-end font-medium">3+</h2>
                        <div class="text-lg text-end font-medium">Years of making the content creator work.</div>
                    </div>
                </div>
                <h2 class="md:text-2xl text-lg text-white/70 text-center">
                    I'm a content creator and graphic designer passionate about storytelling through content and visual design. Take a look at
                    <a class="text-white underline hover:text-primary" href="#work"> my projects</a>
                    to see how I help brands communicate, engage, and grow through creative solutions.
                </h2>
                <div>
                    <img alt="" class="mx-auto" src="{{ asset('images/svg/sign.svg') }}"/>
                </div>
                <div
                    class="font-body-alt text-white md:text-2xl text-lg z-10 absolute -top-5 start-0 transform -rotate-30">
                    Call me just "Ulum"
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="lg:pb-37.5 md:pb-25 pb-15" id="service">
        <div class="inner-container-small">
            <div class="mb-12.5">
                <h2 class="text-center lg:text-4xl md:text-[32px] text-2xl text-white">How Can I Help?</h2>
            </div>
            <div class="mb-12.5 flex flex-col gap-5">
                <div class="p-2 bg-default-900 rounded-md">
                    <div class="grid md:grid-cols-2 grid-cols-1 p-2 bg-body-bg">
                        <div class="p-7.5 h-full flex md:flex-col items-center justify-between">
                            <img alt="" class="size-12.5" src="{{ asset('images/svg/icon-7.svg') }}"/>
                            <h3 class="text-white md:text-2xl text-lg md:text-start text-end">Full-Stack web
                                development</h3>
                        </div>
                        <div class="bg-default-900 p-7.5 rounded-lg">
                            <div class="mb-2.5 text-base text-white/70">Robust frontend &amp; backend solutions.</div>
                            <ul class="list-disc ps-5 space-y-1.25 text-white/70" role="list">
                                <li> Frontend Development</li>
                                <li> Backend Architecture</li>
                                <li> Database Design</li>
                                <li> API Integration</li>
                            </ul>
                            <div class="my-7.5 border-t border-dashed border-white/20"></div>
                            <div class="text-white/70 mb-2.5">Tech Stack:</div>
                            <div class="flex gap-1.25">
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/2.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/5.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/4.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/3.svg') }}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 bg-default-900 rounded-md">
                    <div class="grid md:grid-cols-2 grid-cols-1 p-2 bg-body-bg">
                        <div class="p-7.5 h-full flex md:flex-col items-center justify-between">
                            <img alt="" class="size-12.5" src="{{ asset('images/svg/icon-8.svg') }}"/>
                            <h3 class="text-white md:text-2xl text-lg">Custom web design</h3>
                        </div>
                        <div class="bg-default-900 p-7.5 rounded-lg">
                            <div class="text-base text-white/70">Creating visually stunning, user-friendly websites
                                tailored to your brand's identity.
                            </div>
                            <div class="my-7.5 border-t border-dashed border-white/20"></div>
                            <div class="text-white/70 mb-2.5">Tech Stack:</div>
                            <div class="flex gap-1.25">
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/6.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/7.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/8.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/9.svg') }}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 bg-default-900 rounded-md">
                    <div class="grid md:grid-cols-2 grid-cols-1 p-2 bg-body-bg">
                        <div class="p-7.5 h-full flex md:flex-col items-center justify-between">
                            <img alt="" class="size-12.5" src="{{ asset('images/svg/icon-9.svg') }}"/>
                            <h3 class="text-white md:text-2xl text-lg">SEO optimization</h3>
                        </div>
                        <div class="bg-default-900 p-7.5 rounded-lg">
                            <div class="text-base text-white/70">Optimizing websites to boost search engine rankings and
                                drive organic traffic.
                            </div>
                            <div class="my-7.5 border-t border-dashed border-white/20"></div>
                            <div class="text-white/70 mb-2.5">Tech Stack:</div>
                            <div class="flex gap-1.25">
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/10.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/11.svg') }}"/>
                                <img alt="" class="w-10.5 h-7" src="{{ asset('images/svg/12.svg') }}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-7/10 mx-auto text-center flex flex-col gap-5">
                <h4 class="md:text-xl text-base text-white">How Can I Help?</h4>
                <p class="text-white/70 text-base font-medium">Need a developer who can bring your vision to life with
                    clean code and smart solutions?</p>
                <div>
                    <a class="inline-flex items-center rounded-md gap-2.5 bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)] text-body-bg py-3 px-5.5 hover:shadow-[0_0_10px_#7af080]"
                       href="#contact">
                        <img alt="Calendar Icon" class="size-3.5" loading="eager"
                             src="{{ asset('images/svg/calendar-dark.svg') }}"/>
                        <div class="font-medium">Schedule a call</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Timeline / Experience Section -->
    <section class="lg:pb-37.5 md:pb-25 pb-15" id="timeline">
        <div class="inner-container-small">
            <div class="flex justify-between items-center mb-12.5">
                <h2 class="lg:text-4xl md:text-[32px] text-2xl text-white">Career Timeline</h2>
                <div class="text-base text-white/70">@2014 - Present</div>
            </div>
            <div>
                <div class="flex md:gap-12.5 gap-7.5">
                    <div class="lg:min-w-40 min-w-22">
                        <div class="text-base text-white/70">2022 - Present</div>
                    </div>
                    <div
                        class="relative last:after:hidden after:absolute after:top-4 after:border-s after:border-dashed after:bottom-0 after:start-1 after:w-px after:-translate-x-[0.5px] after:border-white/30">
                        <div class="relative z-10 flex justify-center items-center">
                            <div class="size-2.5 rounded-full bg-white/30"></div>
                        </div>
                    </div>
                    <div class="md:pb-12.5 pb-7.5 flex flex-col gap-2.5">
                        <img alt="" class="h-6.25 w-25" src="{{ asset('images/timeline/timeline-1.svg') }}"/>
                        <h3 class="md:text-xl text-base text-white">Lead Full-Stack Developer</h3>
                        <p class="text-white/70">Focused on performance optimization, system design, and full-stack
                            development using React, Node.js, and AWS.</p>
                    </div>
                </div>
                <div class="flex md:gap-12.5 gap-7.5">
                    <div class="lg:min-w-40 min-w-22">
                        <div class="text-base text-white/70">2019 - 2022</div>
                    </div>
                    <div
                        class="relative last:after:hidden after:absolute after:top-4 after:border-s after:border-dashed after:bottom-0 after:start-1 after:w-px after:-translate-x-[0.5px] after:border-white/30">
                        <div class="relative z-10 flex justify-center items-center">
                            <div class="size-2.5 rounded-full bg-white/30"></div>
                        </div>
                    </div>
                    <div class="md:pb-12.5 pb-7.5 flex flex-col gap-2.5">
                        <img alt="" class="h-6.25 w-25" src="{{ asset('images/timeline/timeline-2.svg') }}"/>
                        <h3 class="md:text-xl text-base text-white">Senior Frontend Developer</h3>
                        <p class="text-white/70">Designed and developed UI/UX for multiple SaaS platforms and eCommerce
                            sites. Worked with Tailwind CSS and GSAP.</p>
                    </div>
                </div>
                <div aria-labelledby="hs-show-hide-collapse"
                     class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                     id="timeline-collapse">
                    <div class="flex md:gap-12.5 gap-7.5">
                        <div class="lg:min-w-40 min-w-22">
                            <div class="text-base text-white/70">2016 - 2019</div>
                        </div>
                        <div
                            class="relative last:after:hidden after:absolute after:top-4 after:border-s after:border-dashed after:bottom-0 after:start-1 after:w-px after:-translate-x-[0.5px] after:border-white/30">
                            <div class="relative z-10 flex justify-center items-center">
                                <div class="size-2.5 rounded-full bg-white/30"></div>
                            </div>
                        </div>
                        <div class="md:pb-12.5 pb-7.5 flex flex-col gap-2.5">
                            <img alt="" class="h-6.25 w-25" src="{{ asset('images/timeline/timeline-3.svg') }}"/>
                            <h3 class="md:text-xl text-base text-white">Web Developer</h3>
                            <p class="text-white/70">Handled frontend and backend development for client projects using
                                Laravel and Bootstrap.</p>
                        </div>
                    </div>
                    <div class="flex md:gap-12.5 gap-7.5">
                        <div class="lg:min-w-40 min-w-22">
                            <div class="text-base text-white/70">2014 - 2016</div>
                        </div>
                        <div
                            class="relative last:after:hidden after:absolute after:top-4 after:border-s after:border-dashed after:bottom-0 after:start-1 after:w-px after:-translate-x-[0.5px] after:border-white/30">
                            <div class="relative z-10 flex justify-center items-center">
                                <div class="size-2.5 rounded-full bg-white/30"></div>
                            </div>
                        </div>
                        <div class="md:pb-12.5 pb-7.5 flex flex-col gap-2.5">
                            <img alt="" class="h-6.25 w-25" src="{{ asset('images/timeline/timeline-4.svg') }}"/>
                            <h3 class="md:text-xl text-base text-white">Junior Developer</h3>
                            <p class="text-white/70">Contributed to small features, bug fixes, and documentation using
                                HTML, CSS, PHP, and jQuery.</p>
                        </div>
                    </div>
                </div>
                <div class="flex md:gap-12.5 gap-7.5">
                    <div class="lg:min-w-40 min-w-22"></div>
                    <div
                        class="relative last:after:hidden after:absolute after:top-4 after:border-s after:border-dashed after:bottom-0 after:start-1 after:w-px after:-translate-x-[0.5px] after:border-white/30">
                        <div class="relative z-10 flex justify-center items-center">
                            <div class="size-2.5 rounded-full bg-white/30"></div>
                        </div>
                    </div>
                    <p class="mt-2 text-end">
                        <button aria-controls="timeline-collapse" aria-expanded="false"
                                class="hs-collapse-toggle inline-flex items-center gap-2"
                                data-hs-collapse="#timeline-collapse" id="hs-show-hide-collapse" type="button">
                            <div class="flex justify-center items-center size-5 rounded-md bg-primary">
                                <i class="iconify lucide--chevron-up hs-collapse-open:block hidden size-4"></i>
                                <i class="iconify lucide--chevron-down hs-collapse-open:hidden block size-4"></i>
                            </div>
                            <span class="hs-collapse-open:hidden text-white text-base font-medium">Show all</span>
                            <span
                                class="hs-collapse-open:block hidden text-white text-base font-medium">Show less</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Awards Section -->
    <section class="lg:pb-37.5 md:pb-25 pb-15" id="award">
        <div class="inner-container-small">
            <div class="relative">
                <div class="font-body-alt text-2xl text-white/70 md:absolute -top-6.5 end-0 md:rotate-10">The “I made
                    this” moments
                </div>
            </div>
            <h2 class="lg:text-4xl md:text-[32px] text-2xl text-white mb-12.5 md:text-start text-center">My Proud
                Moments</h2>
            <div class="flex flex-col md:gap-7.5 gap-5">
                <div class="flex gap-12.5 group relative">
                    <img alt="" class="h-4.5" src="{{ asset('images/client/client-1.svg') }}"/>
                    <h3 class="md:text-xl text-base text-white">Site of the day / No-Code honor</h3>
                    <div class="text-base text-white/70 ms-auto">4X</div>
                    <img alt=""
                         class="w-16 h-20 absolute -top-6.5 end-20 -bottom-6.5 -rotate-10 group-hover:-rotate-20 opacity-0 group-hover:opacity-100 transition-all duration-500"
                         src="{{ asset('images/award/award-1.png') }}"/>
                </div>
                <div class="border-t border-white/20 border-dashed"></div>
                <div class="flex gap-12.5 group relative">
                    <img alt="" class="h-4.5" src="{{ asset('images/client/client-17.svg') }}"/>
                    <h3 class="md:text-xl text-base text-white">Red dot design awards</h3>
                    <div class="text-base text-white/70 ms-auto">2X</div>
                    <img alt=""
                         class="w-16 h-20 absolute -top-6.5 end-20 -bottom-6.5 -rotate-10 group-hover:-rotate-20 opacity-0 group-hover:opacity-100 transition-all duration-500"
                         src="{{ asset('images/award/award-2.png') }}"/>
                </div>
                <div class="border-t border-white/20 border-dashed"></div>
                <div class="flex gap-12.5 group relative">
                    <img alt="" class="h-4.5" src="{{ asset('images/client/client-5.svg') }}"/>
                    <h3 class="md:text-xl text-base text-white">Site of the month</h3>
                    <div class="text-base text-white/70 ms-auto">3X</div>
                    <img alt=""
                         class="w-16 h-20 absolute -top-6.5 end-20 -bottom-6.5 -rotate-10 group-hover:-rotate-20 opacity-0 group-hover:opacity-100 transition-all duration-500"
                         src="{{ asset('images/award/award-3.png') }}"/>
                </div>
                <div class="border-t border-white/20 border-dashed"></div>
                <div class="flex gap-12.5 group relative">
                    <img alt="" class="h-4.5" src="{{ asset('images/client/client-4.svg') }}"/>
                    <h3 class="md:text-xl text-base text-white">Site of the month / Honorable mention</h3>
                    <div class="text-base text-white/70 ms-auto">2X</div>
                    <img alt=""
                         class="w-16 h-20 absolute -top-6.5 end-20 -bottom-6.5 -rotate-10 group-hover:-rotate-20 opacity-0 group-hover:opacity-100 transition-all duration-500"
                         src="{{ asset('images/award/award-4.png') }}"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Demo / Preview Section -->
    <section class="lg:pb-37.5 md:pb-25 pb-15" id="demo">
        <div class="inner-container-small">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-5 mb-12.5">
                <div class="bg-default-900 rounded-md overflow-hidden">
                    <div class="flex flex-col gap-12.5">
                        <div class="p-7.5 flex flex-col gap-1.25">
                            <h2 class="lg:text-4xl md:text-[32px] text-2xl text-white">28<span
                                    class="text-primary">+</span></h2>
                            <p class="text-lg text-white/70">Projects built &amp; deployed with care</p>
                        </div>
                        <a class="-rotate-10" href="{{ url('/work') }}">
                            <div class="flex flex-nowrap w-full overflow-hidden mb-2">
                                <ul class="infinite-scroll flex justify-start items-center [&amp;&gt;li]:mx-1 [&amp;&gt;li&gt;img]:max-w-none">
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-1.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-2.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-3.png') }}"/></li>
                                </ul>
                                <ul class="infinite-scroll flex justify-start items-center [&amp;&gt;li]:mx-1 [&amp;&gt;li&gt;img]:max-w-none">
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-1.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-2.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-3.png') }}"/></li>
                                </ul>
                            </div>
                            <div class="flex flex-nowrap w-full overflow-hidden">
                                <ul class="infinite-scroll-inverse flex justify-start items-center [&amp;&gt;li]:mx-1 [&amp;&gt;li&gt;img]:max-w-none">
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-7.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-5.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-8.png') }}"/></li>
                                </ul>
                                <ul class="infinite-scroll-inverse flex justify-start items-center [&amp;&gt;li]:mx-1 [&amp;&gt;li&gt;img]:max-w-none">
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-7.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-5.png') }}"/></li>
                                    <li><img alt="" class="w-25 h-17 rounded-xl"
                                             src="{{ asset('images/marquee/marquee-8.png') }}"/></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <div
                    class="p-7 rounded-md bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)]">
                    <h3 class="text-3xl">Book a 30 min intro call</h3>
                    <div class="border border-default-950 border-dashed my-5"></div>
                    <div class="flex flex-col gap-5">
                        <div class="text-default-600">What happens in 30 mins:</div>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex gap-2.5 items-center">
                                <img alt="" class="size-3.5" src="{{ asset('images/svg/check.svg') }}"/>
                                <div class="font-medium">Short intro</div>
                            </div>
                            <div class="flex gap-2.5 items-center">
                                <img alt="" class="size-3.5" src="{{ asset('images/svg/check.svg') }}"/>
                                <div class="font-medium">Dig into your project goals</div>
                            </div>
                            <div class="flex gap-2.5 items-center">
                                <img alt="" class="size-3.5" src="{{ asset('images/svg/check.svg') }}"/>
                                <div class="font-medium">Clear action plan</div>
                            </div>
                        </div>
                        <div>
                            <a class="p-0.75 rounded-xl bg-body-bg/40 hover:shadow-[0_0_40px_#0a0a0a4d] transition justify-center items-center inline-flex"
                               href="#contact">
                                <div class="flex items-center gap-2.5 rounded-xl bg-body-bg text-white py-3 px-5.5">
                                    <img alt="Calendar Icon" class="size-3.5" loading="eager"
                                         src="{{ asset('images/svg/calendar.svg') }}"/>
                                    <div class="font-medium">Schedule a call</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:gap-7.5 gap-5">
                <h4 class="md:text-xl text-base text-white">Currently Working On:</h4>
                <div class="flex flex-col gap-5">
                    <div class="grid md:grid-cols-3 grid-cols-2 gap-2.5">
                        <div class="flex gap-2.5 text-white/70">
                            <i class="iconify lucide--chevron-right size-5"></i>
                            <div class="text-base">Landing page kit</div>
                        </div>
                        <div class="flex gap-2.5 text-white/70">
                            <i class="iconify lucide--chevron-right size-5"></i>
                            <div class="text-base">Design newsletter</div>
                        </div>
                        <div class="flex gap-2.5 text-white/70">
                            <i class="iconify lucide--chevron-right size-5"></i>
                            <div class="text-base">Filming a video</div>
                        </div>
                        <div class="flex gap-2.5 text-white/70">
                            <div>
                                <i class="iconify lucide--chevron-right size-5"></i>
                            </div>
                            <div class="text-base">Creating a component library</div>
                        </div>
                        <div class="flex gap-2.5 text-white/70">
                            <i class="iconify lucide--chevron-right size-5"></i>
                            <div class="text-base">Writing a blog</div>
                        </div>
                        <div class="flex gap-2.5 text-white/70">
                            <i class="iconify lucide--chevron-right size-5"></i>
                            <div class="text-base">Branding template</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews / Testimonials Section -->
    <section id="review">
        <div class="inner-container-small">
            <div class="grid grid-cols-2 gap-2.5 mb-12.5">
                <h2 class="text-white lg:text-4xl md:text-[32px] text-2xl">Reviews That Speak Volumes</h2>
                <div class="flex flex-col gap-2.5">
                    <div class="-space-x-1 flex justify-end">
                        <img alt="" class="size-10 rounded-full" src="{{ asset('images/avatar/avata3.png') }}"/>
                        <img alt="Aavatar 1 Image" class="size-10 rounded-full"
                             src="{{ asset('images/avatar/avatar-1.png') }}"/>
                        <img alt="Aavatar 2 Image" class="size-10 rounded-full"
                             src="{{ asset('images/avatar/avatar-2.png') }}"/>
                        <img alt="Aavatar 4 Image" class="size-10 rounded-full"
                             src="{{ asset('images/avatar/avatar-4.png') }}"/>
                    </div>
                    <div class="text-white/70 text-end">Trusted by <span class="text-white">10K </span>users worldwide
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-nowrap w-full overflow-hidden">
            <ul class="infinite-scroll flex justify-start items-center [&amp;&gt;li]:mx-2.5 mb-5">
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 9 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-9.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Jessica Moore</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@jessica</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Everything is now in one place, and the
                                experience is incredibly smooth.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 1 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-1.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Sarah Head</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@headS</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Professional, skilled, and fun to work with.
                                Made complex things feel simple.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 4 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-4.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Emily Reed</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@emieed</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">A game-changer for our startup. Brought both
                                strategy and execution to the table.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 2 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-2.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Chris Max</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@maxicris</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Handled everything from UX to backend without
                                missing a beat.</p>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="infinite-scroll flex justify-start items-center [&amp;&gt;li]:mx-2.5 mb-5">
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 9 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-9.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Jessica Moore</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@jessica</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Everything is now in one place, and the
                                experience is incredibly smooth.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 1 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-1.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Sarah Head</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@headS</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Professional, skilled, and fun to work with.
                                Made complex things feel simple.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 4 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-4.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Emily Reed</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@emieed</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">A game-changer for our startup. Brought both
                                strategy and execution to the table.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 2 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-2.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Chris Max</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@maxicris</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Handled everything from UX to backend without
                                missing a beat.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex flex-nowrap w-full overflow-hidden">
            <ul class="infinite-scroll-inverse flex justify-start items-center [&amp;&gt;li]:mx-2.5">
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 9 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-9.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Jessica Moore</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@jessica</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Everything is now in one place, and the
                                experience is incredibly smooth.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 1 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-1.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Sarah Head</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@headS</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Professional, skilled, and fun to work with.
                                Made complex things feel simple.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 4 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-4.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Emily Reed</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@emieed</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">A game-changer for our startup. Brought both
                                strategy and execution to the table.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 2 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-2.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Chris Max</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@maxicris</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Handled everything from UX to backend without
                                missing a beat.</p>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="infinite-scroll-inverse flex justify-start items-center [&amp;&gt;li]:mx-2.5">
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 9 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-9.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Jessica Moore</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@jessica</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Everything is now in one place, and the
                                experience is incredibly smooth.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 1 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-1.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Sarah Head</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@headS</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Professional, skilled, and fun to work with.
                                Made complex things feel simple.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 4 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-4.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Emily Reed</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@emieed</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">A game-changer for our startup. Brought both
                                strategy and execution to the table.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-default-900 rounded-md p-7.5 gap-5 flex w-112.5">
                        <img alt="Aavatar 2 Image" class="rounded-full size-12.5"
                             src="{{ asset('images/avatar/avatar-2.png') }}"/>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="text-white">Chris Max</div>
                                    <div class="text-white/70 -mt-3.5 text-[28px]">.</div>
                                    <div class="text-white/70">@maxicris</div>
                                </div>
                                <a href="https://www.x.com/" target="_blank"><img alt="Social Icon" class="size-3"
                                                                                  src="{{ asset('images/svg/x.svg') }}"/></a>
                            </div>
                            <p class="text-base text-white/70 font-medium">Handled everything from UX to backend without
                                missing a beat.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Pricing Section -->
    <section class="lg:pt-37.5 md:pt-25 pt-12" id="pricing">
        <div class="inner-container-small">
            <div class="lg:max-w-7/10 mx-auto mb-12.5 text-center">
                <h2 class="mb-2.5 text-white lg:text-4xl md:text-[32px] text-2xl">Let's Talk Pricing</h2>
                <p class="text-lg text-white/70">Simple, transparent, and tailored to your project needs. Choose what
                    works best for you.</p>
            </div>
            <div>
                <div class="bg-default-900 rounded-md py-2 px-3.75 flex items-center gap-4 mb-7.5 max-w-7/10 mx-auto">
                    <label class="relative inline-block w-11 h-6 cursor-pointer" for="toggle-count-switch">
                        <input class="peer sr-only" id="toggle-count-switch" type="checkbox"/>
                        <span
                            class="absolute inset-0 bg-default-800 rounded-full transition-colors duration-200 ease-in-out peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
                        <span
                            class="absolute top-1/2 start-0.5 -translate-y-1/2 size-5 bg-white rounded-full shadow-xs transition-transform duration-200 ease-in-out peer-checked:translate-x-full peer-checked:bg-primary"></span>
                    </label>
                    <div class="text-lg text-white/70">Backend Development</div>
                    <div class="py-1.25 px-2.5 bg-body-bg rounded-md">
                        <div class="text-white/70 text-sm">Add-on</div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-5 mb-7.5">
                    <div class="flex flex-col p-7.5 gap-7.5 bg-default-900 rounded-md">
                        <div class="flex gap-2.5 items-center">
                            <div class="size-2.5 bg-primary rounded-full"></div>
                            <h3 class="md:text-xl text-base text-white">Starter Plan</h3>
                        </div>
                        <h3 class="flex items-baseline">
                            <span class="text-[42px] font-medium text-white">$</span>
                            <p class="text-[42px] font-medium text-white"
                               data-hs-toggle-count='{"target": "#toggle-count-switch", "min": 799, "max": 900}'>
                                799
                            </p>
                            <span class="text-lg text-white/70">/mo</span>
                        </h3>
                        <ul class="text-white/70 space-y-2.5 ps-5 list-disc" role="list">
                            <li>1 Project</li>
                            <li>Up to 5 pages/screens</li>
                            <li>Responsive Design</li>
                            <li>Basic SEO setup</li>
                            <li>2 Week Delivery</li>
                        </ul>
                    </div>
                    <div
                        class="flex flex-col p-7.5 gap-7.5 bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)] rounded-md">
                        <div class="flex gap-2.5 items-center">
                            <div class="size-2.5 rounded-full bg-body-bg"></div>
                            <h3 class="text-xl">Pro Plan</h3>
                        </div>
                        <h3 class="flex items-baseline">
                            <span class="text-[42px] font-medium text-body-bg">$</span>
                            <p class="text-[42px] font-medium text-body-bg"
                               data-hs-toggle-count='{"target": "#toggle-count-switch", "min": 899, "max": 1100}'>
                                899
                            </p>
                            <span class="text-lg text-default-600">/mo</span>
                        </h3>
                        <ul class="space-y-2.5 ps-5 list-disc" role="list">
                            <li>5 Project</li>
                            <li>Up to 15 pages/screens</li>
                            <li>Responsive Design</li>
                            <li>Basic SEO setup</li>
                            <li>5 Week Delivery</li>
                        </ul>
                    </div>
                </div>
                <a class="text-end text-default-400 block mb-7.5" href="{{ url('/privacy-policy') }}">* <span
                        class="underline underline-of">Privacy Policy</span></a>
                <div class="flex justify-center">
                    <a class="p-0.75 rounded-xl bg-white/30 justify-center items-center inline-flex"
                       href="https://unifato.com/" target="_blank">
                        <div class="flex items-center gap-2.5 rounded-xl bg-white py-3 px-5.5">
                            <img alt="Calendar Icon" class="size-3.5" loading="eager"
                                 src="{{ asset('images/svg/calendar-dark.svg') }}"/>
                            <div class="font-medium">Get started</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section -->
    <section class="lg:py-37.5 md:py-25 py-12" id="blog">
        <div class="inner-container-small">
            <h2 class="text-white lg:text-4xl md:text-[32px] text-2xl mb-12.5 text-center">Latest From the Blog</h2>
            <a href="{{ url('/blog/detail') }}">
                <div class="bg-default-900 rounded-lg p-5 gap-5 flex items-center group mb-5">
                    <div class="overflow-hidden rounded-md">
                        <img alt=""
                             class="h-25 w-28.75 rounded-md overflow-hidden group-hover:scale-105 transition-all duration-700"
                             src="{{ asset('images/blog/blog-1.png') }}"/>
                    </div>
                    <div class="py-2.5 flex flex-col gap-2.5">
                        <h2 class="text-white md:text-xl text-base group-hover:text-primary">Dark Mode Isn't Just a
                            Trend—It's Smart UX</h2>
                        <div class="text-white/70">October 11, 2025</div>
                    </div>
                    <i class="iconify lucide--chevron-right size-5 text-white"></i>
                </div>
            </a>
            <a href="{{ url('/blog/detail') }}">
                <div class="bg-default-900 rounded-lg p-5 gap-5 flex items-center group">
                    <div class="overflow-hidden rounded-md">
                        <img alt=""
                             class="h-25 w-28.75 rounded-md overflow-hidden group-hover:scale-105 transition-all duration-700"
                             src="{{ asset('images/blog/blog-2.png') }}"/>
                    </div>
                    <div class="py-2.5 flex flex-col gap-2.5">
                        <h2 class="text-white md:text-xl text-base group-hover:text-primary">How to Build a Scalable
                            Portfolio Site with Tailwind</h2>
                        <div class="text-white/70">October 15, 2025</div>
                    </div>
                    <i class="iconify lucide--chevron-right size-5 text-white"></i>
                </div>
            </a>
            <div class="flex justify-center mt-7.5">
                <a class="p-0.75 rounded-xl bg-white/30 justify-center items-center inline-flex"
                   href="{{ url('/blog/list') }}" target="_blank">
                    <div class="flex items-center gap-2.5 rounded-xl bg-white py-3 px-5.5">
                        <img alt="Calendar Icon" class="size-3.5" loading="eager"
                             src="{{ asset('images/svg/calendar-dark.svg') }}"/>
                        <div class="font-medium">View All Blog</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Social / CTA Section -->
    <section class="lg:pb-37.5 md:pb-25 pb-15" id="social">
        <div class="inner-container-small">
            <div class="relative">
                <div
                    class="font-body-alt text-white md:text-2xl text-lg z-10 absolute -top-5 start-0 transform -rotate-30">
                    My Internet Hangouts
                </div>
                <h2 class="lg:text-4xl md:text-[32px] text-2xl text-white text-center mb-12.5">Where I'm Active On</h2>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-5">
                    <div class="bg-default-900 rounded-md p-5 flex gap-2.5 group">
                        <a href="https://www.instagram.com/rullumgrafis" target="_blank">
                            <img alt="" class="size-12.5" src="{{ asset('images/social/threads.png') }}"/>
                        </a>
                        <div class="flex flex-col gap-1.25">
                            <div class="flex gap-1.25 items-center">
                                <h3 class="md:text-xl text-base text-white">@rullumgrafis</h3>
                                {{-- <img alt="" class="size-4" src="{{ asset('images/svg/verify-badge.svg') }}"/> --}}
                            </div>
                            <div class="text-white/70 group-hover:text-white/40 transition-all duration-700">6.9K+
                                followers
                            </div>
                        </div>
                    </div>
                    <div class="bg-default-900 rounded-md p-5 flex gap-2.5 group">
                        <a href="https://www.youtube.com/@rullumgrafis" target="_blank">
                            <img alt="" class="size-12.5" src="{{ asset('images/social/youtube.png') }}"/>
                        </a>
                        <div class="flex flex-col gap-1.25">
                            <div class="flex gap-1.25 items-center">
                                <h3 class="md:text-xl text-base text-white">@rullumgrafis</h3>
                                {{-- <img alt="" class="size-4" src="{{ asset('images/svg/verify-badge.svg') }}"/> --}}
                            </div>
                            <div class="text-white/70 group-hover:text-white/40 transition-all duration-700">5K+
                                connections
                            </div>
                        </div>
                    </div>
                    <div class="bg-default-900 rounded-md p-5 flex gap-2.5 group">
                        <a href="https://www.instagram.com/rullumgrafis" target="_blank">
                            <img alt="" class="size-12.5" src="{{ asset('images/social/instagram.svg') }}"/>
                        </a>
                        <div class="flex flex-col gap-1.25">
                            <div class="flex gap-1.25 items-center">
                                <h3 class="md:text-xl text-base text-white">@rullumgrafis</h3>
                                {{-- <img alt="" class="size-4" src="{{ asset('images/svg/verify-badge.svg') }}"/> --}}
                            </div>
                            <div class="text-white/70 group-hover:text-white/40 transition-all duration-700">10K+
                                followers
                            </div>
                        </div>
                    </div>
                    <div class="bg-default-900 rounded-md p-5 flex gap-2.5 group">
                        <a href="https://www.facebook.com/people/Fakhrul-Ulum/100089885798855/?rdid=vdd51yuut3mcGLu1&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F18kMsTb1WA%2F" target="_blank">
                            <img alt="" class="size-12.5" src="{{ asset('images/social/facebook.svg') }}"/>
                        </a>
                        <div class="flex flex-col gap-1.25">
                            <div class="flex gap-1.25 items-center">
                                <h3 class="md:text-xl text-base text-white">@rullumgrafis</h3>
                            </div>
                            <div class="text-white/70 group-hover:text-white/40 transition-all duration-700">12K+
                                followers
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
