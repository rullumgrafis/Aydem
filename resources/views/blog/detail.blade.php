@extends('shared.base', ['title' => 'detail blog'])



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
                    <h1 class="lg:text-[42px] md:text-4xl text-3xl">Dark Mode Isn't Just a Trend—It's Smart UX</h1>
                    <div class="flex gap-2.5 items-center justify-center">
                        <div class="bg-body-bg/20 rounded-lg py-1.25 px-2.5">
                            UX/UI Design
                        </div>
                        <div class="transition-all duration-500">October 11, 2025</div>
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
    <section class="lg:pb-37.5 md:pb-25 pb-12 pt-20">
        <div class="inner-container-small">
            <img alt="blog-1" class="rounded-xl mb-10" src="{{ asset('images/blog/blog-1.png') }}"/>
            <div class="md:pe-12.5 pe-5">
                <p class="md:mb-10 mb-5 text-sm text-white/70">Dark mode started as a visual novelty, but in 2025, it's
                    a UX standard. From mobile apps to SaaS dashboards, users increasingly expect the ability to switch
                    between light and dark themes.</p>
                <h5 class="lg:text-2xl md:text-xl text-lg text-white mb-2.5">Why Dark Mode Matters</h5>
                <h5 class="lg:text-2xl md:text-xl text-lg text-white mb-2.5">1. Reduces Eye Strain</h5>
                <p class="text-white/70 md:mb-10 mb-5 text-sm">In low-light environments, bright screens can cause
                    discomfort and fatigue. Dark mode offers a softer visual experience that's easier on the eyes,
                    especially for users who work long hours or browse at night.</p>
                <h5 class="lg:text-2xl md:text-xl text-lg text-white mb-2.5">2. Improves Battery Life</h5>
                <p class="text-white/70 md:mb-10 mb-5 text-sm">On OLED screens, dark pixels use significantly less
                    power. Apps with dark mode can extend device battery life—a small but meaningful improvement in
                    mobile UX.</p>
            </div>
            <img alt="blog-7" class="rounded-xl mb-10" src="{{ asset('images/blog/blog-7.png') }}"/>
            <div class="md:pe-12.5 pe-5">
                <h5 class="lg:text-2xl md:text-xl text-lg text-white mb-2.5">3. Caters to User Preference</h5>
                <p class="text-white/70 md:mb-10 mb-5 text-sm">Modern users want personalization. Offering light/dark
                    toggle options makes your interface feel more tailored. This also shows that your brand values
                    flexibility and user choice.</p>
                <h5 class="lg:text-2xl md:text-xl text-lg text-white mb-2.5">4. Looks Sleek &amp; Modern</h5>
                <p class="text-white/70 md:mb-10 mb-5 text-sm">Let's face it—dark UIs often look more sophisticated.
                    Used correctly, they can make your interface feel premium. Combined with minimalistic design and
                    strong contrast, dark mode enhances focus on key content.</p>
            </div>
        </div>
    </section>
    <section class="lg:pb-37.5 md:pb-25 pb-12">
        <div class="inner-container-small">
            <h2 class="md:mb-12.5 mb-8 lg:text-4xl md:text-[32px] text-[26px] text-white">Recent blog</h2>
            <a href="{{ url('/blog/detail') }}">
                <div class="bg-default-900 p-5 gap-5 flex items-center group mb-5">
                    <div>
                        <div class="overflow-hidden rounded-md h-25 w-28.75">
                            <img alt="blog-3"
                                 class="h-25 w-28.75 rounded-md overflow-hidden group-hover:scale-105 transition-all duration-700"
                                 src="{{ asset('images/blog/blog-3.png') }}"/>
                        </div>
                    </div>
                    <div class="py-2.5 flex flex-col gap-2.5">
                        <h2 class="text-white md:text-xl text-base group-hover:text-primary">My favorite tools for
                            Full-Stack development in 2025</h2>
                        <div class="text-white/70">October 11, 2025</div>
                    </div>
                    <i class="iconify lucide--chevron-right size-5 text-white md:block hidden"></i>
                </div>
            </a>
            <a href="{{ url('/blog/detail') }}">
                <div class="bg-default-900 p-5 gap-5 flex items-center group">
                    <div>
                        <div class="overflow-hidden rounded-md h-25 w-28.75">
                            <img alt="blog-5"
                                 class="h-25 w-28.75 rounded-md overflow-hidden group-hover:scale-105 transition-all duration-700"
                                 src="{{ asset('images/blog/blog-5.png') }}"/>
                        </div>
                    </div>
                    <div class="py-2.5 flex flex-col gap-2.5">
                        <h2 class="text-white md:text-xl text-base group-hover:text-primary">Why every business needs a
                            developer Who understands design</h2>
                        <div class="text-white/70">October 11, 2025</div>
                    </div>
                    <i class="iconify lucide--chevron-right size-5 text-white md:block hidden"></i>
                </div>
            </a>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
