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
    <title>@yield('title', 'Grant Thornton TSC(SAP B1)')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased dark:bg-black dark:text-white/50">
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

    </div>

    <!-- Page Footer -->
    @include('layouts.footer')
</body>

@stack('scripts')

</html>
