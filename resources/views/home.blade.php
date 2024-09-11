<x-app-layout>
    <section class="h-max bg-gradient-to-b from-[#f2f0f4] to-[#E9DDF4]">
        <div class="relative max-w-7xl mx-auto">
            <div class="relative flex flex-col gap-6 sm:gap-8 justify-cener items-center pt-6 sm:pt-12">
                <div>
                    <img class="w-12 h-full" src="{{ asset('assets/images/banner-item-chat.webp') }}" alt="chat-with-us">
                </div>
                <div class="flex my-auto md:mx-[10%]">
                    <h1 data-aos="zoom-in"
                        class="text-5xl lg:text-7xl w-full sm:w-fit leading-snug md:!leading-tight text-center font-bold relative before:absolute before:w-[50px] before:h-[50px] before:bg-[url('../assets/images/banner-item-volumn.webp')] before:bottom-4 before:left-0 sm:before:left-4 before:bg-no-repeat before:bg-cover before:scale-75 after:absolute after:w-[46px] after:h-[74px] after:bg-[url('../assets/images/banner-item-lightning.webp')] after:bottom-2 after:right-0 sm:after:right-4 after:bg-no-repeat after:bg-cover after:scale-75">
                        {{ __('Unlocking your business with management solutions') }}</h1>
                </div>
                <span data-aos="fade-up" class="text-xl font-medium text-center">{{ __("Discover how we can faciliate your digital transformation.") }}</span>
                <div class="flex gap-8">
                    <button data-aos="fade-right"
                        class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">{{__("Get Started")}}</button>
                    <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left" class="rounded-full font-semibold px-6 py-4">{{__('Demo')}} ›</button>
                </div>
                <div class="flex flex-col sm:flex-row justify-between w-full sm:py-10 relative">
                    <div class="relative sm:static w-screen h-[480px] sm:h-auto sm:w-1/4 bottom-0 left-0 before:bg-[#C9BBEE] before:absolute before:w-2/3 before:left-1/2 before:-translate-x-1/2 sm:before:translate-x-0 sm:before:w-1/4 before:bottom-0 sm:before:left-0 before:h-2/3 sm:before:h-1/3 before:rounded-t-3xl">
                        <img data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            class="w-[320px] sm:w-[250px] lg:w-[320px] h-auto absolute top-0 left-[18%] sm:top-auto sm:bottom-0 sm:left-0 aspect-[2/3]"
                            src="{{ asset('assets/images/banner-item-human.webp') }}" alt="happy-with-advance">
                    </div>
                    <div class="mt-8 flex flex-col sm:gap-4 w-full sm:w-1/2 lg:w-2/5">
                        <p class="text-center">{{__('Trusted by Global Companies')}}</p>
                        <div data-aos="fade-up" class="partner-swiper-container w-full overflow-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure class="bg-white h-28 w-52 sm:h-22 sm:w-40 lg:h-28  lg:w-52 rounded-lg p-2 inline-flex m-auto">
                                        <img src="{{ asset('assets/images/sap-erp.webp') }}" alt="sap-b1-logo">
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure class="bg-white h-28 w-52 sm:h-22 sm:w-40 lg:h-28 lg:w-52 rounded-lg p-2 inline-flex m-auto">
                                        <img src="{{ asset('assets/images/oracle-netsuite-erp.webp') }}"
                                            alt="oracle-netsuite-logo">
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure class="bg-white h-28 w-52 sm:h-22 sm:w-40 lg:h-28 lg:w-52 rounded-lg p-2 inline-flex m-auto">
                                        <img src="{{ asset('assets/images/beas-manufacturing.webp') }}"
                                            alt="beas-boyum-logo">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full mt-6 sm:mt-0 sm:w-1/5 flex flex-col sm:flex-row justify-center items-center gap-4 mb-4 sm:mb-0">
                        <div data-aos="flip-right" class="static sm:absolute sm:bottom-12 lg:bottom-0 lg:-left-10 drop-shadow-md">
                            <img class="w-72 sm:w-[250px] lg:w-[250px] h-full" src="{{ asset('assets/images/banner-item-summary.webp') }}"
                                alt="grant-thornton-tsc-erp">
                        </div>
                        <div data-aos="flip-left" class="static sm:absolute sm:-top-10 sm:-left-8 lg:top-auto lg:bottom-36 lg:left-24 drop-shadow-md">
                            <img class="h-full w-72 sm:w-[150px] lg:w-[250px]" src="{{ asset('assets/images/banner-item-facebook.webp') }}"
                                alt="grant-thornton-tsc-erp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="relative bg-bg-dark bg-no-repeat bg-bottom bg-[length:60%_auto bg-[url('../assets/images/service-pattern.webp')] before:bg-bg-dark before:opacity-95 before:absolute before:w-full before:h-full">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex flex-col sm:flex-row gap-4 text-white">
                <h1 data-aos="fade-up"
                    class="text-4xl md:text-5xl lg:text-6xl font-bold leading-snug md:leading-normal lg:leading-relaxed">Your Social
                    Media Journey
                    Starts Here</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                        elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <button class="font-semibold w-fit" onclick="location.href='http://www.example.com'"
                        type="button">Show More ›</button>
                </div>
            </div>
            <div class="flex flex-row flex-wrap justify-center gap-8 mt-12">
                <?php
                $data = [
                    [
                        'svg' => '<path fill="currentColor" d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />',
                        'text' => __('Business Process Solution'),
                        'description' => __("With this service, Grant Thornton can help you in increasing the company's time flexibility and direct quality control. We can help increasing the speed of..."),
                        'link' => app()->getLocale() == 'vi' ? 'https://www.grantthornton.com.vn/services/outsourcing/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-giai-phap-doanh-nghiep/',
                    ],
                    [
                        'svg' => '<path fill="currentColor" d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />',
                        'text' => __('Technology Consulting And Solution'),
                        'description' => __("Our team of professionals and industry experts look forward to provide practical consultancies and end-to-end technology solutions to the clients."),
                        'link' =>route('home'),
                    ],
                    [
                        'svg' => '<path fill="currentColor" d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />',
                        'text' => __('Advisory Services'),
                        'description' => __("Our advisory services are designed to help clients in creating value and improving their business performance. We provide a wide range of services..."),
                        'link' =>  app()->getLocale() == 'vi' ? 'https://www.grantthornton.com.vn/services/outsourcing/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-giai-phap-doanh-nghiep/',
                    ],
                    [
                        'svg' => '<path fill="currentColor" d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />',
                        'text' => __('Tax Services'),
                        'description' => __("Our tax professionals are dedicated to creating distinctive, and often innovative, tax solutions. Our approach starts by developing an in-depth understanding..."),
                        'link' => app()->getLocale() == 'vi' ? 'https://www.grantthornton.com.vn/services/outsourcing/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-giai-phap-doanh-nghiep/',
                    ],
                    [
                        'svg' => '<path fill="currentColor" d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />',
                        'text' => __('Audit and Assurance'),
                        'description' => __("Grant Thornton's audit services focus on client service quality and building long-lasting relationships. We pride ourselves on having a Partner-led service for..."),
                        'link' =>  app()->getLocale() == 'vi' ? 'https://www.grantthornton.com.vn/services/outsourcing/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-giai-phap-doanh-nghiep/',
                    ],
                    [
                        'svg' => '<path fill="currentColor" d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />',
                        'text' => __('Korean and Japanese Desk'),
                        'description' => __("Grant Thornton is one of leading service providers in international incorporations in Vietnam with experience in helping our clients navigate jurisdictions..."),
                        'link' =>  app()->getLocale() == 'vi' ? 'https://www.grantthornton.com.vn/services/outsourcing/' : 'https://www.grantthornton.com.vn/vi/dich-vu/dich-vu-giai-phap-doanh-nghiep/',
                    ],
                ];

                $delay = 100;
                foreach ($data as $item) {
                    echo '
                                                                                                                                                                                                            <article data-aos="fade-up" data-aos-delay="' .
                        $delay .
                        '"
                                                                                                                                                                                                                class="group flex flex-col gap-8 items-center text-white p-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)]">
                                                                                                                                                                                                                <div class="text-5xl text-icon-main">
                                                                                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                                                                                                                                                                                                                        ' .
                        $item['svg'] .
                        '
                                                                                                                                                                                                                    </svg>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <h6 class="font-semibold text-xl text-center">' .
                        $item['text'] .
                        '</h6>
                                                                                                                                                                                                                <p class="text-wrap text-center text-lg line-clamp-5">' .
                        $item['description'] .
                        '</p>
                                                                                                                                                                                                                <a href="' .
                        $item['link'] .
                        '" class="opacity-0 group-hover:opacity-100 text-icon-main duration-200 ease-in">
                                                                                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em" viewBox="0 0 16 9">
                                                                                                                                                                                                                        <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                                                                                                                                                                                                        <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                                                                                                                                                                                                    </svg>
                                                                                                                                                                                                                </a>
                                                                                                                                                                                                            </article>
                                                                                                                                                                                                        ';
                    $delay += 200;
                }
                ?>
            </div>
            <div class="flex flex-row flex-wrap justify-center gap-8 mt-8">
                <div class="flex flex-col basis-[calc(33.33%-2rem)] gap-4 justify-center items-center">
                    <h5 id="project-quantity" class="count-up text-icon-main font-semibold text-6xl">1</h5>
                    <span class="text-white text-lg">{{__('Projects')}}</span>
                </div>
                <div class="flex flex-col basis-[calc(33.33%-2rem)] gap-4 justify-center items-center">
                    <h5 id="country-quantity" class="count-up text-icon-main font-semibold text-6xl">1</h5>
                    <span class="text-white text-lg">{{__('Countries')}}</span>
                </div>
                <div class="flex flex-col basis-[calc(33.33%-2rem)] gap-4 justify-center items-center">
                    <h5 id="expert-quantity" class="count-up text-icon-main font-semibold text-6xl">1</h5>
                    <span class="text-white text-lg">{{__('Experts')}}</span>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div
            class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 py-12 sm:py-16 flex flex-col sm:flex-row gap-4 sm:gap-6 md:gap-8 lg:gap-16">
            <div id="slide-up-animation" class="w-full md:w-1/3 relative overflow-hidden">
                <img class="h-full rounded-3xl" src="{{ asset('assets/images/feature-illustration.webp') }}"
                    alt="erp-solution">
                <img class="absolute w-7/12 bottom-4 right-4" src="{{ asset('assets/images/feature-statistics.webp') }}"
                    alt="statistics-solution">
            </div>
            <div
                class="relative flex-1 flex flex-col gap-8 before:absolute before:top-0 before:right-0 before:w-[60px] before:h-[61px] before:bg-contain before:bg-[url('../assets/images/feature-item-sun.webp')]">
                <div>
                    <span class="uppercase text-xl font-semibold mt-16 py-1 px-4 rounded-full bg-bg-gray">{{__('Technology Solutions Consulting')}}</span>
                </div>
                <h3 data-aos="fade-up"
                    class="text-4xl md:text-5xl lg:text-6xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                    "{{__('Want your business to thrive in Industry 4.0?')}}."</h3>
                <p data-aos="fade-up" class="text-base leading-relaxed">Multiple accounting or ERP platforms? No
                    worries! Running
                    management
                    reports
                    is easier now than ever. We specialize in integrating and streamlining various
                    systems, ensuring accurate and efficient reporting. Let us simplify your reporting
                    process and enhance your business management!</p>
                <ul class="list-disc list-inside space-y-4">
                    <li data-aos="fade-up" data-aos-delay="100" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Time-saving, immediate application</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Comprehensive management information</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="500" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Process optimization</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="700" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">For executives and chief accountants</span>
                    </li>
                </ul>
                <div data-aos="fade-up" class="w-fit">
                    <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')" class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Demo</button>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex justify-center mb-4 sm:mb-2">
                <img class="scale-75" src="{{ asset('assets/images/feature-item-square.webp') }}"
                    alt="sap-b1-pattern">
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up" class="text-4xl md:text-5xl lg:text-6xl font-bold leading-snug md:leading-normal lg:leading-relaxed">Our
                    Solution For Your Business</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <button class="font-semibold w-fit" onclick="location.href='http://www.example.com'"
                        type="button">Show More ›</button>
                </div>
            </div>
            <div class="flex flex-row flex-wrap justify-between gap-4 mt-12 items-end rounded-full bg-">
                <div data-aos="zoom-in-up" data-aos-delay="0"
                    class="flex flex-col gap-8 items-center justify-end text-white p-8 bg-cover bg-no-repeat bg-[url('../assets/images/stategy-img-1.webp')] rounded-3xl cursor-default duration-200 ease-in w-full sm:basis-[calc(50%-1rem)] md:basis-[calc(33.33%-1rem)] aspect-[2/3] relative before:absolute before:w-full before:h-full before:bg-transparent before:top-0 before:left-0 before:rounded-3xl before:bg-custom-gradient before:z-0 before:bg-no-repeat before:bg-cover before:opacity-50">
                    <div class="flex flex-col gap-8 z-10 w-full">
                        <h6 class="text-white text-2xl font-semibold">Enterprise Resource Planning</h6>
                        <button class="text-white duration-200 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em"
                                viewBox="0 0 16 9">
                                <path fill="currentColor"
                                    d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                <path fill="currentColor"
                                    d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div data-aos="zoom-in-up" data-aos-delay="200"
                    class="flex flex-col gap-8 items-center justify-end text-white p-8 bg-cover bg-no-repeat bg-[url('../assets/images/stategy-img-2.webp')] rounded-3xl cursor-default duration-200 ease-in w-full sm:basis-[calc(50%-1rem)] md:basis-[calc(33.33%-1rem)] aspect-[2/3] relative before:absolute before:w-full before:h-full before:bg-transparent before:top-0 before:left-0 before:rounded-3xl before:bg-custom-gradient before:z-0 before:bg-no-repeat before:bg-cover before:opacity-50">
                    <div class="flex flex-col gap-8 z-10 w-full">
                        <h6 class="text-white text-2xl font-semibold">Dashboard Reporting</h6>
                        <button class="text-white duration-200 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em"
                                viewBox="0 0 16 9">
                                <path fill="currentColor"
                                    d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                <path fill="currentColor"
                                    d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div data-aos="zoom-in-up" data-aos-delay="400"
                    class="flex flex-col gap-8 items-center justify-end text-white p-8 bg-cover bg-no-repeat bg-[url('../assets/images/stategy-img-3.webp')] rounded-3xl cursor-default duration-200 ease-in w-full sm:basis-[calc(50%-1rem)] md:basis-[calc(33.33%-1rem)] aspect-[2/3] relative before:absolute before:w-full before:h-full before:bg-transparent before:top-0 before:left-0 before:rounded-3xl before:bg-custom-gradient before:z-0 before:bg-no-repeat before:bg-cover before:opacity-50">
                    <div class="flex flex-col gap-8 z-10 w-full">
                        <h6 class="text-white text-2xl font-semibold">Business Process Solution</h6>
                        <button class="text-white duration-200 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em"
                                viewBox="0 0 16 9">
                                <path fill="currentColor"
                                    d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                <path fill="currentColor"
                                    d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="bg-bg-gray relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-bg-gray before:opacity-60 z-10 bg-no-repeat bg-center bg-[length:60%_auto] bg-[url('../assets/images/service-pattern.webp')]">
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex flex-col items-center sm:flex-row gap-4">
                <h1 data-aos="fade-up" class="text-4xl md:text-5xl lg:text-6xl font-bold leading-snug md:leading-normal lg:leading-relaxed">Trusted
                    By Strategic Global Partner
                </h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <button class="font-semibold w-fit" onclick="location.href='http://www.example.com'"
                        type="button">Show More ›</button>
                </div>
            </div>
            <div class="flex flex-row flex-wrap justify-between gap-8 mt-12 items-end rounded-full bg-">
                <div data-aos="zoom-in-right" data-aos-delay="0"
                    class="group flex flex-col gap-8 justify-end cursor-default duration-300 ease-in sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)]">
                    <figure class="rounded-3xl overflow-hidden">
                        <img class="group-hover:scale-115 ease-linear duration-300"
                            src="{{ asset('assets/images/connecting-img-1.webp') }}" alt="sap-b1-pattern">
                    </figure>
                    <h6 class="text-center font-semibold text-2xl">SAP Business One</h6>
                    <p class="text-center w-11/12">Lorem ipsum dolor sit amet, consetetur adipiscing elit test nữa nè
                    </p>
                    <div class="block mx-auto">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
                <div data-aos="zoom-in-down" data-aos-delay="200"
                    class="group flex flex-col gap-8 justify-end cursor-default duration-300 ease-in sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)]">
                    <figure class="rounded-3xl overflow-hidden">
                        <img class="group-hover:scale-115 ease-linear duration-300"
                            src="{{ asset('assets/images/connecting-img-2.webp') }}" alt="sap-b1-pattern">
                    </figure>
                    <h6 class="text-center font-semibold text-2xl">Oracle Netsuite</h6>
                    <p class="text-center w-11/12">Lorem ipsum dolor sit amet, consetetur adipiscing elit test nữa nè
                    </p>
                    <div class="block mx-auto">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
                <div data-aos="zoom-in-left" data-aos-delay="400"
                    class="group flex flex-col gap-8 justify-end cursor-default duration-300 ease-in sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)]">
                    <figure class="rounded-3xl overflow-hidden">
                        <img class="group-hover:scale-115 ease-linear duration-300"
                            src="{{ asset('assets/images/connecting-img-3.webp') }}" alt="sap-b1-pattern">
                    </figure>
                    <h6 class="text-center font-semibold text-2xl">Boyum IT - Beas Manufacturing</h6>
                    <p class="text-center w-11/12">Lorem ipsum dolor sit amet, consetetur adipiscing elit test nữa nè
                    </p>
                    <div class="block mx-auto">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0">
            <div class="relative flex flex-col items-center py-12 sm:py-24">
                <img data-aos="fade-down" class="w-12 absolute top-8 left-1 sm:top-24 sm:left-4"
                    src="{{ asset('assets/images/banner-item-chat.webp') }}" alt="chat-with-us">
                <img data-aos="fade-down" class="w-8 sm:w-10 absolute top-16 right-1 sm:top-24 sm:right-4"
                    src="{{ asset('assets/images/banner-item-lightning.webp') }}" alt="fast-erp">
                <h1 data-aos="fade-down" class="text-4xl md:text-5xl lg:text-6xl font-bold mt-4 sm:mt-0">{{__('Best Pricing')}}</h1>
                <p data-aos="fade-down" class="max-w-1/2 text-center text-wrap mt-8 font-medium">{{__('Dashboard BI Report works for businesses of all sizes, for the lowest price')}}.</p>
                <div class="flex flex-row flex-wrap w-full justify-center gap-8 mt-6 sm:mt-8 ">
                    <article data-aos="fade-up" data-aos-delay="200" class="md:basis-[calc(33.33%-2rem)]">
                        <div
                            class="group flex flex-col gap-8 items-center p-8 bg-border-main rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5">
                                        <path
                                            d="M17.252 12.49c-.284 2.365-1.833 3.31-2.502 3.996c-.67.688-.55.825-.505 1.834a.916.916 0 0 1-.916.971h-2.658a.92.92 0 0 1-.917-.971c0-.99.092-1.22-.504-1.834c-.76-.76-2.548-1.833-2.548-4.784a5.307 5.307 0 1 1 10.55.788" />
                                        <path
                                            d="M10.46 19.236v1.512c0 .413.23.752.513.752h2.053c.285 0 .514-.34.514-.752v-1.512m-2.32-10.54a2.227 2.227 0 0 0-2.226 2.227m10.338.981h1.834m-3.68-6.012l1.301-1.301M18.486 17l1.301 1.3M12 2.377V3.86m-6.76.73l1.292 1.302M4.24 18.3L5.532 17m-.864-5.096H2.835" />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-8">
                                <h2 class="text-3xl font-bold text-center">{{__('Basic')}}</h2>
                                <p class="text-lg font-semibol text-center">{{__('You can try for free before you commit. Contact us to get a demo')}}.</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold">USD</span>
                                <span class="font-bold text-5xl">8.0</span>
                                <span class="font-bold">/month</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Fully Dashboard and Reporting')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Connect with more information system')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M8 8L16 16"></path>
                                            <path d="M16 8L8 16"></path>
                                        </g>
                                    </svg>

                                    <span class="text-sm font-medium">{{__('Customizations')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M8 8L16 16"></path>
                                            <path d="M16 8L8 16"></path>
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Best Offer Additional Services')}}</span>
                                </div>
                            </div>
                            <div class="block mx-auto">
                                <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Choose
                                    Plan</button>
                            </div>
                        </div>
                    </article>
                    <article data-aos="fade-up" data-aos-delay="400" class="md:basis-[calc(33.33%-2rem)]">
                        <div
                            class="group flex flex-col gap-8 items-center p-8 text-white bg-text-primary rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                            <div class="w-auto h-16 flex items-center text-text-main">
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    viewBox="0 0 1024 1024">
                                    <path fill="currentColor"
                                        d="M1018.72 295.472L878.848 28.03C870.688 12.43 849.584-.322 832-.322H510.064c-.351-.015-.703-.11-1.054-.127c-.288 0-.56.113-.849.128h-316.16c-17.6 0-38.752 12.72-47.024 28.256L5.473 290.223c-8.289 15.536-6.624 39.937 3.631 54.257l480.016 669.152c5.153 7.184 12 10.815 18.832 10.815c6.785 0 13.584-3.536 18.768-10.591L1014.624 349.6c10.384-14.193 12.256-38.544 4.096-54.128m-76.353-7.843H770.911l68.656-196.608zM575.343 63.677h205.968l-63.888 182.928zm92.895 223.952H370.591L511.263 85.533zm-354.351-30.544L249.71 63.677h198.816zm366.863 94.544L508.718 844.173L345.262 351.629zM436.926 831.085L92.99 351.629h184.832zm311.616-479.456H933.71l-352.976 480.56zM188.478 82.413l68.096 205.216H79.326z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-8">
                                <h2 class="text-3xl font-bold text-center">{{__('Professional')}}</h2>
                                <p class="text-lg font-semibol text-center">{{__('You can try for free before you commit. Contact us to get a demo.')}}.</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold">USD</span>
                                <span class="font-bold text-5xl">166.0</span>
                                <span class="font-bold">/{{__('month')}}</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Fully Dashboard and Reporting')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Connect with more information system')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                         viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Customizations')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M8 8L16 16"></path>
                                            <path d="M16 8L8 16"></path>
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Best Offer Additional Services')}}</span>
                                </div>
                            </div>
                            <div class="block mx-auto">
                                <button class="rounded-full bg-white text-text-primary font-semibold px-6 py-4">Choose
                                    Plan</button>
                            </div>
                        </div>
                    </article>
                    <article data-aos="fade-up" data-aos-delay="600" class="md:basis-[calc(33.33%-2rem)]">
                        <div
                            class="group flex flex-col gap-8 items-center p-8 bg-border-main rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m12 11.925l-1.7 1.3q-.15.125-.3.013t-.1-.288l.65-2.1l-1.75-1.4q-.125-.125-.075-.287T8.95 9h2.15l.65-2.05q.05-.175.25-.175t.25.175L12.9 9h2.125q.175 0 .238.163t-.063.287l-1.775 1.4l.65 2.1q.05.175-.1.288t-.3-.013zM12 21l-4.675 1.55q-.5.175-.913-.125t-.412-.8v-6.35q-.95-1.05-1.475-2.4T4 10q0-3.35 2.325-5.675T12 2t5.675 2.325T20 10q0 1.525-.525 2.875T18 15.275v6.35q0 .5-.413.8t-.912.125zm0-5q2.5 0 4.25-1.75T18 10t-1.75-4.25T12 4T7.75 5.75T6 10t1.75 4.25T12 16m-4 4.025L12 19l4 1.025v-3.1q-.875.5-1.888.788T12 18t-2.113-.288T8 16.926zm4-1.55" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-8">
                                <h2 class="text-3xl font-bold text-center">{{__('Premium')}}</h2>
                                <p class="text-lg font-semibol text-center">{{__('You can try for free before you commit. Contact us to get a demo.')}}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold">USD</span>
                                <span class="font-bold text-5xl">416.0</span>
                                <span class="font-bold">/{{__('month')}}}</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Fully Dashboard and Reporting')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Connect with more information system')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Customizations')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                         viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Best Offer Additional Services')}}</span>
                                </div>
                            </div>
                            <div class="block mx-auto">
                                <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Choose
                                    Plan</button>
                            </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section
        class="bg-white relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-40 z-10 bg-no-repeat bg-center bg-[length:70%_auto] bg-[url('../assets/images/map.webp')]">
        <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-24 ">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up"
                    class="text-4xl md:text-5xl lg:text-6xl font-bold leading-snug md:leading-normal lg:leading-relaxed">Our
                    Customer Stories</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <button class="font-semibold w-fit" onclick="location.href='http://www.example.com'"
                        type="button">Show More ›</button>
                </div>
            </div>
            {{-- <div class="flex flex-row flex-wrap justify-between gap-8 mt-12 items-end rounded-full bg-"> --}}
            <div class="testimonial-swiper-container w-full overflow-hidden">
                <div class="swiper-wrapper">
                    @php
                        $testimonials = [
                            [
                                'rate' => 4.5,
                                'content' => 'Excellent service and great support.',
                                'name' => 'John D.',
                                'platform' => 'LinkedIn',
                                'img' =>
                                    'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                            ],
                            [
                                'rate' => 4.2,
                                'content' => 'Great experience overall, will come back again.',
                                'name' => 'Alice W.',
                                'platform' => 'Facebook',
                                'img' =>
                                    'https://images.unsplash.com/photo-1527980965255-d3b416303d12?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YXZhdGFyfGVufDB8fDB8fHww',
                            ],
                            [
                                'rate' => 5.0,
                                'content' => 'Amazing! I am very satisfied with the quality.',
                                'name' => 'Michael S.',
                                'platform' => 'Twitter',
                                'img' =>
                                    'https://images.unsplash.com/photo-1544005313-94ddf0286df2?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 3.8,
                                'content' => 'Good, but some improvements could be made.',
                                'name' => 'Sarah K.',
                                'platform' => 'Instagram',
                                'img' =>
                                    'https://images.unsplash.com/photo-1558237006-f6e7b6b8e77d?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjN8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.9,
                                'content' => 'Absolutely loved it, highly recommended!',
                                'name' => 'Jessica M.',
                                'platform' => 'Google',
                                'img' =>
                                    'https://images.unsplash.com/photo-1552058544-f2b08422138a?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.0,
                                'content' => 'Very satisfied, will recommend to others.',
                                'name' => 'David P.',
                                'platform' => 'YouTube',
                                'img' =>
                                    'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 3.5,
                                'content' =>
                                    'Good experience, but there is room for improvement. Good experience, but there is room for improvement. Good experience test tiếp nè ghasdd asd',
                                'name' => 'Emily R.',
                                'platform' => 'LinkedIn',
                                'img' =>
                                    'https://images.unsplash.com/photo-1517841905240-472988babdf9?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.7,
                                'content' => 'Excellent quality, I am impressed.',
                                'name' => 'Ethan T.',
                                'platform' => 'Twitter',
                                'img' =>
                                    'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzd8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.3,
                                'content' => 'Very good, just a few minor issues.',
                                'name' => 'Sophia L.',
                                'platform' => 'Facebook',
                                'img' =>
                                    'https://images.unsplash.com/photo-1527980965255-d3b416303d12?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzl8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                        ];
                    @endphp

                    @foreach ($testimonials as $index => $testimonial)
                        @php
                            $backgrounds = ['bg-bg-secondary', 'bg-border-main', 'bg-bg-gray'];
                            $backgroundClass = $backgrounds[$index % 3];
                        @endphp
                        <div class="swiper-slide flex-shrink-0 w-full !h-auto">
                            <div
                                class="group w-full h-full bg-{{ $index % 3 == 0 ? 'bg-secondary' : ($index % 3 == 1 ? 'border-main' : 'bg-gray') }} rounded-3xl p-6 flex flex-col gap-8 justify-end cursor-default duration-300 ease-in">
                                <div><x-rate-stars :rate="$testimonial['rate']" /></div>

                                <p class="w-11/12 overflow-hidden text-ellipsis group-hover:tooltip"
                                    style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; height: calc(3 * 1.45em);"
                                    data-tooltip="{{ $testimonial['content'] }}">
                                    {{ $testimonial['content'] }}
                                </p>

                                <div class="flex justify-between">
                                    <div class="flex gap-4">
                                        <div class="flex">
                                            <img class="w-16 aspect-square rounded-full !object-cover" style="aspect-ratio: 1/1"
                                                src="{{ $testimonial['img'] }}" alt="{{ $testimonial['name'] }}">
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <p class="uppercase font-semibold text-lg">{{ $testimonial['name'] }}</p>
                                            <p class="text-lg">{{ $testimonial['platform'] }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.65em" height="1.8em"
                                            viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M448 296c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8h-64c-35.3 0-64-28.7-64-64v-64c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64zm-256 0c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H64c-35.3 0-64-28.7-64-64v-64c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <section>
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div
                class="relative flex px-10 py-16 sm:px-16 sm:py-24 rounded-3xl bg-no-repeat bg-cover bg-[url('../assets/images/banner-bg.webp')] before:absolute before:w-full before:h-full before:rounded-3xl before:top-0 before:left-0 before:bg-bg-main before:opacity-70">
                <div class="flex flex-col gap-4 sm:gap-0 sm:flex-row justify-between sm:items-center z-10">
                    <h1 data-aos="fade-up"
                        class="text-3xl sm:text-5xl text-white font-bold cursour-default leading-snug md:leading-normal lg:leading-relaxed">Are You
                        Ready to Boost Your
                        Business Performance?</h1>
                    <div>
                        <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                            class="rounded-full text-nowrap bg-icon-main font-semibold px-6 py-4">Register
                            Demo</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                    1024: {
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    480: {
                        slidesPerView: 1,
                    },
                },
            });

            const swiper = new Swiper('.testimonial-swiper-container', {
                slidesPerView: 3,
                spaceBetween: 20,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                    },
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
                duration: 1000,
                easing: 'ease-in-out',
                delay: 100,
            });

            document.addEventListener('DOMContentLoaded', function() {
                var options = {
                    useEasing: true,
                    useGrouping: true,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    enableScrollSpy: true,
                    scrollSpyOnce: true
                };
                var countUp = new CountUp("project-quantity", 10, options);
                var countUp2 = new CountUp("country-quantity", 3, options);
                var countUp3 = new CountUp("expert-quantity", 16, options);
            });
        </script>
        <script>
            gsap.registerPlugin(ScrollTrigger);

            gsap.from("#slide-up-animation", {
                y: 300,
                opacity: 0,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: "#slide-up-animation",
                    start: "top 90%",
                    end: "bottom 5%",
                    // scrub: true         // Đồng bộ hóa hiệu ứng với vị trí cuộn
                }
            });
        </script>
    @endpush
</x-app-layout>
