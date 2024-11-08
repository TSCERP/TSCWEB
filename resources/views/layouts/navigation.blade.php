<nav x-data="{ open: false, openService: false, openSolution: false, showNotification: true, navTop: '80px' }" x-init="open = window.innerWidth < 768 ? false : open;
const mediaQuery = window.matchMedia('(min-width: 768px)');
mediaQuery.addEventListener('change', (e) => {
    if (e.matches) {
        open = false;
    }
});
$nextTick(() => {
    document.getElementById('sidebar').classList.remove('hidden');
});"
    class="bg-transparent dark:bg-gray-800 fixed top-0 left-0 w-full z-30 transition-all duration-300 ease-linear">
    <!-- Notification about discount campaign/announcement -->
    <div {{-- x-show="showNotification" x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transform transition ease-in-out duration-500" x-transition:leave-start="translate-y-0"
        x-transition:leave-end="-translate-y-full" --}}
        class="notification-nav relative flex items-center justify-center px-4 py-[0.9375rem] space-x-4 bg-no-repeat bg-center bg-cover z-0 before:absolute before:inset-0 before:opacity-[0.85] before:bg-bg-main before:z-10"
        style="background-image: url('{{ asset('assets/images/banner-bg.webp') }}');">
        <div class="relative flex items-center space-x-2 z-10">
            <span class="text-white text-sm font-light">{{ __('Start') }} <a x-data
                    @click="$dispatch('open-modal', 'contact-modal')"
                    class="pb-[0.05rem] border-b border-[#ffffff9d] cursor-pointer">{{ __('a trial session') }}</a>
                {{ __('to get an overview') }}</span>
            <a class="hidden sm:block text-white font-medium text-sm">{{ __('Learn More') }}</a>
        </div>
    </div>

    <!-- Primary Navigation Menu -->
    <div class="primary-nav shadow-md bg-white">
        <div :style="{ top: navTop }" class="max-w-7xl mx-auto px-4 sm:px-2 xl:px-0">
            <!-- Nội dung menu điều hướng chính ở đây -->
            <div
                class="primary-container flex justify-between h-[80px] transition-[height] duration-[0.8s,line-height]">
                <!-- Logo -->
                <div class="flex min-w-[170px] md:min-w-[150px] lg:min-w-[170px]">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('solution.dashboard.bi') }}">
                            <x-application-logo
                                class="primary-logo w-44 md:w-36 lg:w-44 transition-all duration-200 linear" />
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px md:ms-2 lg:ms-10 tablet2:flex">
                    <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-border-main ease duration-200 {{ request()->routeIs('home') ? '!font-bold text-border-main' : '' }}"
                        :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    @php
                        $services = __('Services');
                        $solutions = __('Solutions');
                    @endphp

                    <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-border-main ease duration-200"
                        :active="request()->routeIs('service')" :dropdown="true" :title="$services" :width="700">
                        <!-- Dropdown Content -->
                        <div class="grid grid-cols-3 gap-x-4 gap-y-6">
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
                                    <a target="_blank"
                                        href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/outsourcing/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-giai-phap-doanh-nghiep/' }}"
                                        class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                        {{ __('Business Process Solution') }}
                                    </a>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a target="_blank" href="{{ route('home') }}"
                                        class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                        {{ __('Technology Solutions Consulting') }}
                                    </a>

                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a target="_blank"
                                        href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/advisory/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-tu-van/' }}"
                                        class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                        {{ __('Advisory Services') }}
                                    </a>

                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a target="_blank"
                                        href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/tax/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-tu-van-thue/' }}"
                                        class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                        {{ __('Tax Services') }}
                                    </a>

                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a target="_blank"
                                        href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/assurance/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-kiem-toan/' }}"
                                        class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                        {{ __('Audit and Assurance') }}
                                    </a>

                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a target="_blank"
                                        href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/japan-desk/' : 'https://www.grantthornton.com.vn/services/international-corporate-structuring-services/' }}"
                                        class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                        {{ __('Japanese Desk') }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    </x-nav-link>

                    <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-border-main ease duration-200 {{ request()->routeIs('solution*') ? '!font-bold text-border-main' : '' }}"
                        :href="route('solution.sapb1')" :active="request()->routeIs('solution*')">
                        {{ __('Solutions') }}
                    </x-nav-link>

                    {{-- <x-nav-link
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-border-main ease duration-200
                        {{ request()->routeIs('solution*') ? '!font-bold text-border-main' : '' }}"
                        :active="request()->routeIs('solution*')" :dropdown="true" :title="$solutions" :width="600">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-6">
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a href="{{ route('solution.sapb1') }}">
                                        <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                            {{ __('SAP Business One') }}
                                        </h4>
                                    </a>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a href="{{ route('solution.netsuite') }}">
                                        <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                            {{ __('Oracle NetSuite') }}
                                        </h4>
                                    </a>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a href="{{ route('solution.dashboard.bi') }}">
                                        <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                            {{ __('Business Intelligence') }}
                                        </h4>
                                    </a>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div>
                                    <div class="bg-yellow-200 p-2 rounded aspect-square">
                                        <svg class="w-6 h-6 text-yellow-500" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a href="{{ route('solution.travel.expense') }}">
                                        <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">
                                            {{ __('Travel & Expense Management') }}
                                        </h4>
                                    </a>


                                </div>
                            </div>
                        </div>
                    </x-nav-link> --}}

                    <x-nav-link :href="route('about')"
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-border-main ease duration-200 {{ request()->routeIs('about') ? '!font-bold text-border-main' : '' }}"
                        :active="request()->routeIs('about')">
                        {{ __('About Us') }}
                    </x-nav-link>
                    {{-- <x-nav-link :href="route('blogs')"
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-border-main ease duration-200 {{ request()->routeIs('blogs') ? '!font-bold text-border-main' : '' }}"
                        :active="request()->routeIs('blogs')">
                        {{ __('Blog') }}
                    </x-nav-link> --}}
                    {{-- <x-nav-link :href="route('documents')"
                        class="navigation-link transition-all text-nowrap !text-base font-semibold hover:cursor-pointer hover:text-border-main ease duration-200 {{ request()->routeIs('documents') ? '!font-bold text-border-main' : '' }}"
                        :active="request()->routeIs('documents')">
                        {{ __('Document') }}
                    </x-nav-link> --}}
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden tablet2:flex sm:gap-4 sm:items-center sm:ms-6">
                    <div x-data="{ activeLang: '{{ app()->getLocale() }}' }" class="flex gap-2 items-center">
                        <button @click="activeLang = 'vi'; window.location.href = '/language/vi'"
                            :class="[activeLang === 'vi' ? 'font-semibold' : 'font-normal']"
                            class="navigation-button !text-base transition-all duration-200">
                            VI
                        </button>
                        <div class="w-[1px] h-4 bg-text-primary"></div>
                        <button @click="activeLang = 'en'; window.location.href = '/language/en'"
                            :class="[activeLang === 'en' ? 'font-semibold' : 'font-normal']"
                            class="navigation-button !text-base transition-all duration-200">
                            EN
                        </button>
                    </div>


                    <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="navigation-trial-button text-nowrap transition-all duration-200 !text-base main-btn">{{ __('Register Trial') }}</button>
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
                    <a href="{{ route('solution.dashboard.bi') }}">
                        <x-application-logo
                            class="ml-2 primary-logo w-44 md:w-36 lg:w-44 transition-all duration-200 linear" />
                    </a>
                </div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{ route('home') }}"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M4 21V9l8-6l8 6v12h-6v-7h-4v7z" />
                            </svg>
                            <span class="ms-3 text-text-primary">{{ __('Home') }}</span>
                        </a>
                    </li>
                    <li>
                        <button @click="openService = !openService"
                            class="flex text-primary-500 focus:bg-primary-100 items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="ecommerce-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4 22q-.825 0-1.412-.587T2 20V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm6-16h4V4h-4zm1 9v2q0 .425.288.713T12 18t.713-.288T13 17v-2h2q.425 0 .713-.288T16 14t-.288-.712T15 13h-2v-2q0-.425-.288-.712T12 10t-.712.288T11 11v2H9q-.425 0-.712.288T8 14t.288.713T9 15z" />
                            </svg>
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-text-primary">{{ __('Services') }}</span>
                            <svg class="w-3 h-3 text-text-primary" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="service-menu-mobile" x-show="openService" class="py-2 space-y-2">
                            <li>
                                <a target="_blank"
                                    href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/outsourcing/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-giai-phap-doanh-nghiep/' }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Business Process Solution') }}</a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ route('home') }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Technology Solutions Consulting') }}</a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/advisory/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-tu-van/' }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Advisory Services') }}</a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/tax/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-tu-van-thue/' }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Tax Services') }}</a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/assurance/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-kiem-toan/' }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Audit and Assurance') }}</a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="{{ app()->getLocale() == 'en' ? 'https://www.grantthornton.com.vn/services/japan-desk/' : 'https://www.grantthornton.com.vn/services/international-corporate-structuring-services/' }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Japanese Desk') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('solution.sapb1') }}"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M4 21V9l8-6l8 6v12h-6v-7h-4v7z" />
                            </svg>
                            <span class="ms-3 text-text-primary">{{ __('Solutions') }}</span>
                        </a>
                    </li>
                    {{-- <li>
                        <button @click="openSolution = !openSolution"
                            class="flex text-primary-500 focus:bg-primary-100 items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="ecommerce-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-6h6a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm7 9V5H5v7z" />
                                </g>
                            </svg>
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-text-primary">{{ __('Solutions') }}</span>
                            <svg class="w-3 h-3 text-text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="solution-menu-mobile" x-show="openSolution" class="py-2 space-y-2">
                            <li>
                                <a href="{{ route('solution.sapb1') }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('SAP Business One') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('solution.netsuite') }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Oracle NetSuite') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('solution.dashboard.bi') }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Business Intelligence') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('solution.travel.expense') }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Travel & Expense Management') }}</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="{{ route('about') }}"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6 17c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6m9-9a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3a3 3 0 0 1 3 3M3 5v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2" />
                            </svg>
                            <span class="ms-3 text-text-primary">{{ __('About Us') }}</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('blogs') }}"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 100 100">
                                <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                    <path d="M74.121 14H25.88C19.351 14 14 19.351 14 25.88v48.24C14 80.65 19.351 86 25.88 86h48.241C80.65 86 86 80.65 86 74.12V25.88C86 19.351 80.65 14 74.121 14m-2.3 43.982c-.044 7.649-6.264 13.913-13.928 13.913H41.886c-7.664 0-13.928-6.264-13.928-13.913V41.725c0-7.665 6.264-13.943 13.928-13.943h9.743c3.596.428 8.829 3.508 10.759 7.605c.531 1.149.81 1.326 1.253 4.73c.236 1.754.354 3.051 1.135 3.773c1.105 1.002 5.203.324 6.014.958l.619.486l.368.767l.133.619z" />
                                    <path d="M42.063 44.495h7.724a2.677 2.677 0 0 0 2.668-2.668a2.664 2.664 0 0 0-2.668-2.653h-7.724a2.663 2.663 0 0 0-2.667 2.653a2.676 2.676 0 0 0 2.667 2.668M57.76 55.122H42.063a2.663 2.663 0 0 0-2.667 2.653c0 1.443 1.194 2.652 2.667 2.652H57.76a2.67 2.67 0 0 0 2.653-2.652a2.66 2.66 0 0 0-2.653-2.653" />
                                </g>
                            </svg>
                            <span class="ms-3 text-text-primary">{{ __('Blog') }}</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a href="{{ route('documents') }}"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M4.172 3.172C3 4.343 3 6.229 3 10v4c0 3.771 0 5.657 1.172 6.828S7.229 22 11 22h2c3.771 0 5.657 0 6.828-1.172S21 17.771 21 14v-4c0-3.771 0-5.657-1.172-6.828S16.771 2 13 2h-2C7.229 2 5.343 2 4.172 3.172M8 9.25a.75.75 0 0 0 0 1.5h8a.75.75 0 0 0 0-1.5zm0 4a.75.75 0 0 0 0 1.5h5a.75.75 0 0 0 0-1.5z" clip-rule="evenodd" />
                            </svg>
                            <span class="ms-3 text-text-primary">{{ __('Document') }}</span>
                        </a>
                    </li> --}}
                </ul>
                <div class="flex gap-4 items-center sm:ms-6 mt-4">
                    <div x-data="{ activeLang: '{{ app()->getLocale() }}' }" class="flex gap-2 items-center ml-4">
                        <button @click="activeLang = 'vi'; window.location.href = '/language/vi'"
                            :class="activeLang === 'vi' ? 'font-semibold' : 'font-normal'">
                            VI
                        </button>
                        <div class="w-[1px] h-4 bg-text-primary"></div>
                        <button @click="activeLang = 'en'; window.location.href = '/language/en'"
                            :class="activeLang === 'en' ? 'font-semibold' : 'font-normal'">
                            EN
                        </button>
                    </div>
                    {{-- <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="ms-3">Dùng Thử</span>
                    </button> --}}
                    <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="navigation-trial-button text-nowrap transition-all duration-200 !text-base main-btn">{{ __('Register Trial') }}</button>
                </div>
            </div>
        </aside>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>

        <script>
            const primaryNav = document.querySelector('.primary-container');
            const logo = document.querySelector('.primary-logo');
            const navLinks = document.querySelectorAll('.navigation-link');
            const navButtons = document.querySelectorAll('.navigation-button');
            const navTrialButton = document.querySelector('.navigation-trial-button');

            let lastScrollTop = 0;
            let scrollTimeout;
            let showNotification;

            gsap.to(".notification-nav", {
                y: -51,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".primary-nav",
                    start: "top top",
                    end: "+=50",
                    scrub: 0.5,
                    markers: false
                }
            });

            gsap.to(".primary-nav", {
                y: -51,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".primary-nav",
                    start: "top top",
                    end: "+=50",
                    scrub: 0.5,
                    markers: false
                }
            });

            gsap.to(".primary-container", {
                // y: -51, 
                height: "50px",
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".primary-nav",
                    start: "top top",
                    end: "+=50",
                    scrub: 0.2,
                    markers: false
                }
            });

            window.addEventListener('scroll', () => {
                clearTimeout(scrollTimeout);

                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                // Determine scroll direction
                let scrollDirection = scrollTop > lastScrollTop ? 'down' : 'up';

                if (scrollTop > 50) {
                    // primaryNav.classList.remove('h-[80px]');
                    // primaryNav.classList.add('h-[50px]');
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
                    // console.log("Gì he: ", navTrialButton.classList)
                } else {
                    // primaryNav.classList.add('h-[80px]');
                    // primaryNav.classList.remove('h-[50px]');
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
