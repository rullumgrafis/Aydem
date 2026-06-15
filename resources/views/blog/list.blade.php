@extends('shared.base', ['title' => 'rullumgrafis'])



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
                <div class="flex flex-col gap-2.5 text-center">
                    <h1 class="lg:text-[42px] md:text-4xl text-3xl">Latest From the Blog</h1>
                    <p class="text-base">I craft innovative websites, brands, and strategies that drive real impact.</p>
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
    <section class="lg:pb-37.5 md:pb-25 pb-12 pt-20">
        <div class="inner-container-small">
            <div class="flex flex-col gap-5">
                <a href="/blog/dark-mode-isnt-just-a-trend--its-smart-ux">
                    <div class="md:p-5 p-4 flex flex-col gap-5 bg-default-900 rounded-lg group">
                        <div class="overflow-hidden lg:h-75 h-auto rounded-lg">
                            <img alt=""
                                 class="rounded-lg group-hover:scale-105 transition-all duration-700 overflow-hidden"
                                 src="{{ asset('images/blog/blog-1.png') }}"/>
                        </div>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex gap-2.5 items-center">
                                <div
                                    class="bg-body-bg rounded-md py-1.25 px-2.5 text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    UX/UI Design
                                </div>
                                <div class="text-white/70 group-hover:text-white/50 transition-all duration-500">October
                                    11, 2025
                                </div>
                            </div>
                            <h2 class="md:text-xl text-base text-white">Dark Mode Isn't Just a Trend—It's Smart UX</h2>
                        </div>
                    </div>
                </a>
                <a href="/blog/dark-mode-isnt-just-a-trend--its-smart-ux">
                    <div class="md:p-5 p-4 flex flex-col gap-5 bg-default-900 rounded-lg group">
                        <div class="overflow-hidden lg:h-75 h-auto rounded-lg">
                            <img alt=""
                                 class="rounded-lg group-hover:scale-105 transition-all duration-700 overflow-hidden"
                                 src="{{ asset('images/blog/blog-2.png') }}"/>
                        </div>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex gap-2.5 items-center">
                                <div
                                    class="bg-body-bg rounded-md py-1.25 px-2.5 text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    No-Code
                                </div>
                                <div class="text-white/70 group-hover:text-white/50 transition-all duration-500">October
                                    15, 2025
                                </div>
                            </div>
                            <h2 class="md:text-xl text-base text-white">How to Build a Scalable Portfolio Site with
                                Tailwind</h2>
                        </div>
                    </div>
                </a>
                <a href="/blog/dark-mode-isnt-just-a-trend--its-smart-ux">
                    <div class="md:p-5 p-4 flex flex-col gap-5 bg-default-900 rounded-lg group">
                        <div class="overflow-hidden lg:h-75 h-auto rounded-lg">
                            <img alt=""
                                 class="rounded-lg group-hover:scale-105 transition-all duration-700 overflow-hidden"
                                 src="{{ asset('images/blog/blog-3.png') }}"/>
                        </div>
                        <div class="flex flex-col gap-2.5">
                            <div class="flex gap-2.5 items-center">
                                <div
                                    class="bg-body-bg rounded-md py-1.25 px-2.5 text-white/70 group-hover:text-white/50 transition-all duration-700">
                                    Development
                                </div>
                                <div class="text-white/70 group-hover:text-white/50 transition-all duration-500">October
                                    11, 2025
                                </div>
                            </div>
                            <h2 class="md:text-xl text-base text-white">My favorite tools for Full-Stack development in
                                2025</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pt-5 grid grid-cols-3 gap-4 items-center justify-between">
                <div></div>
                <div class="text-lg text-white/70 text-center">1 / 2</div>
                <button class="rounded-lg p-0.75 bg-white/30">
                    <div class="bg-white flex gap-2.5 items-center justify-center rounded-lg py-3 px-5.5">
                        <div class="w-inline-block">Next</div>
                        <i class="iconify lucide--chevron-right size-4"></i>
                    </div>
                </button>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
