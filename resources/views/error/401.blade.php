@extends('shared.base', ['title' => '401'])



@section('styles')

@endsection

@section('content')
    <section class="relative h-screen md:flex items-center justify-center">
        <div class="absolute top-65 start-1/2 -translate-x-1/2 overflow-hidden">
            <div class="md:w-200 w-92 mx-auto md:px-7.5 px-5">
                <div class="md:flex hidden rounded-2xl p-3 bg-default-900 overflow-hidden">
                    <div class="bg-body-bg w-full h-15 overflow-hidden"></div>
                </div>
            </div>
        </div>
        <div class="md:w-165 mx-auto lg:p-0 px-3.75 pt-3.75">
            <div
                class="relative z-10 flex flex-col overflow-hidden gap-20 bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)]">
                <div
                    class="absolute z-10 md:h-15 h-12 w-full start-0 end-0 top-0 bg-linear-to-b to-body-bg/0 via-body-bg/65 from-body-bg"></div>
                <div
                    class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:start-3.75 start-2 z-10 absolute opacity-40"></div>
                <div
                    class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:end-3.75 end-2 z-10 absolute opacity-40"></div>
                <img alt="" class="absolute -bottom-1.25 w-full h-6 object-cover bg-center"
                     src="{{ asset('images/svg/shape.svg') }}"/>
                <div class="lg:p-15 p-5 text-center">
                    <h1 class="mb-2.5 lg:text-4xl md:text-[32px] text-[26px]">Protected Page</h1>
                    <label class="text-lg block mb-1.5 text-default-600" for="pass">Password</label>
                    <input class="flex w-full bg-white/50 border-0 rounded-md p-3 mb-2.5" id="pass"
                           placeholder="Password" required="" type="password"/>
                    <button class="py-2.5 px-6.25 rounded-lg bg-white font-bold text-base w-full">Submit</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
