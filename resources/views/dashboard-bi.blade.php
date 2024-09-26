<x-app-layout>
    @php
        $title = app()->getLocale() == 'vi' ? 'Bảng điều khiển' : 'Dashboard';
    @endphp
    @section('title', $title)
    <div class="relative bg-cover bg-no-repeat pt-[130px]" style="background-image: url({{ Vite::asset('resources/images/5.png') }});">
        <div class="container py-8 mx-auto max-w-screen-xl px-4 sm:px-2 xl:px-0">
            <div class="flex flex-wrap items-center">

                <div class="lg:w-1/2 w-full lg:pr-10">
                    <div class="banner-inner">
                        <div>
                            <h6 class="rounded-[30px] w-fit shadow-[0_4.4px_30px_rgba(19,16,34,0.1)] bg-white py-2 px-5 text-sm font-semibold text-gray-500 mb-2 animate__animated animate__fadeInLeft animate__duration-[1.5s] animate__delay-[0.3s]">
                                DESIGNING FOR THE FUTURE
                            </h6>
                        </div>
                        <h2 class="text-5xl leading-snug md:!leading-tight mb-4 animate__animated animate__fadeInLeft font-bold" style="animation-duration: 1.5s; animation-delay: 0.4s;">
                            Empowering Your <span class="text-blue-600">Financial</span> Freedom
                        </h2>
                        <p class="text-lg text-gray-700 mb-6 animate__animated animate__fadeInLeft" style="animation-duration: 1.5s; animation-delay: 0.5s;">
                            And In Order To Make A Business, Brand Advertising And Marketing Plays An Important Role. Similarly, In Making Cultivation Business Are Necessary.
                        </p>
                        <a class="inline-flex items-center btn btn-blue border border-blue-600 text-blue-600 font-semibold py-2 px-4 rounded hover:bg-blue-600 hover:text-white transition-colors animate__animated animate__fadeInLeft animate__duration-[1.5s] animate__delay-[0.6s]" href="#">
                            Discover More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full mt-8 lg:mt-0">
                    <div class="relative flex items-center justify-center pt-3 pb-3">
                        <iframe class="relative w-full h-[500px]" src="https://app.powerbi.com/view?r=eyJrIjoiYWQzNThhNDQtNGU2NS00YTFjLThhOWUtZTg5MjRjYTA3MGNlIiwidCI6Ijc0Y2ZlOGI5LTBlZDktNDk4Yi04YWYyLTQxMzI0NTRkZjdmZCIsImMiOjEwfQ%3D%3D" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- banner end -->
    <x-dashboard.service />
    <x-dashboard.about />
    <x-dashboard.price />
</x-app-layout>
