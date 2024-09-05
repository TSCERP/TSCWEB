<x-app-layout>
    <section class="h-max bg-gradient-to-b from-[#f2f0f4] to-[#E9DDF4]">
        <div
            class="relative max-w-7xl mx-auto after:absolute after:w-1/4 after:bottom-0 after:left-0 after:aspect-[2/3] after:bg-no-repeat after:bg-cover after:bg-[url('../assets/images/banner-item-human.webp')] before:bg-[#C9BBEE] before:absolute before:w-1/4 before:bottom-0 before:left-0 before:h-1/3 before:aspect-[2/3] before:rounded-t-3xl">
            <div class="flex flex-col gap-8 justify-cener items-center pt-14">
                <div>
                    <img class="w-12 h-full" src="{{ asset('assets/images/banner-item-chat.webp') }}" alt="chat-with-us">
                </div>
                <div class="flex my-auto mx-[10%]">
                    <h1
                        class="text-7xl w-fit leading-snug text-center font-bold relative before:absolute before:w-[50px] before:h-[50px] before:bg-[url('../assets/images/banner-item-volumn.webp')] before:bottom-4 before:left-4 before:bg-no-repeat before:bg-cover before:scale-75 after:absolute after:w-[46px] after:h-[74px] after:bg-[url('../assets/images/banner-item-lightning.webp')] after:bottom-2 after:right-4 after:bg-no-repeat after:bg-cover after:scale-75">
                        Unlocking your business with management solutions</h1>
                </div>
                <span class="text-xl font-medium">"Discover how we can faciliate your digital transformation."</span>
                <div class="flex gap-8">
                    <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Get Started</button>
                    <button class="rounded-full font-semibold px-6 py-4">Demo ›</button>
                </div>
                <div class="mt-8">
                    <p>Trusted by Global Companies</p>
                    <div class="swiper-global-campanies"></div>
                </div>
                <div class="relative w-full flex justify-center pb-14 mb-8">
                    <div class="swiper-container w-[40vw] overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure class="bg-white h-28 w-52 rounded-lg p-2 inline-flex m-auto">
                                    <img src="{{ asset('assets/images/sap-erp.webp') }}" alt="sap-b1-logo">
                                </figure>
                            </div>

                            <div class="swiper-slide">
                                <figure class="bg-white h-28 w-52 rounded-lg p-2 inline-flex m-auto">
                                    <img src="{{ asset('assets/images/oracle-netsuite-erp.webp') }}"
                                        alt="oracle-netsuite-logo">
                                </figure>
                            </div>

                            <div class="swiper-slide">
                                <figure class="bg-white h-28 w-52 rounded-lg p-2 inline-flex m-auto">
                                    <img src="{{ asset('assets/images/beas-manufacturing.webp') }}"
                                        alt="beas-boyum-logo">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-0 right-0 drop-shadow-md">
                        <img class="w-72 h-full" src="{{ asset('assets/images/banner-item-summary.webp') }}"
                            alt="grant-thornton-tsc-erp">
                    </div>
                    <div class="absolute -top-44 -right-8 drop-shadow-md">
                        <img class="w-52 h-full" src="{{ asset('assets/images/banner-item-facebook.webp') }}"
                            alt="grant-thornton-tsc-erp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="relative bg-bg-dark bg-no-repeat bg-bottom bg-[length:60%_auto bg-[url('../assets/images/service-pattern.webp')] before:bg-bg-dark before:opacity-95 before:absolute before:w-full before:h-full">
        <div class="relative max-w-7xl mx-auto py-28">
            <div class="flex flex-col sm:flex-row gap-4 text-white">
                <h1 class="text-6xl text-white font-bold leading-relaxed">Your Social Media Journey Starts Here</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <button class="font-semibold w-fit" onclick="location.href='http://www.example.com'"
                        type="button">Show More ›</button>
                </div>
            </div>
            {{-- <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 sm:gap-16 md:gap-8 mt-12 place-items-center"> --}}
            <div class="flex flex-row flex-wrap justify-center gap-8 mt-12">
                {{-- <article
                    class="group flex flex-col gap-8 items-center text-white px-4 py-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in"> --}}
                <article
                    class="group flex flex-col gap-8 items-center text-white p-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-2rem)]">
                    <div class="text-5xl text-icon-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />
                        </svg>
                    </div>
                    <h6 class="font-semibold text-xl text-center">Business Process Solution</h6>
                    <p class="text-wrap text-center text-lg line-clamp-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    <button class="opacity-0 group-hover:opacity-100 text-icon-main duration-200 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em" viewBox="0 0 16 9">
                            <path fill="currentColor"
                                d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                            <path fill="currentColor"
                                d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                        </svg>
                    </button>
                </article>
                <article
                    class="group flex flex-col gap-8 items-center text-white p-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-2rem)]">
                    <div class="text-5xl text-icon-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />
                        </svg>
                    </div>
                    <h6 class="font-semibold text-xl text-center">Technology Consulting And Solution</h6>
                    <p class="text-wrap text-center text-lg line-clamp-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    <button class="opacity-0 group-hover:opacity-100 text-icon-main duration-200 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em" viewBox="0 0 16 9">
                            <path fill="currentColor"
                                d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                            <path fill="currentColor"
                                d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                        </svg>
                    </button>
                </article>
                <article
                    class="group flex flex-col gap-8 items-center text-white p-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-2rem)]">
                    <div class="text-5xl text-icon-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />
                        </svg>
                    </div>
                    <h6 class="font-semibold text-xl text-center">Advisory</h6>
                    <p class="text-wrap text-center text-lg line-clamp-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    <button class="opacity-0 group-hover:opacity-100 text-icon-main duration-200 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em" viewBox="0 0 16 9">
                            <path fill="currentColor"
                                d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                            <path fill="currentColor"
                                d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                        </svg>
                    </button>
                </article>
                <article
                    class="group flex flex-col gap-8 items-center text-white p-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-2rem)]">
                    <div class="text-5xl text-icon-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />
                        </svg>
                    </div>
                    <h6 class="font-semibold text-xl text-center">Tax</h6>
                    <p class="text-wrap text-center text-lg line-clamp-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    <button class="opacity-0 group-hover:opacity-100 text-icon-main duration-200 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em" viewBox="0 0 16 9">
                            <path fill="currentColor"
                                d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                            <path fill="currentColor"
                                d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                        </svg>
                    </button>
                </article>
                <article
                    class="group flex flex-col gap-8 items-center text-white p-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-2rem)]">
                    <div class="text-5xl text-icon-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />
                        </svg>
                    </div>
                    <h6 class="font-semibold text-xl text-center">Audit and Assurance</h6>
                    <p class="text-wrap text-center text-lg line-clamp-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    <button class="opacity-0 group-hover:opacity-100 text-icon-main duration-200 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em" viewBox="0 0 16 9">
                            <path fill="currentColor"
                                d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                            <path fill="currentColor"
                                d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                        </svg>
                    </button>
                </article>
                <article
                    class="group flex flex-col gap-8 items-center text-white p-8 hover:bg-[#3D1473] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-2rem)]">
                    <div class="text-5xl text-icon-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 20V7h6V4h6v3h6v13zm7-13h4V5h-4zm10 7.5h-6V16h-4v-1.5H4V19h16zm-9 .5h2v-2h-2zm-7-1.5h6V12h4v1.5h6V8H4zm8 .5" />
                        </svg>
                    </div>
                    <h6 class="font-semibold text-xl text-center">Korean and Japanese Desk</h6>
                    <p class="text-wrap text-center text-lg line-clamp-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    <button class="opacity-0 group-hover:opacity-100 text-icon-main duration-200 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.14em" height="1.2em" viewBox="0 0 16 9">
                            <path fill="currentColor"
                                d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                            <path fill="currentColor"
                                d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                        </svg>
                    </button>
                </article>
            </div>
            <div class="flex flex-row flex-wrap justify-center gap-8 mt-8">
                <div class="flex flex-col basis-[calc(33.33%-2rem)] gap-4 justify-center items-center">
                    <h5 class="text-icon-main font-semibold text-6xl">75</h5>
                    <span class="text-white text-lg">Projects</span>
                </div>
                <div class="flex flex-col basis-[calc(33.33%-2rem)] gap-4 justify-center items-center">
                    <h5 class="text-icon-main font-semibold text-6xl">3</h5>
                    <span class="text-white text-lg">Countries</span>
                </div>
                <div class="flex flex-col basis-[calc(33.33%-2rem)] gap-4 justify-center items-center">
                    <h5 class="text-icon-main font-semibold text-6xl">17</h5>
                    <span class="text-white text-lg">Experts</span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="relative max-w-7xl mx-auto py-16 flex gap-16">
            <div class="w-1/3 relative">
                <img class="h-full rounded-3xl" src="{{ asset('assets/images/feature-illustration.webp') }}"
                    alt="erp-solution">
                <img class="absolute w-7/12 bottom-4 right-4"
                    src="{{ asset('assets/images/feature-statistics.webp') }}" alt="statistics-solution">
            </div>
            <div
                class="relative flex-1 flex flex-col gap-8 before:absolute before:top-0 before:right-0 before:w-[60px] before:h-[61px] before:bg-contain before:bg-[url('../assets/images/feature-item-sun.webp')]">
                <div>
                    <span
                        class="uppercase text-xl font-semibold mt-16 py-1 px-4 rounded-full bg-bg-gray">Feature</span>
                </div>
                <h3 class="text-6xl font-bold leading-normal">"Want your business to thrive in Industry 4.0?"</h3>
                <p class="text-base leading-relaxed">Multiple accounting or ERP platforms? No worries! Running
                    management
                    reports
                    is easier now than ever. We specialize in integrating and streamlining various
                    systems, ensuring accurate and efficient reporting. Let us simplify your reporting
                    process and enhance your business management!</p>
                <ul class="list-disc list-inside space-y-4">
                    <li class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Time-saving, immediate application</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Comprehensive management information</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Process optimization</span>
                    </li>
                    <li class="flex items-center space-x-3">
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
                <div class="w-fit">
                    <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Demo</button>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="relative max-w-7xl mx-auto flex flex-col pb-24">
            <div class="flex justify-center">
                <img class="scale-75" src="{{ asset('assets/images/feature-item-square.webp') }}"
                    alt="sap-b1-pattern">
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 class="text-6xl font-bold leading-relaxed">Our Solution For Your Business</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <button class="font-semibold w-fit" onclick="location.href='http://www.example.com'"
                        type="button">Show More ›</button>
                </div>
            </div>
            <div class="flex flex-row flex-wrap justify-between gap-4 mt-12 items-end rounded-full bg-">
                <div
                    class="flex flex-col gap-8 justify-end text-white p-8 bg-cover bg-no-repeat bg-[url('../assets/images/stategy-img-1.webp')] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-1rem)] aspect-[2/3] relative before:absolute before:w-full before:h-full before:bg-transparent before:top-0 before:left-0 before:rounded-3xl before:bg-custom-gradient before:z-0 before:bg-no-repeat before:bg-cover before:opacity-50">
                    <div class="flex flex-col gap-8 z-10">
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
                <div
                    class="flex flex-col gap-8 justify-end text-white p-8 bg-cover bg-no-repeat bg-[url('../assets/images/stategy-img-2.webp')] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-1rem)] aspect-[2/3] relative before:absolute before:w-full before:h-full before:bg-transparent before:top-0 before:left-0 before:rounded-3xl before:bg-custom-gradient before:z-0 before:bg-no-repeat before:bg-cover before:opacity-50">
                    <div class="flex flex-col gap-8 z-10">
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
                <div
                    class="flex flex-col gap-8 justify-end text-white p-8 bg-cover bg-no-repeat bg-[url('../assets/images/stategy-img-3.webp')] rounded-3xl cursor-default duration-200 ease-in basis-[calc(33.33%-1rem)] aspect-[2/3] relative before:absolute before:w-full before:h-full before:bg-transparent before:top-0 before:left-0 before:rounded-3xl before:bg-custom-gradient before:z-0 before:bg-no-repeat before:bg-cover before:opacity-50">
                    <div class="flex flex-col gap-8 z-10">
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
        <div class="relative max-w-7xl mx-auto flex flex-col py-24 ">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 class="text-6xl font-bold leading-relaxed">Trusted By Strategic Global Partner</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <button class="font-semibold w-fit" onclick="location.href='http://www.example.com'"
                        type="button">Show More ›</button>
                </div>
            </div>
            <div class="flex flex-row flex-wrap justify-between gap-8 mt-12 items-end rounded-full bg-">
                <div
                    class="group flex flex-col gap-8 justify-end cursor-default duration-300 ease-in basis-[calc(33.33%-2rem)]">
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
                <div
                    class="group flex flex-col gap-8 justify-end cursor-default duration-300 ease-in basis-[calc(33.33%-2rem)]">
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
                <div
                    class="group flex flex-col gap-8 justify-end cursor-default duration-300 ease-in basis-[calc(33.33%-2rem)]">
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
        <div class="relative max-w-7xl mx-auto flex flex-col py-24 ">
            <div
                class="relative flex px-16 py-24 rounded-3xl bg-no-repeat bg-cover bg-[url('../assets/images/banner-bg.webp')] before:absolute before:w-full before:h-full before:rounded-3xl before:top-0 before:left-0 before:bg-bg-main before:opacity-70">
                <div class="flex justify-between items-center z-10">
                    <h1 class="text-5xl leading-snug text-white font-bold cursour-default">Are You Ready to Boost Your
                        Business Performance?</h1>
                    <div>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" class="rounded-full text-nowrap bg-icon-main font-semibold px-6 py-4">Register
                            Demo</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <button  class="bg-blue-500 text-white p-2 rounded">
            Mở Modal
        </button>

    <!-- Gọi modal component -->


    @push('scripts')
        <!-- Import Swiper and initialize -->
        <script type="module">
            const Swipes = new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 2,
                watchOverflow: false
            });
        </script>
    @endpush
</x-app-layout>
