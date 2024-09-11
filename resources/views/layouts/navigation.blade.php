<nav x-data="{ open: false, openService: false, showNotification: true, navTop: '80px' }" x-init="open = window.innerWidth < 768 ? false : open;
const mediaQuery = window.matchMedia('(min-width: 768px)');
mediaQuery.addEventListener('change', (e) => {
    if (e.matches) {
        open = false;
    }
});
window.addEventListener('scroll', () => {
    if (window.scrollY > 80) {
        showNotification = false;
        navTop = '0px';
    } else {
        navTop = Math.min(80, 80 - window.scrollY) + 'px';
        showNotification = true;
    }
});
$nextTick(() => {
    document.getElementById('sidebar').classList.remove('hidden');
});"
    class="bg-white dark:bg-gray-800 fixed top-0 left-0 w-full z-30 transition-all duration-300 ease-linear">
    <!-- Notification about discount campaign/announcement -->
    <div x-show="showNotification" x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transform transition ease-in-out duration-500" x-transition:leave-start="translate-y-0"
        x-transition:leave-end="-translate-y-full"
        class="notification-nav relative flex items-center justify-center px-4 py-[0.9375rem] space-x-4 bg-no-repeat bg-center bg-cover z-0 before:absolute before:inset-0 before:opacity-[0.85] before:bg-bg-main before:z-10"
        style="background-image: url('{{ asset('assets/images/banner-bg.webp') }}');">
        <div class="relative flex items-center space-x-2 z-10">
            <span class="text-white text-sm font-light">Bắt đầu <a href="#"
                    class="pb-[0.05rem] border-b border-[#ffffff9d]">phiên bản dùng thử</a> để có cái nhìn tổng
                quan</span>
            <a class="hidden sm:block text-white font-medium text-sm">Tìm Hiểu Thêm</a>
        </div>
    </div>

    <!-- Primary Navigation Menu -->
    <div class="primary-nav shadow-md">
        <div :style="{ top: navTop }" class="max-w-7xl mx-auto px-4 sm:px-2 xl:px-0">
            <!-- Nội dung menu điều hướng chính ở đây -->
            <div
                class="primary-container flex justify-between h-[80px] transition-[height] duration-[0.8s,line-height]">
                <!-- Logo -->
                <div class="flex min-w-[170px] md:min-w-[150px] lg:min-w-[170px]">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo
                                class="primary-logo w-44 md:w-36 lg:w-44 transition-all duration-200 linear" />
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px md:ms-2 lg:ms-10 tablet2:flex">
                    <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('home') ? '!font-bold text-text-main' : '' }}"
                        :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('layout.home') }}
                    </x-nav-link>
                    @php
                        $services = __('layout.services');
                    @endphp
                    <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200"
                        :active="request()->routeIs('service')" :dropdown="true" :title="$services">
                        <!-- Dropdown Content -->
                        <div class="grid grid-cols-3 gap-4">
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Add SVG icon here -->
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit
                                        scaffolding
                                        for new applications with Blade or Inertia.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Add SVG icon here -->
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit
                                        scaffolding
                                        for new applications with Blade or Inertia.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Add SVG icon here -->
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit
                                        scaffolding
                                        for new applications with Blade or Inertia.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Add SVG icon here -->
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit
                                        scaffolding
                                        for new applications with Blade or Inertia.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Add SVG icon here -->
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit
                                        scaffolding
                                        for new applications with Blade or Inertia.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Add SVG icon here -->
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit
                                        scaffolding
                                        for new applications with Blade or Inertia.</p>
                                </div>
                            </div>
                            <!-- Repeat similar content for other services -->
                        </div>
                    </x-nav-link>

                    <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('solution') ? '!font-bold text-text-main' : '' }}"
                        :active="request()->routeIs('solution')">
                        {{ __('layout.solution') }}
                    </x-nav-link>
                    <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('about') ? '!font-bold text-text-main' : '' }}"
                        :active="request()->routeIs('about')">
                        {{ __('layout.about') }}
                    </x-nav-link>
                    <x-nav-link :href="route('blogs')"
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('blogs') ? '!font-bold text-text-main' : '' }}"
                        :active="request()->routeIs('blogs')">
                        {{ __('layout.blogs') }}
                    </x-nav-link>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden tablet2:flex sm:gap-4 sm:items-center sm:ms-6">
                    <div x-data="{ activeLang: 'VI' }" class="flex gap-2 items-center">
                        <button @click="activeLang = 'VI'"
                            :class="[activeLang === 'VI' ? 'font-semibold' : 'font-normal']"
                            class="navigation-button !text-base transition-all duration-200">
                            VI
                        </button>
                        <div class="w-[1px] h-4 bg-text-primary"></div>
                        <button @click="window.location.href = '/language/en'"
                            :class="[activeLang === 'en' ? 'font-semibold' : 'font-normal']"
                            class="navigation-button !text-base transition-all duration-200">
                            EN
                        </button>
                    </div>


                    <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="navigation-trial-button text-nowrap transition-all duration-200 !text-base main-btn">{{ __('layout.trial') }}</button>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center tablet2:hidden">
                    <button @click="open = true"
                        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div x-show="open" x-init="$watch('open', value => document.body.classList.toggle('overflow-hidden', value))" @click="open = false" @keydown.escape.window="open = false"
        class="fixed inset-0 z-40 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center hidden"
        id="sidebar" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200">
        <aside @click.stop
            class="fixed top-0 left-0 z-50 w-80 h-screen bg-white dark:bg-white transform transition-transform duration-300 ease-in-out"
            x-show="open" x-transition:enter="transform transition ease-in-out duration-300"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-300"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto">
                <div class="shrink-0 flex mb-4">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo
                            class="ml-2 primary-logo w-44 md:w-36 lg:w-44 transition-all duration-200 linear" />
                    </a>
                </div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Home</span>
                        </a>
                    </li>
                    <li>
                        <button @click="openService = !openService"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="ecommerce-menu">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Services</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="ecommerce-menu" x-show="openService" class="py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="ms-3">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class="ms-3">Blog</span>
                        </a>
                    </li>
                </ul>
                <div class="flex gap-4 justyfy-between items-center sm:ms-6 mt-4">
                    <div x-data="{ activeLang: 'VI' }" class="flex gap-2 items-center">
                        <button @click="activeLang = 'VI'"
                            :class="activeLang === 'VI' ? 'font-semibold' : 'font-normal'">
                            VI
                        </button>
                        <div class="w-[1px] h-4 bg-text-primary"></div>
                        <button @click="activeLang = 'EN'"
                            :class="activeLang === 'EN' ? 'font-semibold' : 'font-normal'">
                            EN
                        </button>
                    </div>
                    {{-- <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="ms-3">Dùng Thử</span>
                    </button> --}}
                    <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="navigation-trial-button text-nowrap transition-all duration-200 !text-base main-btn">{{ __('layout.trial') }}</button>
                </div>
            </div>
        </aside>
    </div>

    @push('scripts')
        <script>
            const primaryNav = document.querySelector('.primary-container');
            const logo = document.querySelector('.primary-logo');
            const navLinks = document.querySelectorAll('.navigation-link');
            const navButtons = document.querySelectorAll('.navigation-button');
            const navTrialButton = document.querySelector('.navigation-trial-button');

            let lastScrollTop = 0;
            let scrollTimeout;

            window.addEventListener('scroll', () => {
                clearTimeout(scrollTimeout);

                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                // Determine scroll direction
                let scrollDirection = scrollTop > lastScrollTop ? 'down' : 'up';

                if (scrollTop > 60) {
                    primaryNav.classList.remove('h-[80px]');
                    primaryNav.classList.add('h-[50px]');
                    logo.classList.remove('w-44');
                    logo.classList.add('w-32');
                    logo.classList.remove('md:w-36');
                    logo.classList.add('md:w-32');
                    logo.classList.remove('lg:w-44');
                    logo.classList.add('md:w-32');
                    navLinks.forEach(link => {
                        link.classList.add('!text-sm');
                        link.classList.remove('!text-base');
                    });
                    navButtons.forEach(btn => {
                        btn.classList.add('!text-sm');
                        btn.classList.remove('!text-base');
                    });
                    navTrialButton.classList.add('!py-[0.5rem]');
                    navTrialButton.classList.add('!text-sm');
                    console.log("Gì he: ", navTrialButton.classList)
                } else {
                    primaryNav.classList.add('h-[80px]');
                    primaryNav.classList.remove('h-[50px]');
                    logo.classList.add('md:w-36');
                    logo.classList.remove('md:w-32');
                    logo.classList.add('lg:w-44');
                    logo.classList.remove('md:w-32');
                    navLinks.forEach(link => {
                        link.classList.add('!text-base');
                        link.classList.remove('!text-sm');
                    });
                    navButtons.forEach(btn => {
                        btn.classList.add('!text-base');
                        btn.classList.remove('!text-sm');
                    });
                    navTrialButton.classList.remove('!text-sm');
                    navTrialButton.classList.remove('!py-[0.5rem]');
                }

                lastScrollTop = scrollTop;
            });
        </script>
    @endpush

</nav>
