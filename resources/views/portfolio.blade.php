<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    @vite(['resources/js/app.js'])
</head>

<body class="bg-black text-white">

<section class="pt-20 pb-20 lg:pt-32">

    <div class="container-small mx-auto px-4">

        <!-- Heading -->
        <div class="mb-12">
            <h1 class="mb-4 text-5xl font-bold">
                Portfolio
            </h1>

            <p class="max-w-2xl text-white/60">
                Berikut beberapa project yang telah saya kerjakan mulai dari
                website company profile, dashboard management, sistem informasi,
                UI/UX design, hingga desain grafis.
            </p>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Project 1 -->
            <div class="overflow-hidden rounded-xl border border-white/10 bg-zinc-900 transition-all duration-300 hover:-translate-y-1 hover:border-primary">

                <img
                    src="{{ asset('images/work/01.png') }}"
                    alt="Company Profile Website"
                    class="h-60 w-full object-cover"
                >

                <div class="p-5">
                    <span class="text-sm text-primary">
                        Web Development
                    </span>

                    <h3 class="mt-2 mb-3 text-xl font-semibold">
                        Company Profile Website
                    </h3>

                    <p class="mb-5 text-white/60">
                        Website company profile modern dengan desain responsif.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2 text-primary hover:text-white transition-all">
                        View Project →
                    </a>
                </div>

            </div>

            <!-- Project 2 -->
            <div class="overflow-hidden rounded-xl border border-white/10 bg-zinc-900 transition-all duration-300 hover:-translate-y-1 hover:border-primary">

                <img
                    src="{{ asset('images/work/02.png') }}"
                    alt="Dashboard Management"
                    class="h-60 w-full object-cover"
                >

                <div class="p-5">
                    <span class="text-sm text-primary">
                        Laravel
                    </span>

                    <h3 class="mt-2 mb-3 text-xl font-semibold">
                        Dashboard Management
                    </h3>

                    <p class="mb-5 text-white/60">
                        Sistem dashboard untuk monitoring data bisnis.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2 text-primary hover:text-white transition-all">
                        View Project →
                    </a>
                </div>

            </div>

            <!-- Project 3 -->
            <div class="overflow-hidden rounded-xl border border-white/10 bg-zinc-900 transition-all duration-300 hover:-translate-y-1 hover:border-primary">

                <img
                    src="{{ asset('images/work/03.png') }}"
                    alt="Mobile App Design"
                    class="h-60 w-full object-cover"
                >

                <div class="p-5">
                    <span class="text-sm text-primary">
                        UI / UX Design
                    </span>

                    <h3 class="mt-2 mb-3 text-xl font-semibold">
                        Mobile App Design
                    </h3>

                    <p class="mb-5 text-white/60">
                        Desain aplikasi mobile menggunakan Figma.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2 text-primary hover:text-white transition-all">
                        View Project →
                    </a>
                </div>

            </div>

        </div>

        <!-- Back Button -->
        <div class="mt-12 text-center">
            <a
                href="{{ url('/') }}"
                class="inline-flex items-center gap-2 rounded-lg bg-primary px-6 py-3 text-white transition-all hover:opacity-90"
            >
                ← Back Home
            </a>
        </div>

    </div>

</section>

</body>
</html>