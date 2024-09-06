<nav x-data="{ open: false, showNotification: true, navTop: '80px' }" x-init="window.addEventListener('scroll', () => {
    if (window.scrollY > 80) {
        showNotification = false;
        navTop = '0px'; // Di chuyển menu lên khi thông báo ẩn
    } else {
        navTop = Math.min(80, 80 - window.scrollY) + 'px';
        showNotification = true;
    }
});"
    class="bg-white dark:bg-gray-800 fixed top-0 left-0 w-full z-30 transition-all duration-300 ease-in-out">
    <!-- Notification about discount campaign/announcement -->
    <div x-show="showNotification" x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transform transition ease-in-out duration-500" x-transition:leave-start="translate-y-0"
        x-transition:leave-end="-translate-y-full"
        class="relative flex items-center justify-center px-4 py-[0.9375rem] space-x-4 bg-no-repeat bg-center bg-cover z-0 before:absolute before:inset-0 before:opacity-[0.85] before:bg-bg-main before:z-10"
        style="background-image: url('{{ asset('assets/images/banner-bg.webp') }}');">
        <div class="relative flex items-center space-x-2 z-10">
            <span class="text-white text-sm font-light">Bắt đầu phiên bản dùng thử để có cái nhìn tổng quan</span>
            <a class="text-white font-medium text-sm">Tìm Hiểu Thêm</a>
        </div>
    </div>

    <!-- Primary Navigation Menu -->
    <div :style="{ top: navTop }" class="primary-nav max-w-7xl mx-auto">
        <!-- Nội dung menu điều hướng chính ở đây -->
        <div class="flex justify-between h-[80px]">
            <!-- Logo -->
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link
                    class="!text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('home') ? '!font-bold text-text-main' : '' }}"
                    :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>

                <x-nav-link class="!text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200"
                    :active="request()->routeIs('service')" :dropdown="true" :title="'Services'">
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
                                <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit scaffolding
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
                                <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit scaffolding
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
                                <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit scaffolding
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
                                <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit scaffolding
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
                                <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit scaffolding
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
                                <h4 class="text-gray-900 dark:text-gray-100 text-sm font-semibold">SAP Business One</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Lightweight starter kit scaffolding
                                    for new applications with Blade or Inertia.</p>
                            </div>
                        </div>
                        <!-- Repeat similar content for other services -->
                    </div>
                </x-nav-link>

                <x-nav-link
                    class="!text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('solution') ? '!font-bold text-text-main' : '' }}"
                    :active="request()->routeIs('solution')">
                    Solutions
                </x-nav-link>
                <x-nav-link
                    class="!text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('about') ? '!font-bold text-text-main' : '' }}"
                    :active="request()->routeIs('about')">
                    About Us
                </x-nav-link>
                <x-nav-link
                    :href="route('blogs')"
                    class="!text-base font-semibold hover:cursor-pointer hover:text-text-main ease duration-200 {{ request()->routeIs('blogs') ? '!font-bold text-text-main' : '' }}"
                    :active="request()->routeIs('blogs')">
                    Blog
                </x-nav-link>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:gap-4 sm:items-center sm:ms-6">
                <div x-data="{ activeLang: '{{ session()->get('locale', 'vi') }}' }" class="flex gap-2 items-center">
                    <button @click="window.location.href = '/language/vi'"
                            :class="activeLang === 'vi' ? 'font-semibold' : 'font-normal'">
                        VI
                    </button>
                    <div class="w-[1px] h-4 bg-text-primary"></div>
                    <button @click="window.location.href = '/language/en'"
                            :class="activeLang === 'en' ? 'font-semibold' : 'font-normal'">
                        EN
                    </button>
                </div>


                <button x-data @click="$dispatch('open-modal', 'contact-modal')" class="main-btn">Dùng Thử</button>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                    {{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</div>
                <div class="font-medium text-sm text-gray-500">
                    {{ isset(Auth::user()->email) ? Auth::user()->email : '' }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
