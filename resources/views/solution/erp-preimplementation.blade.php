<x-app-layout>
    @php $locale = app()->getLocale(); @endphp
    @section('title', __('ERP Pre-Implementation & Finetune Lab') . ' | Grant Thornton TSC')
    <div x-data="{ videoPopup: false, video: null }" x-init="$nextTick(() => {
        document.getElementById('sap-video-modal').classList.remove('hidden');
        video = $refs.sap - video;
    });
    $watch('videoPopup', value => {
        if (value) {
            document.body.classList.add('overflow-hidden');
        } else {
            document.body.classList.remove('overflow-hidden');
        }
    })">
        <section
            class="pt-[130px] h-max bg-no-repeat bg-center bg-gradient-to-br from-primary-gt via-purple-600 to-purple-800 bg-cover">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0">
                <div class="absolute inset-0">
                    <div class="absolute top-20 right-20 w-64 h-64 bg-white opacity-5 rounded-full animate-float"></div>
                    <div class="absolute bottom-20 left-20 w-48 h-48 bg-white opacity-10 rounded-full animate-float"
                        style="animation-delay: -2s;"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white opacity-5 rounded-full animate-float"
                        style="animation-delay: -4s;"></div>
                </div>
                <div class="relative flex flex-col gap-6 sm:gap-8 justify-cener items-center pt-6 sm:pt-12">
                    <div>
                        <div class="w-16 h-16 bg-yellow-400 rounded-full mr-4 flex items-center justify-center">
                            <i class="fas fa-rocket text-white text-2xl"></i>
                        </div>
                    </div>
                    <div class="flex my-auto md:mx-[10%]">
                        <h1 data-aos="zoom-in"
                            class="text-4xl md:text-5xl lg:text-6xl w-full sm:w-fit !leading-snug text-center font-bold relative">
                            @if ($locale === 'vi')
                                Giải Pháp <span class="text-yellow-400"> Tiền Triển Khai & Tinh Chỉnh</span> ERP Toàn
                                Diện
                            @else
                                ERP <span class="text-yellow-400"> Pre-Implementation & Finetune</span> Lab
                            @endif
                        </h1>
                    </div>
                    <span data-aos="fade-up"
                        class="hidden md:block md:text-xl font-medium text-center text-white leading-normal">{{ __("Don't let ERP overwhelm you!") }}
                        {{ __("We'll help your business get fully prepared before implementing your ERP project") }},
                        <br />
                        {{ __('while fine-tuning your existing system for smoother and more efficient performance') }}.</span>
                    <span data-aos="fade-up"
                        class="md:hidden font-medium text-center text-white leading-normal">{{ __("Don't let ERP overwhelm you!") }}
                        {{ __("We'll help your business get fully prepared before implementing your ERP project") }}
                        {{ __('while fine-tuning your existing system for smoother and more efficient performance') }}.</span>
                    <div class="flex flex-col smallPhone:flex-row gap-4 smallPhone:gap-8">
                        <button data-aos="fade-right"
                            onclick="document.getElementById('challenge-section').scrollIntoView({ behavior: 'smooth' });"
                            class="rounded-full text-white bg-bg-btn font-semibold px-6 py-4 text-nowrap">{{ __('Get Started') }}</button>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                            class="rounded-full font-semibold px-6 py-4 bg-white border border-transparent hover:border hover:border-bg-btn ease-linear transition-all duration-200 text-nowrap">{{ __('Get in touch') }}
                            ›</button>
                    </div>
                    <div
                        class="flex flex-col sm:flex-row justify-between w-full sm:py-10 relative h-[300px] sm:h-[450px]">
                        <div class="relative sm:static w-full flex justify-center">
                            <img data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                class="absolute sm:11/12 md:w-3/4 lg:w-7/12 mt-4 sm:mt-0 md:-bottom-5 lg:-bottom-10 left-1/2 -translate-x-1/2"
                                style="transform: translateX(-50%)"
                                src="{{ asset('assets/images/banner-sap-intro.png') }}" alt="laptop-sap-b1">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="challenge-section"
                class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 py-12 sm:py-16 flex flex-col sm:flex-row gap-4 sm:gap-6 md:gap-8 lg:gap-16 bg-gradient-to-br from-gray-50 to-purple-50">
                <div class="items-center">
                    <!-- Right: Content -->
                    <div class="">
                        <div class="md:w-1/2">
                            <span
                                class="inline-block bg-red-100 text-red-600 px-6 py-3 rounded-full text-lg font-semibold mb-8">

                                {{ __('Practical challenges') }}
                            </span>
                            <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-8 !leading-snug">
                                {{ __('ERP Implementation Challenges') }}</span>
                            </h2>
                            <p class="text-xl text-gray-600 mb-12">
                                {{ __('More than') }} <span class="font-bold text-red-500">60%</span>
                                {{ lcfirst(__('Failures caused by poor ERP project preparation')) }}
                            </p>
                        </div>

                        <!-- Problem cards dạng vertical compact -->
                    </div>
                    <div class="grid lg:grid-cols-2 gap-16">
                        <!-- Left: Image placeholder -->
                        <div class="order-2">
                            <div id="image-box" class="relative">
                                <div
                                    class="w-full h-full bg-red-50 rounded-3xl flex items-center justify-center border-2 border-red-100">
                                    <img class="h-full rounded-3xl object-cover"
                                        src="{{ asset('assets/images/erp-preimplementation.webp') }}"
                                        alt="good-foundation">
                                </div>
                                <!-- Floating warning icons -->
                                <div
                                    class="absolute -top-4 -right-4 w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white animate-float">
                                    <i class="fas fa-times"></i>
                                </div>
                                <div class="absolute -bottom-4 -left-4 w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white animate-float"
                                    style="animation-delay: -2s;">
                                    <i class="fas fa-exclamation"></i>
                                </div>
                            </div>
                        </div>
                        <div id="info-box" class="space-y-6">
                            <div
                                class="flex items-start px-6 py-4 bg-white rounded-2xl shadow-lg border-l-4 border-red-500 hover-scale">
                                <div
                                    class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-exclamation-triangle text-red-500"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ __('Unclear processes') }}</h3>
                                    <p class="text-gray-600">
                                        {{ __('Lack of business process analysis and optimization before implementation') }}
                                    </p>
                                    <span
                                        class="inline-block mt-2 text-red-500 font-semibold text-lg">{{ __('45% of projects encounter issues') }}</span>
                                </div>
                            </div>

                            <div
                                class="flex items-start px-6 py-4 bg-white rounded-2xl shadow-lg border-l-4 border-yellow-500 hover-scale">
                                <div
                                    class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-database text-yellow-500"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ __('Unclean data') }}</h3>
                                    <p class="text-gray-600">
                                        {{ __('Outdated, duplicate, and inconsistent data complicates migration') }}
                                    </p>
                                    <span
                                        class="inline-block mt-2 text-yellow-500 font-semibold text-lg">{{ __('38% cost overrun') }}</span>
                                </div>
                            </div>

                            <div
                                class="flex items-start px-6 py-4 bg-white rounded-2xl shadow-lg border-l-4 border-primary hover-scale">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-users text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                                        {{ __('Employees are not ready') }}</h3>
                                    <p class="text-gray-600">
                                        {{ __('Lack of training and change management leads to user resistance') }}</p>
                                    <span
                                        class="inline-block mt-2 text-primary font-semibold text-lg">{{ __('52% user resistance rate') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>

    <section
        class="bg-bg-gray relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-bg-gray before:opacity-60 z-10 bg-no-repeat bg-center bg-[length:60%_auto] bg-[url('../assets/images/service-pattern.webp')]">
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <span
                class="inline-block bg-bg-main bg-opacity-10 text-bg-main px-6 py-3 rounded-full text-lg font-semibold mb-4 w-fit">
                Dịch vụ chuyên nghiệp
            </span>
            <div class="flex flex-col sm:flex-row gap-4">

                @if ($locale === 'vi')
                    <h1 class="text-3xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                        <span class="bg-gradient-to-r from-[#5c3c97] to-[#8B5FBF] bg-clip-text text-transparent">3 Nhóm
                            Dịch Vụ</span> Cốt Lõi
                    </h1>
                @else
                    <h1 class="text-3xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                        <span class="bg-gradient-to-r from-[#5c3c97] to-[#8B5FBF] bg-clip-text text-transparent">3 Core
                            Service</span> Group
                    </h1>
                @endif
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    {{ __('Comprehensive solutions for the ERP preparation phase to ensure success from the very first step') }}
                </p>
            </div>
            <div class="flex flex-row flex-wrap  gap-8 mt-12 items-end rounded-full">
                <div class="container mx-auto md:px-6">

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Service 1 -->
                        <div
                            class="transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl bg-gradient-to-br from-purple-50 to-white rounded-2xl shadow-xl p-8 border border-purple-100">
                            <div class="text-center mb-8">
                                <div
                                    class="w-20 h-20 bg-gradient-to-br from-primary-gt to-secondary-gt rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                                    <i class="fas fa-sitemap text-3xl text-white"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ __('Process analysis') }}</h3>
                                <h4 class="text-lg font-semibold text-primary-gt">{{ __('& ERP consulting') }}</h4>
                            </div>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Mapping current business processes') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Gap analysis and improvement proposal') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Consulting on selecting the right ERP system') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Implementation blueprint design') }}</span>
                                </li>
                            </ul>
                            <div class="mt-8 pt-6 border-t border-purple-100">
                                <div class="text-center">
                                    <span class="text-2xl font-bold text-primary">4-6
                                        {{ lcfirst(__('Weeks')) }}</span>
                                    <div class="text-sm text-gray-500">{{ lcfirst(__('Implementation time')) }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div
                            class="transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl bg-gradient-to-br from-blue-50 to-white rounded-2xl shadow-xl p-8 border border-blue-100">
                            <div class="text-center mb-8">
                                <div
                                    class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                                    <i class="fas fa-broom text-3xl text-white"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ __('Data cleansing') }}</h3>
                                <h4 class="text-lg font-semibold text-blue-600">{{ __('& migration preparation') }}
                                </h4>
                            </div>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Data audit and quality assessment') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Removing duplicate and inconsistent data') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Standardizing format and structure') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>{{ __('Migration strategy design') }}</span>
                                </li>
                            </ul>
                            <div class="mt-8 pt-6 border-t border-blue-100">
                                <div class="text-center">
                                    <span class="text-2xl font-bold text-blue-600">3-4
                                        {{ lcfirst(__('Weeks')) }}</span>
                                    <div class="text-sm text-gray-500">{{ lcfirst(__('Implementation time')) }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div
                            class="transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl bg-gradient-to-br from-orange-50 to-white rounded-2xl shadow-xl p-8 border border-orange-100">
                            <div class="text-center mb-8">
                                <div
                                    class="w-20 h-20 bg-gradient-to-br from-primary-gt to-secondary-gt rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                                    <i class="fas fa-graduation-cap text-3xl text-white"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Đào tạo nhân viên</h3>
                                <h4 class="text-lg font-semibold text-secondary-gt">& quản lý thay đổi</h4>
                            </div>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>Đánh giá mức độ sẵn sàng thay đổi</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>Thiết kế chương trình đào tạo</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>Workshop và simulation training</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5 mr-3 flex-shrink-0">
                                        <i class="fas fa-check text-xs text-green-600"></i>
                                    </div>
                                    <span>Xây dựng team champion</span>
                                </li>
                            </ul>
                            <div class="mt-8 pt-6 border-t border-orange-100">
                                <div class="text-center">
                                    <span class="text-2xl font-bold text-secondary-gt">2-3 tuần</span>
                                    <div class="text-sm text-gray-500">Thời gian thực hiện</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="relative bg-bg-dark bg-no-repeat bg-bottom bg-[length:60%_auto] before:bg-bg-dark before:opacity-95 before:absolute before:w-full before:h-full">
        <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up"
                    class="text-3xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed text-white flex-1">
                    Quy Trình Triển Khai</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4 flex-1">
                    <span data-aos="fade-up" class="text-lg text-white">{!! __(
                        'Lộ trình <b>"12 tuần"</b> phù hợp và đảm bảo hành trình chuyển đổi số của doanh nghiệp diễn ra suôn sẻ và đạt
                                                                                                                                                                                                                                                                                                                 hiệu quả tối đa.',
                    ) !!}.</span>
                    <div>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                            class="rounded-full bg-white text-text-primary font-semibold px-6 py-4">{{ __('Register Consultation') }}
                            ›</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="rounded-2xl cursor-default flex flex-col gap-6 bg-[#3D1473] md:bg-transparent hover:bg-[#3D1473] px-4 py-6 duration-100 delay-400 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            1</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">
                        Tuần 1-3: Phân tích hiện trạng
                    </h6>
                    <p class="text-white">Mapping quy trình, đánh giá dữ liệu, phân tích gap.</p>
                </div>
                <div
                    class="rounded-2xl cursor-default flex flex-col gap-6 bg-[#3D1473] md:bg-transparent md:hover:bg-[#3D1473] px-4 py-6 duration-100 delay-400 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            2</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">
                        Tuần 4-7: Chuẩn bị dữ liệu</h6>
                    <p class="text-white text-center md:text-left">
                        Làm sạch, chuẩn hóa, thiết kế migration plan.</p>
                </div>
                <div
                    class="rounded-2xl cursor-default flex flex-col gap-6 bg-[#3D1473] md:bg-transparent md:hover:bg-[#3D1473] px-4 py-6 duration-100 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            3</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">
                        Tuần 8-10: Đào tạo nhân viên</h6>
                    <p class="text-white text-center md:text-left">
                        Workshop, simulation, xây dựng team champion.</p>
                </div>
                <div
                    class="rounded-2xl cursor-default flex flex-col gap-6 bg-[#3D1473] md:bg-transparent md:hover:bg-[#3D1473] px-4 py-6 duration-100 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            4</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">
                        Tuần 11-12: Sẵn sàng triển khai</h6>
                    <p class="text-white text-center md:text-left">
                        Final check, go-live preparation, handover.</p>
                </div>
            </div>

        </div>
    </section>

    <section
        class="pt-16 overflow-hidden bg-white relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-10 z-10 bg-no-repeat bg-center bg-[length:70%_auto] bg-[url('../assets/images/map.webp')]">
        <!-- Background decorations -->
        <div class="absolute inset-0">
            <div class="absolute top-10 right-10 w-64 h-64 bg-white opacity-5 rounded-full animate-float"></div>
            <div class="absolute bottom-10 left-10 w-48 h-48 bg-white opacity-5 rounded-full animate-float"
                style="animation-delay: -3s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white opacity-5 rounded-full animate-float"
                style="animation-delay: -6s;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <span
                    class="inline-block bg-green-500 bg-opacity-20 px-6 py-3 rounded-full text-lg font-semibold mb-6">
                    Kết quả đo lường được
                </span>
                <h2 class="text-3xl md:text-5xl font-bold mb-8 leading-snug">
                    Lợi Ích <span class="text-yellow-500">Thực Tế</span>
                </h2>
                <p class="text-xl opacity-95 max-w-4xl mx-auto">
                    Kết quả từ các dự án thành công chúng tôi đã triển khai cho khách hàng
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div
                    class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-4 border border-white border-opacity-20 hover-scale">
                    <div class="w-20 h-20 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-4">85%</div>
                    <div class="text-xl font-semibold mb-2">Giảm thời gian triển khai</div>
                    <div class="opacity-80">Từ 12 tháng xuống 6 tháng</div>
                </div>

                <div
                    class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-4 border border-white border-opacity-20 hover-scale">
                    <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-dollar-sign text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-green-400 mb-4">70%</div>
                    <div class="text-xl font-semibold mb-2">Giảm chi phí dự án</div>
                    <div class="opacity-80">Tiết kiệm 2-5 tỷ VNĐ</div>
                </div>

                <div
                    class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-4 border border-white border-opacity-20 hover-scale">
                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-trophy text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-blue-500 mb-4">95%</div>
                    <div class="text-xl font-semibold mb-2">Tỷ lệ thành công</div>
                    <div class="opacity-80">Vs 40% thị trường</div>
                </div>

                <div
                    class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-4 border border-white border-opacity-20 hover-scale">
                    <div class="w-20 h-20 bg-bg-btn rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-bg-btn mb-4">60%</div>
                    <div class="text-xl font-semibold mb-2">Tăng hiệu quả</div>
                    <div class="opacity-80">{{ __('Productivity boost') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 mt-4">
            <div class="relative flex flex-col justify-center xl:flex-row items-center gap-8 md:gap-28 pb-12 sm:pb-24 mt-4"
                x-data="{ activeTab: 1 }">
                <div class="flex flex-col items-center xl:items-start gap-6">
                    <span
                        class="inline-block bg-purple-100 text-purple-600 px-6 py-3 rounded-full text-lg font-semibold md:mb-6">
                        {{ __('Best offer on the market') }}
                    </span>
                    <h1 class="text-3xl md:text-5xl font-bold md:mt-4">
                        Gói Dịch Vụ Linh Hoạt
                    </h1>
                    <p class="max-w-1/2 text-wrap text-lg font-medium">
                        {{ __('Let us help you access SAP solutions more easily') }}.</p>
                    <div class="flex justify-start">
                        <div role="tablist"
                            class="inline-flex flex-wrap justify-center bg-white rounded-[40px] p-3 mt-4 shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]"
                            @keydown.right.prevent.stop="$focus.wrap().next()"
                            @keydown.left.prevent.stop="$focus.wrap().prev()"
                            @keydown.home.prevent.stop="$focus.first()" @keydown.end.prevent.stop="$focus.last()">
                            <button id="tab-1"
                                class="flex-1 text-lg font-medium h-10 px-6 py-1 rounded-3xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                                :class="activeTab === 1 ? 'bg-bg-btn text-white' : 'text-slate-600 hover:text-slate-900'"
                                :tabindex="activeTab === 1 ? 0 : -1" :aria-selected="activeTab === 1"
                                aria-controls="tabpanel-1" @click="activeTab = 1" @focus="activeTab = 1">Cơ
                                bản</button>
                            <button id="tab-2"
                                class="flex-1 text-lg font-medium h-10 px-6 py-1 rounded-3xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                                :class="activeTab === 2 ? 'bg-bg-btn text-white' : 'text-slate-600 hover:text-slate-900'"
                                :tabindex="activeTab === 2 ? 0 : -1" :aria-selected="activeTab === 2"
                                aria-controls="tabpanel-2" @click="activeTab = 2" @focus="activeTab = 2">Toàn
                                diện</button>
                        </div>
                    </div>
                </div>
                <div class="xl:w-auto mx-auto md:mx-0 w-8/12 self-start xl:self-auto">
                    <div class="flex flex-col items-center md:items-end gap-8 md:flex-row flex-nowrap md:-gap-2 w-full justify-center mt-8 sm:mt-12 md:relative"
                        id="tabpanel-1" role="tabpanel" tabindex="0" aria-labelledby="tab-1"
                        x-show="activeTab === 1" x-transition:enter="transition ease duration-500 transform"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                        <article class="w-[350px]">
                            <div
                                class="group flex flex-col gap-10 items-center p-8 bg-border-main text-white rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 11.925l-1.7 1.3q-.15.125-.3.013t-.1-.288l.65-2.1l-1.75-1.4q-.125-.125-.075-.287T8.95 9h2.15l.65-2.05q.05-.175.25-.175t.25.175L12.9 9h2.125q.175 0 .238.163t-.063.287l-1.775 1.4l.65 2.1q.05.175-.1.288t-.3-.013zM12 21l-4.675 1.55q-.5.175-.913-.125t-.412-.8v-6.35q-.95-1.05-1.475-2.4T4 10q0-3.35 2.325-5.675T12 2t5.675 2.325T20 10q0 1.525-.525 2.875T18 15.275v6.35q0 .5-.413.8t-.912.125zm0-5q2.5 0 4.25-1.75T18 10t-1.75-4.25T12 4T7.75 5.75T6 10t1.75 4.25T12 16m-4 4.025L12 19l4 1.025v-3.1q-.875.5-1.888.788T12 18t-2.113-.288T8 16.926zm4-1.55" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-8">
                                    <h2 class="text-3xl font-bold text-center">{{ __('Business') }}</h2>
                                    <p class="text-lg font-semibol text-center">
                                        10-200 nhân viên
                                    </p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="font-bold">USD</span>
                                    <span class="font-bold text-5xl">566</span>
                                    {{-- <span class="font-bold">/{{ __('month') }}</span> --}}
                                </div>
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Phân tích 3-5 quy trình chính</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Làm sạch dữ liệu cơ bản</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Đào tạo 10-20 nhân viên</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Hỗ trợ 3 tháng</span>
                                    </div>
                                </div>
                                <div class="block mx-auto">
                                    <button class="rounded-full bg-white text-text-primary font-semibold px-6 py-4"
                                        x-data @click="$dispatch('open-modal', 'contact-modal')">Đăng ký liên
                                        hệ</button>
                                </div>

                        </article>

                    </div>
                    <div class="flex flex-col items-center md:items-start gap-8 md:flex-row flex-nowrap md:-gap-2 w-full justify-center gap-12 mt-8 sm:mt-12 md:relative"
                        id="tabpanel-2" role="tabpanel" tabindex="0" aria-labelledby="tab-2"
                        x-show="activeTab === 2" x-transition:enter="transition ease duration-500 transform"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                        <article class="w-[350px]">
                            <div
                                class="group flex flex-col gap-10 items-center p-8 bg-border-main text-white rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 11.925l-1.7 1.3q-.15.125-.3.013t-.1-.288l.65-2.1l-1.75-1.4q-.125-.125-.075-.287T8.95 9h2.15l.65-2.05q.05-.175.25-.175t.25.175L12.9 9h2.125q.175 0 .238.163t-.063.287l-1.775 1.4l.65 2.1q.05.175-.1.288t-.3-.013zM12 21l-4.675 1.55q-.5.175-.913-.125t-.412-.8v-6.35q-.95-1.05-1.475-2.4T4 10q0-3.35 2.325-5.675T12 2t5.675 2.325T20 10q0 1.525-.525 2.875T18 15.275v6.35q0 .5-.413.8t-.912.125zm0-5q2.5 0 4.25-1.75T18 10t-1.75-4.25T12 4T7.75 5.75T6 10t1.75 4.25T12 16m-4 4.025L12 19l4 1.025v-3.1q-.875.5-1.888.788T12 18t-2.113-.288T8 16.926zm4-1.55" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-8">
                                    <h2 class="text-3xl font-bold text-center">{{ __('Business') }}</h2>
                                    <p class="text-lg font-semibol text-center">
                                        10-500 nhân viên
                                    </p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="font-bold">USD</span>
                                    <span class="font-bold text-5xl">5,000</span>
                                    {{-- <span class="font-bold">/{{ __('month') }}</span> --}}
                                </div>
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Phân tích toàn diện 10+ quy trình</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Làm sạch & migration dữ liệu</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Đào tạo 50+ nhân viên</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Hỗ trợ 6 tháng</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                            viewBox="0 0 24 24" class="text-icon-main">
                                            <g fill="#000" stroke="#fff" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="m8 12l3 3l5-6" />
                                            </g>
                                        </svg>
                                        <span class="text-sm font-medium">Workshop chuyên sâu</span>
                                    </div>
                                </div>
                                <div class="block mx-auto">
                                    <button class="rounded-full bg-white text-text-primary font-semibold px-6 py-4"
                                        x-data @click="$dispatch('open-modal', 'contact-modal')">Đăng ký liên
                                        hệ</button>
                                </div>

                        </article>
                    </div>
                </div>
            </div>
    </section>

    <section
        class="bg-[length:auto_auto bg-[url('../assets/images/sap-bg.png')] bg-cover relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-black before:opacity-40 z-10 bg-no-repeat bg-center">
        <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-12 pt-8 lg:py-20">
            <div class="text-center md:mb-8">
                <span
                    class="inline-block bg-green-100 text-green-600 px-6 py-3 rounded-full text-lg font-semibold mb-6">
                    Tính năng nổi bật
                </span>
                <h2 class="text-3xl md:text-5xl !leading-normal font-bold text-white mb-4 md:mb-8">
                    Tại Sao Chọn Chúng Tôi?</span>
                </h2>
            </div>

            <div class="grid lg:grid-cols-3 gap-12 text-white">
                <!-- Feature 1 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-yellow-500 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-brain text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Phương pháp khoa học</h3>
                    <p class="text-gray-600 md:text-lg leading-relaxed">
                        Áp dụng các phương pháp luận quốc tế như SAP Activate, Agile và Lean để đảm bảo hiệu quả cao
                        nhất.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-yellow-500 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-users-cog text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Đội ngũ chuyên gia</h3>
                    <p class="text-gray-600 md:text-lg leading-relaxed">
                        Team có hơn 10 năm kinh nghiệm triển khai ERP, được chứng nhận SAP và có hiểu biết sâu về
                        doanh nghiệp Việt Nam.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-yellow-500 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-shield-alt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Cam kết bảo đảm</h3>
                    <p class="text-gray-600 md:text-lg leading-relaxed">
                        Cam kết hoàn tiền 100% nếu không đạt được các KPI đã thỏa thuận trong giai đoạn chuẩn bị.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section
        class="bg-white relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-40 z-10 bg-no-repeat bg-center bg-[length:70%_auto] bg-[url('../assets/images/sap-faq-bg.webp')]">
        <div
            class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-6 pt-8 md:py-12 lg:pt-20 lg:pb-14">
            <div class="text-center mb-4">
                <span
                    class="inline-block bg-blue-200 text-blue-600 px-6 py-3 rounded-full text-lg font-semibold mb-10">
                    Câu hỏi thường gặp
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-800 md:mb-4">
                    FAQ
                </h2>
            </div>

            <div class="container mx-auto">
                <div class="grid md:grid-cols-1 gap-8" x-data="{ selected: 1 }">
                    <div class="bg-white max-w-full mx-auto shadow">
                        <ul class="shadow-box">
                            <li class="relative border-b border-bg-gray">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between"> <span
                                            class="font-semibold text-lg md:text-xl">
                                            Tại sao cần giai đoạn chuẩn bị trước khi triển khai ERP?
                                        </span>
                                        <svg :class="{ 'transform rotate-180': selected == 1 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>Giai đoạn chuẩn bị giúp giảm 60-70% rủi ro thất bại của dự án ERP. Nó đảm
                                            bảo quy trình được tối ưu, dữ liệu sạch và nhân viên sẵn sàng, từ đó
                                            tiết kiệm thời gian và chi phí đáng kể.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between"> <span
                                            class="font-semibold text-lg md:text-xl">
                                            Thời gian chuẩn bị có quá dài không?</span>
                                        <svg :class="{ 'transform rotate-180': selected == 2 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>12 tuần chuẩn bị sẽ giúp tiết kiệm 6-12 tháng triển khai. Đây là khoản
                                            đầu tư thời gian rất hiệu quả để đảm bảo dự án thành công.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between"> <span
                                            class="font-semibold text-lg md:text-xl">
                                            Chi phí dịch vụ có đắt không?</span>
                                        <svg :class="{ 'transform rotate-180': selected == 3 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 3 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p> Chi phí chuẩn bị chỉ chiếm 5-10% tổng chi phí dự án ERP nhưng giúp tiết
                                            kiệm 30-50% chi phí tổng thể nhờ giảm rủi ro và thời gian triển khai.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 4 ? selected = 4 : selected = null">
                                    <div class="flex items-center justify-between"> <span
                                            class="font-semibold text-lg md:text-xl">
                                            Có hỗ trợ sau khi hoàn thành giai đoạn chuẩn bị? </span>
                                        <svg :class="{ 'transform rotate-180': selected == 4 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 4 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>Có, chúng tôi hỗ trợ 3-12 tháng tùy gói dịch vụ. Ngoài ra còn có dịch vụ
                                            tư vấn trong quá trình triển khai ERP thực tế.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div
                class="relative flex px-10 py-16 sm:px-16 sm:py-24 rounded-3xl bg-no-repeat bg-cover bg-[url('../assets/images/banner-bg.webp')] before:absolute before:w-full before:h-full before:rounded-3xl before:top-0 before:left-0 before:bg-bg-main before:opacity-70">
                <div class="flex flex-col gap-4 sm:gap-0 sm:flex-row justify-between sm:items-center z-10">
                    <h1 data-aos="fade-up"
                        class="text-3xl sm:text-5xl text-white font-bold cursour-default leading-snug md:leading-normal lg:leading-relaxed">
                        Bạn Đã Sẵn Sàng Để Nâng Cao Hiệu Suất Vận Hành Của Doanh Nghiệp?</h1>
                    <div>
                        <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                            class="rounded-full text-nowrap bg-icon-main font-semibold px-6 py-4">Đăng ký liên
                            hệ</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    @push('scripts')
        <!-- Import Swiper and initialize -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
        <script type="module">
            const Swipes = new Swiper('.partner-swiper-container', {
                loop: true,
                // slidesPerView: 2,
                watchOverflow: false,
                breakpoints: {
                    1024: {},
                    768: {
                        slidesPerView: 2,
                    },
                    480: {
                        slidesPerView: 1,
                    },
                },
            });

            const swiper = new Swiper('.screenshot-swiper-container', {
                slidesPerView: 2,
                spaceBetween: 20,
                autoplay: {
                    delay: 2500,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });

            AOS.init({
                once: true,
                duration: 500,
                easing: 'ease-in-out',
                delay: 100,
            });
        </script>
        <script type="module">
            gsap.registerPlugin(ScrollTrigger);

            gsap.from("#slide-up-animation", {
                y: 300,
                opacity: 0,
                duration: 0.5,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: "#slide-up-animation",
                    start: "top 90%",
                    end: "bottom 5%",
                }
            });

            window.videoPlayer = new Plyr('#sap-player');
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                window.addEventListener('load', () => {
                    if (window.innerWidth >= 768) {
                        const infoBox1 = document.getElementById('info-box');
                        const imageBox1 = document.getElementById('image-box');
                        if (infoBox1 && imageBox1) {
                            const infoBoxHeight1 = infoBox1.offsetHeight;
                            imageBox1.style.height = `${infoBoxHeight1}px`;
                        }
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
