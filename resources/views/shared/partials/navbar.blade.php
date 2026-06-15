<div class="lg:ps-5 fixed z-50 lg:top-0 bottom-2 start-0 flex flex-col justify-center lg:w-auto w-full">

    <ul id="navbar"
        class="p-2.5 bg-default-900 rounded-xl inline-flex justify-between lg:flex-col gap-2.5 mx-auto lg:w-auto md:w-[150px] w-auto lg:border-none border border-default-700/30">

        <!-- ITEM -->
        @php
            $menus = [
                ['href' => '#hero', 'label' => 'Home', 'icon' => 'icon-1.svg'],
                ['href' => '#work', 'label' => 'Work', 'icon' => 'icon-2.svg'],
                ['href' => '#about', 'label' => 'About', 'icon' => 'icon-3.svg'],
                ['href' => '#pricing', 'label' => 'Pricing', 'icon' => 'icon-4.svg'],
                ['href' => '#blog', 'label' => 'Blog', 'icon' => 'icon-5.svg'],
            ];
        @endphp

        @foreach ($menus as $menu)
            <li class="relative group">
                <a href="{{ $menu['href'] }}"
                   aria-label="{{ $menu['label'] }}"
                   class="flex items-center justify-center size-12.5 rounded-md transition-all duration-300 hover:bg-body-bg">

                    <img src="{{ asset('images/svg/' . $menu['icon']) }}"
                         alt="{{ $menu['label'] }}"
                         class="w-5 opacity-70 transition-all duration-300 group-hover:opacity-100">

                    <!-- Tooltip -->
                    <span
                        class="hidden lg:flex absolute left-full ms-4 top-1/2 -translate-y-1/2 whitespace-nowrap rounded-md bg-black px-3 py-1.5 text-sm text-white opacity-0 invisible pointer-events-none z-50 transition-all duration-300 group-hover:opacity-100 group-hover:visible">
                        {{ $menu['label'] }}
                    </span>
                </a>
            </li>
        @endforeach

        <!-- Divider -->
        <li class="flex">
            <div
                class="flex lg:h-px w-full lg:border-t lg:border-s-0 border-s border-default-700/60 border-dashed">
            </div>
        </li>

        <!-- SEE MORE -->
        <li class="relative group">

            <!-- Button -->
            <button
                class="flex justify-center items-center size-12.5 rounded-md transition-all duration-300 hover:bg-body-bg text-white/70 group-hover:text-white">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 opacity-70 transition-all duration-300 group-hover:opacity-100"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 4v16m8-8H4" />
                </svg>
            </button>

            <!-- Dropdown -->
            <div
                class="absolute lg:left-full lg:top-0 bottom-16 lg:bottom-auto lg:ms-4
                       flex flex-col gap-2
                       opacity-0 invisible translate-y-2
                       group-hover:opacity-100
                       group-hover:visible
                       group-hover:translate-y-0
                       transition-all duration-300">

                <!-- Product -->
                <a href="/product"
                   class="relative group/item flex justify-center items-center size-12.5 rounded-md bg-default-900 hover:bg-body-bg transition-all duration-300">

                    <img src="{{ asset('images/svg/icon-10.svg') }}"
                         alt="Product"
                         class="w-5 opacity-70 group-hover/item:opacity-100">

                    <span
                        class="hidden lg:flex absolute left-full ms-4 top-1/2 -translate-y-1/2 whitespace-nowrap rounded-md bg-black px-3 py-1.5 text-sm text-white opacity-0 invisible pointer-events-none z-50 transition-all duration-300 group-hover/item:opacity-100 group-hover/item:visible">
                        Product
                    </span>
                </a>

                <!-- Contact -->
                <a href="#contact"
                   class="relative group/item flex justify-center items-center size-12.5 rounded-md bg-default-900 hover:bg-body-bg transition-all duration-300">

                    <img src="{{ asset('images/svg/icon-6.svg') }}"
                         alt="Contact"
                         class="w-5 opacity-70 group-hover/item:opacity-100">

                    <span
                        class="hidden lg:flex absolute left-full ms-4 top-1/2 -translate-y-1/2 whitespace-nowrap rounded-md bg-black px-3 py-1.5 text-sm text-white opacity-0 invisible pointer-events-none z-50 transition-all duration-300 group-hover/item:opacity-100 group-hover/item:visible">
                        Contact
                    </span>
                </a>

            </div>
        </li>

    </ul>
</div>