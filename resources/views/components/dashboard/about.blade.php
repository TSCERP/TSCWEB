<section style="background-image: url({{ Vite::asset('resources/images/5.png') }});">
    <div class="py-8 mx-auto max-w-screen-xl lg:py-16 px-4 sm:px-2 xl:px-0 relative bg-cover bg-no-repeat">
        <div class="about-area bg-gradient-to-b from-gray-100 to-gray-300 py-12">
            <div class="flex flex-col md:flex-row gap-6 items-center">
                <div class="lg:w-1/2 w-full wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s"
                    data-wow-delay="0.3s">
                    <div class="mb-4 lg:mb-0">
                        <img class="w-full" src="{{ Vite::asset('resources/images/service/unlock-insights-faster.png') }}"
                            alt="img">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full wow animate__animated animate__fadeInRight" data-wow-duration="1.5s"
                    data-wow-delay="0.3s">
                    <div class="section-title mb-0">
                        <div>
                            <h6
                                class="rounded-[30px] w-fit shadow-[0_4.4px_30px_rgba(19,16,34,0.1)] bg-white py-2 px-5 text-sm font-semibold text-gray-500 mb-4">
                                ABOUT US
                            </h6>
                        </div>
                        {{-- <h6 class="text-base font-semibold text-gray-500 uppercase mb-2">ABOUT US</h6> --}}
                        <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-normal">{!! __("Unlock Insights <span class='text-blue-600'>Faster</span>") !!}</h2>
                        <p class="text-lg text-gray-700 mb-6">
                            {{ __('Focus on what matters. Our open business data fabric unlocks insights quickly with pre-built views for popular ERPs') }}.
                        </p>
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <ul class="list-none space-y-2 mb-4">
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                                        <span>{{ __('Translate complex ERP data into clear reports and dashboards') }}</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                                        <span>{{ __('Share insights from your finance, accounting, and operations applications') }}</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                                        <span>{{ __('Analyze data faster and make smarter decisions') }}</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                                        <span>{{ __('Free your IT team') }}</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                                        <span>{{ __('Unlock new possibilities') }}</span>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="md:w-1/2 w-full px-4">
                                    <ul class="list-none space-y-2 mb-4">
                                        <li class="flex items-center">
                                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                                            <span>Mistakes To Avoid to the dum</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                                            <span>Your Startup industry stan</span>
                                        </li>
                                    </ul>
                                </div> --}}
                        </div>
                        <a class="inline-flex items-center btn btn-blue border border-blue-600 text-blue-600 font-semibold py-2 px-4 rounded hover:bg-blue-600 hover:text-white transition-colors animate__animated animate__fadeInLeft animate__duration-[1.5s] animate__delay-[0.6s]"
                            href="#">
                            {{ __('Learn More') }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
