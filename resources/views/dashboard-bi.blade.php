<x-app-layout>
    @php
        $title =
            app()->getLocale() == 'vi'
                ? 'Báo Cáo Bảng Điều Khiển BI | Grant Thornton TSC'
                : 'Dashboard BI Report | Grant Thornton TSC';
    @endphp
    @section('title', $title)
    <div class="relative bg-cover bg-no-repeat pt-[130px]"
        style="background-image: url({{ Vite::asset('resources/images/5.png') }});">
        <div class="container py-8 mx-auto max-w-screen-xl px-4 sm:px-2 xl:px-0">
            <div class="flex flex-wrap items-center">

                <div class="lg:w-1/2 w-full lg:pr-10">
                    <div class="banner-inner">
                        <div>
                            <h6
                                class="uppercase rounded-[30px] w-fit shadow-[0_4.4px_30px_rgba(19,16,34,0.1)] bg-white py-2 px-5 text-sm font-semibold text-gray-500 mb-4 animate__animated animate__fadeInLeft animate__duration-[1.5s] animate__delay-[0.3s]">
                                {{ __('Designing for the future') }}
                            </h6>
                        </div>
                        <h2 class="text-5xl leading-snug md:!leading-tight mb-4 animate__animated animate__fadeInLeft font-bold"
                            style="animation-duration: 1.5s; animation-delay: 0.4s;">
                            {!! __("Connected Solutions for <span class='text-blue-600'> Financial Services </span>") !!}
                        </h2>
                        <p class="text-lg text-gray-700 mb-6 animate__animated animate__fadeInLeft"
                            style="animation-duration: 1.5s; animation-delay: 0.5s;">
                            {{ __('All your financial data in one place, including balance sheets, branch profitability, and outstanding loans. Pre-built configurations for IFRS 15, 17, and more. Syncs with  Oracle, SAP, Dynamics, etc.') }}
                        </p>
                        {{-- <a class="inline-flex items-center btn btn-blue border border-blue-600 text-blue-600 font-semibold py-2 px-4 rounded hover:bg-blue-600 hover:text-white transition-colors animate__animated animate__fadeInLeft animate__duration-[1.5s] animate__delay-[0.6s]"
                            x-data @click="$dispatch('open-modal', 'contact-modal')">
                            {{ __('Learn More') }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </a> --}}
                        <div class="h-fit w-fit flex">
                            <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                                class="rounded-full text-white bg-bg-btn font-semibold px-6 py-4">{{ __('Learn More') }}</button>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full mt-8 lg:mt-0">
                    <div class="relative w-full h-[500px] flex items-center justify-center pt-3 pb-3">
                        {{-- <iframe class="relative w-full h-[500px]"
                            src="https://app.powerbi.com/view?r=eyJrIjoiYWQzNThhNDQtNGU2NS00YTFjLThhOWUtZTg5MjRjYTA3MGNlIiwidCI6Ijc0Y2ZlOGI5LTBlZDktNDk4Yi04YWYyLTQxMzI0NTRkZjdmZCIsImMiOjEwfQ%3D%3D"
                            frameborder="0" allowfullscreen></iframe> --}}
                        <video id="dashboard-bi-player" preload="auto" controls crossorigin playsinline>
                            <source src="{{ asset('assets/videos/Dashboard_BI_Demo.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-dashboard.service />
    <x-dashboard.about />
    <x-dashboard.price />
    @push('scripts')
        <script type="module">
            const player = new Plyr('#dashboard-bi-player');
        </script>
    @endpush
</x-app-layout>
