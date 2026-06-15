```blade
@extends('shared.base', ['title' => 'Products'])

@section('content')

@include('shared.partials.navbar')

@php

$search = request()->get('search');
$category = request()->get('category', 'All');
$sort = request()->get('sort', 'latest');

$featured = [
    'image' => 'https://picsum.photos/1400/900?random=99',
    'title' => 'Ultimate Creator Bundle',
    'description' => '500+ premium assets for designers, creators, and content makers.',
    'price' => 'Rp49K',
    'link' => '#',
];

$products = collect([

    [
        'image' => 'https://picsum.photos/800/1000?random=1',
        'category' => 'Template',
        'title' => 'Template Desain Siap Pakai PSD Bundle',
        'price' => 'Rp20K',
        'button' => 'Preview',
        'free' => false,
        'link' => '#',
    ],

    [
        'image' => 'https://picsum.photos/800/1000?random=2',
        'category' => 'Photoshop',
        'title' => 'Halftone Effect Template Pack',
        'price' => 'Free',
        'button' => 'Download',
        'free' => true,
        'link' => '#',
    ],

    [
        'image' => 'https://picsum.photos/800/1000?random=3',
        'category' => 'Graphics',
        'title' => 'Premium Graphic Asset Collection',
        'price' => 'Rp15K',
        'button' => 'Preview',
        'free' => false,
        'link' => '#',
    ],

    [
        'image' => 'https://picsum.photos/800/1000?random=4',
        'category' => 'Brush',
        'title' => 'Professional Brush Pack',
        'price' => 'Rp12K',
        'button' => 'Preview',
        'free' => false,
        'link' => '#',
    ],

]);

$categories = collect(['All'])
    ->merge(
        $products
            ->pluck('category')
            ->filter()
            ->unique()
            ->values()
    );

$filteredProducts = $products->filter(function ($product) use ($search, $category) {

    $matchSearch =
        !$search ||
        str_contains(
            strtolower($product['title']),
            strtolower(trim($search))
        );

    $matchCategory =
        trim($category) === 'All' ||
        trim($product['category']) === trim($category);

    return $matchSearch && $matchCategory;
});

if ($sort === 'free') {

    $filteredProducts = $filteredProducts->sortByDesc('free');

}

@endphp

<section class="relative overflow-hidden pt-20 lg:pt-32 pb-20 lg:pb-28">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 -z-10 overflow-hidden">

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-yellow-400/10 blur-3xl rounded-full"></div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-purple-500/10 blur-3xl rounded-full"></div>

    </div>

    <div class="inner-container-small">

        <!-- HERO -->
        <div class="text-center max-w-5xl mx-auto mb-20">

            <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-yellow-400/20 bg-yellow-400/10 text-yellow-300 text-sm font-medium mb-6">
                ✨ Premium Digital Resources
            </span>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-6">

                Elevate Your
                <span class="text-yellow-400">
                    Creative Workflow
                </span>

            </h1>

            <p class="text-gray-400 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto">

                Discover high-quality templates, UI kits, graphics, and premium digital assets crafted for modern creators.

            </p>

        </div>

        <!-- SEARCH -->
        <form method="GET" class="max-w-2xl mx-auto mb-10">

            <input type="hidden" name="category" value="{{ $category }}">

            <div class="flex gap-3">

                <!-- SEARCH -->
                <div class="relative flex-1">

                    <input
                        type="text"
                        name="search"
                        value="{{ $search }}"
                        placeholder="Search premium assets..."
                        class="w-full h-14 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl px-5 pr-24 text-sm text-white placeholder:text-gray-500 focus:outline-none focus:border-yellow-400 transition duration-300">

                    <div class="absolute top-1/2 right-4 -translate-y-1/2 flex items-center gap-3">

                        @if($search)

                            <a
                                href="{{ url()->current() }}"
                                class="text-gray-500 hover:text-red-400 transition">

                                ✕

                            </a>

                        @endif

                        <button
                            type="submit"
                            class="text-gray-400 hover:text-yellow-400 transition">

                            🔍

                        </button>

                    </div>

                </div>

                <!-- SORT -->
                <select
                    name="sort"
                    onchange="this.form.submit()"
                    class="h-14 px-4 rounded-2xl bg-white/5 border border-white/10 text-white text-sm focus:outline-none">

                    <option value="latest" {{ $sort === 'latest' ? 'selected' : '' }}>
                        Latest
                    </option>

                    <option value="free" {{ $sort === 'free' ? 'selected' : '' }}>
                        Free First
                    </option>

                </select>

            </div>

        </form>

        <!-- FILTER -->
        <div class="flex flex-wrap justify-center gap-3 mb-20">

            @foreach ($categories as $item)

                <a
                    href="{{ request()->fullUrlWithQuery([
                        'search' => $search,
                        'category' => $item,
                        'sort' => $sort,
                    ]) }}"
                    class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300
                    {{ trim($category) === trim($item)
                        ? 'bg-yellow-400 text-black shadow-lg shadow-yellow-400/20'
                        : 'bg-white/5 border border-white/10 text-gray-300 hover:border-yellow-400 hover:text-white'
                    }}">

                    {{ $item }}

                </a>

            @endforeach

        </div>

        <!-- PRODUCTS -->
        @if ($filteredProducts->count())

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                @foreach ($filteredProducts as $product)

<a
    href="{{ $product['link'] }}"
    class="group block overflow-hidden rounded-[22px]
           bg-[#111]
           border border-white/10
           transition-all duration-300
           hover:border-yellow-400/30
           hover:-translate-y-2
           hover:shadow-2xl hover:shadow-yellow-400/10">

    <!-- IMAGE -->
    <div class="relative overflow-hidden">

        <img
            src="{{ $product['image'] }}"
            alt="{{ $product['title'] }}"
            onerror="this.src='https://placehold.co/800x1000'"
            class="w-full h-[220px] object-cover transition duration-700 group-hover:scale-105">

        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

        @if ($product['free'])

            <span class="absolute top-3 right-3 px-2 py-1 rounded-full bg-green-500 text-white text-[10px] font-bold">
                FREE
            </span>

        @else

            <span class="absolute top-3 right-3 px-2 py-1 rounded-full bg-yellow-400 text-black text-[10px] font-bold">
                PREMIUM
            </span>

        @endif

    </div>

    <!-- CONTENT -->
    <div class="p-4">

        <span
            class="inline-flex items-center px-2.5 py-1 rounded-full bg-white/5 border border-white/10 text-[#d6b37a] text-[10px] font-medium mb-3">

            {{ $product['category'] }}

        </span>

        <h3 class="text-white text-sm font-bold leading-snug mb-4 line-clamp-2 min-h-[40px] group-hover:text-yellow-400 transition">

            {{ $product['title'] }}

        </h3>

        <div class="flex items-center justify-between">

            <span
                class="text-lg font-black
                {{ $product['free']
                    ? 'text-green-400'
                    : 'text-yellow-400' }}">

                {{ $product['price'] }}

            </span>

            <span class="text-gray-400 group-hover:text-yellow-400 transition">
                →
            </span>

        </div>

    </div>

</a>

@endforeach

            </div>

        @else

            <!-- EMPTY -->
            <div class="text-center py-24 border border-dashed border-white/10 rounded-3xl bg-white/5">

                <div class="text-5xl mb-5">
                    😕
                </div>

                <h3 class="text-2xl font-bold text-white mb-3">
                    Product Not Found
                </h3>

                <p class="text-gray-400 mb-8">
                    Try another keyword or category.
                </p>

                <a
                    href="{{ url()->current() }}"
                    class="inline-flex items-center justify-center px-6 h-11 rounded-full bg-yellow-400 text-black font-semibold hover:bg-yellow-300 transition">

                    Reset Filter

                </a>

            </div>

        @endif

    </div>

</section>

@include('shared.partials.footer')

@endsection
```
