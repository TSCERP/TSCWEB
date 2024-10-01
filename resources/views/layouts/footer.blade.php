<footer class="bg-white dark:bg-gray-800">
    <div class="flex flex-col max-w-7xl mx-auto xl:px-0 px-4 sm:px-2">
        <div
            class="flex flex-col sm:grid sm:grid-cols-[35%_1fr] gap-8 sm:gap-8 md:gap-16 py-6 sm:py-14 relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:opacity-25 before:z-0 before:bg-no-repeat before:bg-center sm:before:bg-top before:bg-[length:85%_auto] sm:before:bg-[length:65%_auto] before:bg-[url('../assets/images/service-pattern.webp')]">
            <div class="flex flex-col gap-4 x-10">
                <x-application-logo class="w-44" />
                <p class="text-base text-justify">{!! __('app.footerMessage1') !!}</p>
                <p class="text-base text-justify">{!! __('app.footerMessage2') !!}</p>
                <div class="flex flex-col gap-3">
                    <h5 class="uppercase font-bold text-lg md:font-semibold mb-0 mt-4 md:mt-0">{{ __('Connect with us') }}</h5>
                    <div class="flex gap-4">
                        <a href="https://www.grantthornton.com.vn" target="_blank"
                            class="ease duration-150 hover:cursor-pointer rounded-full p-1.5 aspect-square bg-bg-secondary text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/grant-thornton-vietnam-ltd/" target="_blank"
                            class="ease duration-150 hover:cursor-pointer rounded-full p-1.5 aspect-square bg-bg-secondary text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@GrantThorntonVietnam" target="_blank"
                            class="ease duration-150 hover:cursor-pointer rounded-full p-1.5 aspect-square bg-bg-secondary text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:grid sm:grid-cols-2 gap-6 sm:gap-12 md:gap-16 z-10">
                <div class="flex flex-col gap-3">
                    <h5 class="uppercase font-bold text-lg md:font-semibold mb-0 mt-4 md:mt-0 md:mb-4">{{__('Contact')}}</h5>
                    <p>
                        {!! __('<b>HCMC</b>: 14th Floor, Pearl Plaza Building, 561A Dien Bien Phu Street, Ward 25, Binh Thanh District, HCMC') !!}
                    </p>
                    <p>
                        {!! __('<b>HN</b>: 18th Floor, Hoa Binh International Office Building, 106 Hoang Quoc Viet Street, Nghia Do Ward, Cau Giay District, Hanoi') !!}
                    </p>
                    <p><b>{{__('Hotline')}}</b>: <a class="" href="tel:+84982232343">(+84) 24 3850 1686</a></p>
                    <p><b>Email</b>: <a class="" href="mailto:Grant.Thornton@vn.gt.com">Grant.Thornton@vn.gt.com</a></p>
                </div>
                <div class="flex flex-col gap-3">
                    <h5 class="uppercase font-bold text-lg md:font-semibold mb-0 mt-4 md:mt-0 md:mb-4">{{__('Company information')}}</h5>
                    <a href="#" target="_blank" class="font-medium duration-150 ease hover:text-text-main">{{__('Home page')}}</a>
                    <a href="/about-us" target="_blank" class="font-medium duration-150 ease hover:text-text-main">{{__('Contact Us')}}</a>
                    <a href="#" target="_blank" class="font-medium duration-150 ease hover:text-text-main">SAP Business One</a>
                    <a href="#" target="_blank" class="font-medium duration-150 ease hover:text-text-main">Oracle Netsuite</a>
                    <a href="#" target="_blank" class="font-medium duration-150 ease hover:text-text-main">{{__('Dashboard BI Reporting')}}</a>
                    <a href="#" target="_blank" class="font-medium duration-150 ease hover:text-text-main">{{__('Career')}}</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 sm:gap-0 sm:flex-row sm:justify-between py-8 border-t border-border-main">
            <span>{{ __('Operated by') }} <b class="text-border-main ease duration-150 hover:text-text-primary">TSC -
                    Technology
                    Solution Consulting</b></span>
            <div class="flex gap-4">
                <a
                    class="font-medium text-border-main ease duration-150 hover:text-text-primary">{{ __('Privacy Policy') }}</a>
                <a
                    class="font-medium text-border-main ease duration-150 hover:text-text-primary">{{ __('Terms of Use') }}</a>
            </div>
        </div>
    </div>
</footer>
