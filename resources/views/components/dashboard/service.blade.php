<section class="py-4">
    <div class="py-8 mx-auto max-w-screen-xl lg:py-16 px-4 sm:px-2 xl:px-0 service-area relative bg-gray-100">
        <div class="container mx-auto">
            <div class="row justify-center">
                <div class="col-xl-8 col-lg-10 mx-auto">
                    <div class="section-title text-center ">
                        {{-- <div>
                            <h6
                                class="rounded-[30px] w-fit mx-auto shadow-[0_4.4px_30px_rgba(19,16,34,0.1)] bg-white py-2 px-5 text-sm font-semibold text-gray-500 mb-4">
                                CREATIVE SERVICES
                            </h6>
                        </div> --}}
                        <h2 class="title text-4xl font-bold leading-normal">{{ __('Actionable Business Strategy Begins & Ends With Accessible Financial Business Operational Data') }}</h2>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mt-14">
                <div class="single-service-inner style-3 bg-white p-6 rounded-lg shadow-lg relative">
                    <div
                        class="thumb absolute top-[-20px] left-[-20px] flex items-center justify-center w-20 h-20 rounded-full border border-blue-400">
                        <img src="{{ Vite::asset('resources/images/service/1.png') }}" alt="img" class="w-10 h-10">
                    </div>
                    <div class="details text-center mt-8">
                        <h5 class="text-2xl font-semibold mb-2"><a href="service-details.html"
                                class="hover:text-blue-600">{{ __('Finance') }}</a></h5>
                        <p class="text-lg text-gray-600 mb-4">
                            {{ __('Streamlines financial processes with intuitive solutions, enabling accurate planning, reporting, and analysis for informed decision-making') }}.
                        </p>
                        {{-- <a class="read-more-text text-blue-600 hover:underline inline-flex items-center"
                            href="service-details.html">Touch More <i class="fa fa-plus ml-1"></i></a> --}}
                    </div>
                </div>
                <div class="single-service-inner style-3 bg-white p-6 rounded-lg shadow-lg relative">
                    <div
                        class="thumb absolute top-[-20px] left-[-20px] flex items-center justify-center w-20 h-20 rounded-full border border-blue-400">
                        <img src="{{ Vite::asset('resources/images/service/2.png') }}" alt="img" class="w-10 h-10">
                    </div>
                    <div class="details text-center mt-8">
                        <h5 class="text-2xl font-semibold mb-2"><a href="service-details.html"
                                class="hover:text-blue-600">{{ __('Accounting') }}</a></h5>
                        <p class="text-lg text-gray-600 mb-4">
                            {{ __('Our solutions give you reliability and up-to-date visibility to support compliance and strategic decisions on everything from your day-to-day accounting needs to developing long-term financial strategy and policies') }}.
                        </p>
                        {{-- <a class="read-more-text text-blue-600 hover:underline inline-flex items-center"
                            href="service-details.html">Touch More <i class="fa fa-plus ml-1"></i></a> --}}
                    </div>
                </div>
                <div class="single-service-inner style-3 bg-white p-6 rounded-lg shadow-lg relative">
                    <div
                        class="thumb absolute top-[-20px] left-[-20px] flex items-center justify-center w-20 h-20 rounded-full border border-blue-400">
                        <img src="{{ Vite::asset('resources/images/service/3.png') }}" alt="img" class="w-10 h-10">
                    </div>
                    <div class="details text-center mt-8">
                        <h5 class="text-2xl font-semibold mb-2"><a href="service-details.html"
                                class="hover:text-blue-600">{{ __('Data & Analytics') }}</a></h5>
                        <p class="text-lg text-gray-600 mb-4">
                            {{ __('Gain actionable insights with our BI, embedded analytics, data integration, and data management solutions that unleash the power of data and analytics for everyone, anywhere') }}.
                        </p>
                        {{-- <a class="read-more-text text-blue-600 hover:underline inline-flex items-center"
                            href="service-details.html">Touch More <i class="fa fa-plus ml-1"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
</section>
