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
    ```blade
<section class="lg:pb-37.5 md:pb-25 pb-12 pt-20">
    <div class="inner-container-small">

        <div class="mb-12">

            <!-- Search -->
            <div class="max-w-2xl">
                <div class="relative">
                    <i class="iconify lucide--search absolute left-5 top-1/2 -translate-y-1/2 text-white/40 text-xl"></i>

                    <input
                        type="text"
                        placeholder="Looking for articles..."
                        class="w-full h-14 pl-14 pr-5 rounded-full bg-white/5 border border-white/10 text-white placeholder:text-white/40 focus:outline-none focus:border-green-400 transition-all duration-300"
                    >
                </div>
            </div>
        </div>

        <!-- Blog List -->
        <div class="flex flex-col gap-6">

            <!-- Blog Item 1 -->
            <a href="/blog/detail" onclick="openBlogModal()">
                <article class="group bg-default-900 rounded-2xl border border-white/5 hover:border-white/10 overflow-hidden transition-all duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="{{ asset('images/blog/blog-1.png') }}"
                            alt="Dark Mode"
                            class="w-full group-hover:scale-105 transition-all duration-700"
                        >
                    </div>

                    <div class="p-5 flex flex-col gap-3">

                        <div class="flex items-center gap-3 text-sm">

                            <span class="bg-body-bg rounded-lg px-3 py-1.5 text-white/70">
                                UX/UI Design
                            </span>

                            <span class="text-white/50">
                                October 11, 2025
                            </span>

                        </div>

                        <h2 class="text-xl font-semibold text-white group-hover:text-green-400 transition-all">
                            Dark Mode Isn't Just a Trend—It's Smart UX
                        </h2>

                    </div>
                </article>
            </a>

            <!-- Blog Item 2 -->
            <a href="/blog/how-to-build-a-scalable-portfolio-site-with-tailwind">
                <article class="group bg-default-900 rounded-2xl border border-white/5 hover:border-white/10 overflow-hidden transition-all duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="{{ asset('images/blog/blog-2.png') }}"
                            alt="Tailwind"
                            class="w-full group-hover:scale-105 transition-all duration-700"
                        >
                    </div>

                    <div class="p-5 flex flex-col gap-3">

                        <div class="flex items-center gap-3 text-sm">

                            <span class="bg-body-bg rounded-lg px-3 py-1.5 text-white/70">
                                No-Code
                            </span>

                            <span class="text-white/50">
                                October 15, 2025
                            </span>

                        </div>

                        <h2 class="text-xl font-semibold text-white group-hover:text-green-400 transition-all">
                            How to Build a Scalable Portfolio Site with Tailwind
                        </h2>

                    </div>
                </article>
            </a>

            <!-- Blog Item 3 -->
            <a href="/blog/my-favorite-tools-for-full-stack-development">
                <article class="group bg-default-900 rounded-2xl border border-white/5 hover:border-white/10 overflow-hidden transition-all duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="{{ asset('images/blog/blog-3.png') }}"
                            alt="Development"
                            class="w-full group-hover:scale-105 transition-all duration-700"
                        >
                    </div>

                    <div class="p-5 flex flex-col gap-3">

                        <div class="flex items-center gap-3 text-sm">

                            <span class="bg-body-bg rounded-lg px-3 py-1.5 text-white/70">
                                Development
                            </span>

                            <span class="text-white/50">
                                October 20, 2025
                            </span>

                        </div>

                        <h2 class="text-xl font-semibold text-white group-hover:text-green-400 transition-all">
                            My Favorite Tools for Full-Stack Development in 2025
                        </h2>

                    </div>
                </article>
            </a>

        </div>

        <!-- Pagination -->
        <div class="mt-12 flex items-center justify-between border-t border-white/10 pt-8">

    <div class="flex items-center gap-3">

        <button class="w-10 h-10 rounded-lg bg-white text-black font-medium">
            1
        </button>

        <button class="w-10 h-10 rounded-lg text-white/60 hover:text-white">
            2
        </button>

        <button class="w-10 h-10 rounded-lg text-white/60 hover:text-white">
            3
        </button>

    </div>

    <button class="group flex items-center gap-2 px-6 py-3 rounded-xl bg-white text-black font-medium">
        Next
        <i class="iconify lucide--arrow-right transition-transform group-hover:translate-x-1"></i>
    </button>

</div>

    </div>
</section>
```


    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
