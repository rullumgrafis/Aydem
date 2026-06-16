```html
<div class="lg:ps-4 fixed z-50 lg:top-0 bottom-2 start-0 flex flex-col justify-center lg:w-auto w-full">

    @php
        $menus = [
            ['href' => '#hero', 'label' => 'Home', 'icon' => 'icon-1.svg'],
            ['href' => '#work', 'label' => 'Work', 'icon' => 'icon-2.svg'],
            ['href' => '#about', 'label' => 'About', 'icon' => 'icon-3.svg'],
            ['href' => '#pricing', 'label' => 'Pricing', 'icon' => 'icon-4.svg'],
            ['href' => '#blog', 'label' => 'Blog', 'icon' => 'icon-5.svg'],
        ];
    @endphp

    <ul id="navbar"
        class="p-2 bg-default-900 rounded-lg inline-flex justify-between lg:flex-col gap-2 mx-auto lg:w-auto md:w-[130px] w-auto border border-default-700/30">

        {{-- MENU --}}
        @foreach ($menus as $menu)
            <li class="relative group">
                <a href="{{ $menu['href'] }}"
                    aria-label="{{ $menu['label'] }}"
                    class="nav-link flex items-center justify-center size-10 rounded-md transition-all duration-300 hover:bg-body-bg">

                    <img src="{{ asset('images/svg/' . $menu['icon']) }}"
                        alt="{{ $menu['label'] }}"
                        class="w-4 opacity-70 group-hover:opacity-100 transition-opacity duration-300">

                    <span
                        class="hidden lg:flex absolute left-full ms-3 top-1/2 -translate-y-1/2 whitespace-nowrap rounded-md bg-black px-2 py-1 text-xs text-white opacity-0 invisible pointer-events-none z-50 transition-all duration-300 group-hover:opacity-100 group-hover:visible">
                        {{ $menu['label'] }}
                    </span>
                </a>
            </li>
        @endforeach

        {{-- DARK MODE --}}
        <li class="relative group">
            <button id="theme-toggle"
                class="flex items-center justify-center size-10 rounded-md hover:bg-body-bg transition-colors duration-300">

                <svg id="theme-dark-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 text-white opacity-70 group-hover:opacity-100"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9 9 0 1020.354 15.354z" />
                </svg>

                <svg id="theme-light-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="hidden w-4 h-4 text-yellow-400 opacity-70 group-hover:opacity-100"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364 6.364l-1.414-1.414M7.05 7.05 5.636 5.636m12.728 0L16.95 7.05M7.05 16.95l-1.414 1.414" />
                </svg>

                <span id="theme-tooltip"
                    class="hidden lg:flex absolute left-full ms-3 top-1/2 -translate-y-1/2 whitespace-nowrap rounded-md bg-black px-2 py-1 text-xs text-white opacity-0 invisible pointer-events-none z-50 transition-all duration-300 group-hover:opacity-100 group-hover:visible">
                    Dark Mode
                </span>
            </button>
        </li>

        {{-- DIVIDER --}}
        <li>
            <div class="lg:h-px w-full border-dashed lg:border-t border-s lg:border-s-0 border-default-700/60"></div>
        </li>

        {{-- SEE MORE --}}
        <li class="relative">

            <button id="more-toggle"
                class="flex justify-center items-center size-10 rounded-md hover:bg-body-bg transition-colors duration-300 text-white/70 hover:text-white">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 4v16m8-8H4" />
                </svg>
            </button>

            <div id="more-menu"
                class="hidden absolute lg:left-full lg:top-0 bottom-14 lg:bottom-auto lg:ms-3 flex-col gap-2">

                <a href="/product"
                    class="relative group flex justify-center items-center size-10 rounded-md bg-default-900 hover:bg-body-bg transition-colors duration-300">

                    <img src="{{ asset('images/svg/icon-10.svg') }}"
                        alt="Product"
                        class="w-4 opacity-70 group-hover:opacity-100">

                    <span
                        class="hidden lg:flex absolute left-full ms-3 top-1/2 -translate-y-1/2 whitespace-nowrap rounded-md bg-black px-2 py-1 text-xs text-white opacity-0 invisible pointer-events-none z-50 transition-all duration-300 group-hover:opacity-100 group-hover:visible">
                        Product
                    </span>
                </a>

                <a href="#contact"
                    class="relative group flex justify-center items-center size-10 rounded-md bg-default-900 hover:bg-body-bg transition-colors duration-300">

                    <img src="{{ asset('images/svg/icon-6.svg') }}"
                        alt="Contact"
                        class="w-4 opacity-70 group-hover:opacity-100">

                    <span
                        class="hidden lg:flex absolute left-full ms-3 top-1/2 -translate-y-1/2 whitespace-nowrap rounded-md bg-black px-2 py-1 text-xs text-white opacity-0 invisible pointer-events-none z-50 transition-all duration-300 group-hover:opacity-100 group-hover:visible">
                        Contact
                    </span>
                </a>

            </div>
        </li>

    </ul>
</div>

{{-- SCROLL TO TOP --}}
<button id="scroll-top"
    class="fixed bottom-100 lg:bottom-6 right-4 z-50 hidden items-center justify-center size-12 rounded-full bg-default-900 border border-default-700/50 text-white shadow-lg hover:bg-body-bg transition-all duration-300">

    <svg xmlns="http://www.w3.org/2000/svg"
        class="w-5 h-5"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M5 15l7-7 7 7" />
    </svg>

</button>

<style>
    html {
        scroll-behavior: smooth;
    }

    .nav-active {
        background: rgb(255 255 255 / 0.08);
    }

    .nav-active img {
        opacity: 1 !important;
    }

    #scroll-top {
        animation: fadeInUp .3s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

    // ====================================
    // DARK MODE
    // ====================================
    const toggle = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-dark-icon');
    const lightIcon = document.getElementById('theme-light-icon');
    const tooltip = document.getElementById('theme-tooltip');

    function updateTheme() {
        const isDark = document.documentElement.classList.contains('dark');

        darkIcon?.classList.toggle('hidden', isDark);
        lightIcon?.classList.toggle('hidden', !isDark);

        if (tooltip) {
            tooltip.textContent = isDark ? 'Light Mode' : 'Dark Mode';
        }
    }

    if (
        localStorage.getItem('theme') === 'dark' ||
        (
            !localStorage.getItem('theme') &&
            window.matchMedia('(prefers-color-scheme: dark)').matches
        )
    ) {
        document.documentElement.classList.add('dark');
    }

    updateTheme();

    toggle?.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');

        localStorage.setItem(
            'theme',
            document.documentElement.classList.contains('dark')
                ? 'dark'
                : 'light'
        );

        updateTheme();
    });

    // ====================================
    // MORE MENU
    // ====================================
    const moreToggle = document.getElementById('more-toggle');
    const moreMenu = document.getElementById('more-menu');

    moreToggle?.addEventListener('click', (e) => {
        e.stopPropagation();

        moreMenu?.classList.toggle('hidden');
        moreMenu?.classList.toggle('flex');
    });

    document.addEventListener('click', () => {
        moreMenu?.classList.add('hidden');
        moreMenu?.classList.remove('flex');
    });

    moreMenu?.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    // ====================================
    // ACTIVE MENU
    // ====================================
    const navLinks = document.querySelectorAll('.nav-link');

    function setActiveMenu() {
        let current = '';

        document.querySelectorAll('section[id]').forEach(section => {
            const sectionTop = section.offsetTop - 180;
            const sectionHeight = section.offsetHeight;

            if (
                window.scrollY >= sectionTop &&
                window.scrollY < sectionTop + sectionHeight
            ) {
                current = `#${section.id}`;
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('nav-active');

            if (link.getAttribute('href') === current) {
                link.classList.add('nav-active');
            }
        });
    }

    // ====================================
    // SCROLL TO TOP
    // ====================================
    const scrollTopBtn = document.getElementById('scroll-top');

    function toggleScrollTop() {
        if (window.scrollY > 300) {
            scrollTopBtn?.classList.remove('hidden');
            scrollTopBtn?.classList.add('flex');
        } else {
            scrollTopBtn?.classList.add('hidden');
            scrollTopBtn?.classList.remove('flex');
        }
    }

    scrollTopBtn?.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // INIT
    setActiveMenu();
    toggleScrollTop();

    window.addEventListener('scroll', () => {
        setActiveMenu();
        toggleScrollTop();
    });

});
</script>
```
