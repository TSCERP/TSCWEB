<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Grant Thornton TSC">
    <meta name="author" content="Grant Thornton TSC">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="yandex" content="index, follow">
    <meta name="referrer" content="no-referrer">
    <meta name="format-detection" content="telephone=no">
    <x-seo::meta />
    <title>@yield('title', 'Grant Thornton TSC')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16815148678"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16815148678');
    </script>
    @stack('styles')
</head>

<body class="antialiased dark:bg-black dark:text-white/50 overflow-x-hidden">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Page Navigation -->
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="w-screen overflow-x-hidden">
            {{ $slot }}
        </main>

        @include('layouts.top')

        <x-contact-modal name="contact-modal" :show="false" defaultPurpose="Đăng ký dùng thử">
            <!-- Content of the modal -->
        </x-contact-modal>

        <x-toast></x-toast>

    </div>

    <!-- Page Footer -->
    @include('layouts.footer')
</body>

<script>
    function showToast(type, message) {
        const toastContainer = document.getElementById('toast-container');

        const toast = document.createElement('div');
        toast.className =
            `flex items-center w-full max-w-xs px-4 py-3 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 ${type} toast-fadein`;

        let iconHTML;
        switch (type) {
            case 'success':
                iconHTML = `<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-6 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                          </div>`;
                break;
            case 'error':
                iconHTML = `<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-6 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                            </svg>
                          </div>`;
                break;
            case 'warning':
                iconHTML = `<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-6 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
                            </svg>
                          </div>`;
                break;
        }

        toast.innerHTML = `
            ${iconHTML}
            <div class="ml-3 text-sm font-normal">${message}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" onclick="removeToast(this)">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        `;

        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.classList.remove('toast-fadein');
            toast.classList.add('toast-fadeout');
            setTimeout(() => {
                toast.remove();
            }, 500);
        }, 3000);
    }

    function removeToast(button) {
        const toast = button.closest('div');
        toast.classList.add('toast-fadeout');
        setTimeout(() => {
            toast.remove();
        }, 500);
    }
</script>

@stack('scripts')

</html>
