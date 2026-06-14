@extends('shared.base', ['title' => 'Privacy Policy'])

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
                <div class="text-center">
                    <h1 class="lg:text-[42px] md:text-4xl text-3xl mb-2.5">Privacy Policy</h1>
                    <p>Last updated: Oct 06, 2025</p>
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
    <section class="lg:py-37.5 md:py-25 py-20">
        <div class="inner-container-small">
            <h2 class="text-white lg:text-2xl md:text-xl text-lg mb-2.5">Collecting Personal Information<br/></h2>
            <p class="md:mb-10 mb-5 text-white/70">All the Lorem Ipsum generators on the Internet tend to repeat
                predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate
                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                injected humour, or non-characteristic words etc.</p>
            <ul class="list-disc md:mb-10 mb-5 ps-6.5 space-y-2.5 text-white/70">
                <li>There are many variations of passages of Lorem Ipsum available.</li>
                <li>Iusto odio dignissimos ducimus qui blanditiis.</li>
                <li>Praesentium voluptatum deleniti atque.</li>
                <li>Quas molestias excepturi sint occaecati.</li>
            </ul>
            <p class="md:mb-10 mb-5 text-white/70">The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero
                are also reproduced in their exact original form, accompanied by English versions from the 1914
                translation by H. Rackham.</p>
            <h2 class="text-white lg:text-2xl md:text-xl text-lg mb-2.5">Sharing Personal Information</h2>
            <p class="md:mb-10 mb-5 text-white/70">There are many variations of passages of Lorem Ipsum available, but
                the majority have suffered alteration in some form, by injected humour, or randomised words which don't
                look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                Internet tend to repeat predefined chunks as necessary, making this the first true generator on the
                Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                always free from repetition, injected humour, or non-characteristic words etc.</p>
            <p class="md:mb-10 mb-5 text-white/70">It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum.</p>
            <ul class="list-decimal md:mb-10 mb-5 ps-6.5 space-y-2.5 text-white/70">
                <li>sometimes on purpose.</li>
                <li>classical Latin literature from 45 BC.</li>
                <li>The Extremes of Good and Evil.</li>
                <li>This book is a treatise on the theory.</li>
            </ul>
            <p class="md:mb-10 mb-5 text-white/70">Combined with a handful of model sentence structures, to generate
                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                injected humour, or non-characteristic words etc.</p>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
