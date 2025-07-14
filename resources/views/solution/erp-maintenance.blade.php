<x-app-layout>
    @section('title', __('ERP Maintenance') . ' | Grant Thornton TSC')
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
            class="pt-[150px] md:pb-24 overflow-hidden relative bg-gradient-to-br from-purple-100 via-blue-50 to-blue-50">
            <!-- Background Pattern -->
            <div class="absolute inset-0 bg-hero-pattern-1"></div>

            <!-- Animated Background Elements -->
            <div
                class="absolute top-20 left-10 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-float">
            </div>
            <div
                class="absolute top-40 right-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-float-delay">
            </div>
            <div
                class="absolute -bottom-8 left-20 w-72 h-72 bg-secondary rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float">
            </div>


            <div class="container relative z-10 max-w-7xl mx-auto px-4 sm:px-2 xl:px-0">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="animate-slide-in">
                        <!-- Badge -->
                        <div
                            class="inline-flex items-center gap-2 bg-purple-100 text-primary-gt  px-4 py-2 rounded-full text-sm font-medium mb-6">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-gt opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-gt"></span>
                            </span>
                            Trusted ERP Partner
                        </div>

                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                            {{ __("ERP Maintenance")}}
                            <span
                                class="block pb-1 text-4xl lg:text-5xl !leading-snug bg-gradient-to-r from-primary-gt via-blue-600 to-secondary-gt bg-clip-text text-transparent mt-2">
                                Đảm Bảo Hệ Thống Luôn Tối Ưu
                            </span>
                        </h1>

                        <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                            Dịch vụ bảo trì ERP toàn diện từ TSC giúp doanh nghiệp duy trì hệ thống ở trạng thái tốt
                            nhất,
                            đảm bảo hoạt động kinh doanh không bị gián đoạn.
                        </p>

                        <!-- Features List -->
                        <div class="flex flex-wrap gap-4 mb-8">
                            <div class="flex items-center gap-2 text-sm text-gray-700">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span>Hỗ trợ kịp thời</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-700">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span>Phản hồi nhanh</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-700">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span>Chuyên gia SAP B1</span>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <button x-data @click="$dispatch('open-modal', 'contact-modal')"
                                class="group relative inline-flex items-center justify-center px-8 py-4 overflow-hidden font-semibold text-white transition-all duration-300 ease-out bg-gradient-to-r from-primary-gt to-secondary-gt rounded-full hover:shadow-xl hover:scale-105">
                                <span
                                    class="absolute w-0 h-0 transition-all duration-500 ease-out bg-white rounded-full group-hover:w-56 group-hover:h-56 opacity-10"></span>
                                <span class="relative flex items-center">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    Liên hệ tư vấn
                                </span>
                            </button>
                            <button
                                class="group relative inline-flex items-center justify-center px-8 py-4 overflow-hidden font-semibold text-primary-gt transition-all duration-300 ease-out border-2 border-primary rounded-full hover:bg-primary-gt hover:text-white"
                                onclick="document.getElementById('why-choose-us-section').scrollIntoView({ behavior: 'smooth' });">
                                <span class="relative flex items-center">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Tìm hiểu thêm
                                </span>
                            </button>
                        </div>

                        <!-- Stats -->
                        {{-- <div class="mt-12 grid grid-cols-3 gap-8">
                            <div class="animate-fade-in" style="animation-delay: 0.5s">
                                <div class="text-2xl md:text-3xl font-bold text-primary">500+</div>
                                <div class="text-sm text-gray-600">Khách hàng</div>
                            </div>
                            <div class="animate-fade-in" style="animation-delay: 0.7s">
                                <div class="text-2xl md:text-3xl font-bold text-blue-600">10+</div>
                                <div class="text-sm text-gray-600">Năm kinh nghiệm</div>
                            </div>
                            <div class="animate-fade-in" style="animation-delay: 0.9s">
                                <div class="text-2xl md:text-3xl font-bold text-secondary">99.9%</div>
                                <div class="text-sm text-gray-600">Uptime</div>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Enhanced Illustration -->
                    <div class="relative animate-fade-in">
                        <!-- Main Container -->
                        <div class="relative">
                            <!-- Glow Effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-primary-gt to-blue-600 opacity-20 blur-3xl rounded-full">
                            </div>

                            <!-- 3D Server Stack with ERP Elements -->
                            <div class="relative z-10 transform perspective-1000">
                                <svg viewBox="0 0 600 500" class="w-full h-auto">
                                    <!-- Modern Geometric Background -->
                                    <g opacity="0.15">
                                        <!-- Hexagon Pattern -->
                                        <path d="M300 50 L450 125 L450 275 L300 350 L150 275 L150 125 Z" fill="none"
                                            stroke="url(#bgGradient)" stroke-width="2" class="animate-pulse-slow" />
                                        <path d="M300 80 L420 140 L420 260 L300 320 L180 260 L180 140 Z"
                                            fill="url(#bgGradient)" opacity="0.3" />

                                        <!-- Floating Geometric Shapes -->
                                        <rect x="100" y="100" width="80" height="80" rx="20"
                                            fill="url(#bgGradient)" opacity="0.4" transform="rotate(45 140 140)"
                                            class="animate-float" />
                                        <rect x="420" y="320" width="60" height="60" rx="15"
                                            fill="url(#bgGradient2)" opacity="0.4" transform="rotate(30 450 350)"
                                            class="animate-float" style="animation-delay: 1s" />

                                        <!-- Tech Grid -->
                                        <g opacity="0.5">
                                            <line x1="200" y1="100" x2="200" y2="400"
                                                stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="5,5" />
                                            <line x1="300" y1="100" x2="300" y2="400"
                                                stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="5,5" />
                                            <line x1="400" y1="100" x2="400" y2="400"
                                                stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="5,5" />
                                            <line x1="100" y1="200" x2="500" y2="200"
                                                stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="5,5" />
                                            <line x1="100" y1="300" x2="500" y2="300"
                                                stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="5,5" />
                                        </g>

                                        <!-- Orbiting Circles -->
                                        <circle cx="300" cy="250" r="180" fill="none"
                                            stroke="url(#bgGradient)" stroke-width="1" opacity="0.3"
                                            stroke-dasharray="10,5" class="animate-rotate-slow" />
                                        <circle cx="300" cy="250" r="220" fill="none"
                                            stroke="url(#bgGradient2)" stroke-width="1" opacity="0.2"
                                            stroke-dasharray="5,10" class="animate-rotate-slow"
                                            style="animation-direction: reverse" />
                                    </g>

                                    <!-- Central ERP Server -->
                                    <g transform="translate(200, 180)">
                                        <!-- Main Server -->
                                        <g class="">
                                            <rect x="0" y="0" width="200" height="80" rx="8"
                                                fill="url(#serverGradient)" filter="url(#shadow)" />
                                            <rect x="10" y="10" width="180" height="60" rx="4"
                                                fill="#F8F6FF" />

                                            <!-- SAP Logo Area -->
                                            <rect x="20" y="20" width="50" height="40" rx="4"
                                                fill="#0066CC" />
                                            <text x="45" y="45" text-anchor="middle" fill="white"
                                                font-family="Arial, sans-serif" font-size="16"
                                                font-weight="bold">SAP</text>

                                            <!-- Status Lights -->
                                            <circle cx="85" cy="30" r="5" fill="#10b981"
                                                class="animate-pulse" />
                                            <circle cx="100" cy="30" r="5" fill="#10b981"
                                                class="animate-pulse" style="animation-delay: 0.2s" />
                                            <circle cx="115" cy="30" r="5" fill="#10b981"
                                                class="animate-pulse" style="animation-delay: 0.4s" />

                                            <!-- Data Bars -->
                                            <rect x="85" y="45" width="90" height="4" rx="2"
                                                fill="#8B5FBF" />
                                            <rect x="85" y="52" width="70" height="4" rx="2"
                                                fill="#E0D4F7" />
                                        </g>
                                    </g>

                                    <!-- Gear/Maintenance Icon -->
                                    <g class="" transform="translate(120, 120)">
                                        <circle cx="0" cy="0" r="40" fill="#2563eb"
                                            opacity="0.1" />
                                        <g transform="translate(-20, -20)">
                                            <path
                                                d="M20 8 L22 2 L18 2 L20 8 M20 32 L22 38 L18 38 L20 32 M8 20 L2 22 L2 18 L8 20 M32 20 L38 22 L38 18 L32 20 M10 10 L6 4 L4 6 L10 10 M30 30 L36 34 L34 36 L30 30 M30 10 L34 4 L36 6 L30 10 M10 30 L4 34 L6 36 L10 30"
                                                stroke="#2563eb" stroke-width="2" fill="#2563eb" opacity="0.8" />
                                            <circle cx="20" cy="20" r="10" fill="#2563eb" />
                                            <circle cx="20" cy="20" r="6" fill="white" />
                                        </g>
                                    </g>

                                    <!-- Data Chart/Growth -->
                                    <g class="" style="animation-delay: 0.8s" transform="translate(450, 100)">
                                        <rect x="0" y="0" width="120" height="80" rx="8"
                                            fill="white" filter="url(#shadow)" />
                                        <rect x="10" y="10" width="100" height="60" rx="4"
                                            fill="#F0F9FF" />

                                        <!-- Chart Bars -->
                                        <rect x="20" y="50" width="15" height="10" fill="#E0D4F7" />
                                        <rect x="40" y="40" width="15" height="20" fill="#8B5FBF" />
                                        <rect x="60" y="30" width="15" height="30" fill="#663399" />
                                        <rect x="80" y="20" width="15" height="40" fill="#2563eb" />

                                        <!-- Trend Line -->
                                        <path d="M27 55 L47 45 L67 35 L87 25" stroke="#10b981" stroke-width="2"
                                            fill="none" />
                                        <circle cx="87" cy="25" r="3" fill="#10b981"
                                            class="animate-pulse" />
                                    </g>

                                    <!-- Database Icon -->
                                    <g class="" style="animation-delay: 1.2s"
                                        transform="translate(80, 320) scale(1, -1)">
                                        <ellipse cx="50" cy="-60" rx="40" ry="15"
                                            fill="#663399" opacity="0.2" />

                                        <path d="M10 -60 L10 -40 Q10 -25 50 -25 Q90 -25 90 -40 L90 -60" fill="#663399"
                                            opacity="0.8" />

                                        <ellipse cx="50" cy="-60" rx="40" ry="15"
                                            fill="#8B5FBF" />

                                        <ellipse cx="50" cy="-40" rx="40" ry="15"
                                            fill="none" stroke="#663399" stroke-width="2" />

                                        <text x="50" y="45" text-anchor="middle" fill="white" font-size="12"
                                            font-weight="bold" transform="scale(1, -1)">
                                            DATA
                                        </text>
                                    </g>

                                    <!-- Security Shield -->
                                    <g class="" style="animation-delay: 0.4s" transform="translate(450, 300)">
                                        <path d="M30 10 L30 30 Q30 45 45 50 Q60 45 60 30 L60 10 Q45 5 30 10"
                                            fill="#10b981" opacity="0.8" filter="url(#shadow)" />
                                        <path d="M40 20 L45 25 L55 15" stroke="white" stroke-width="3" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>

                                    <!-- Maintenance Wrench -->
                                    <g class="" style="animation-delay: 1.6s" transform="translate(350, 370)">
                                        <circle cx="20" cy="20" r="30" fill="#2563eb"
                                            opacity="0.1" />
                                        <g transform="rotate(-45 20 20)">
                                            <rect x="15" y="10" width="10" height="25" rx="2"
                                                fill="#2563eb" />
                                            <circle cx="20" cy="10" r="8" fill="none"
                                                stroke="#2563eb" stroke-width="4" />
                                            <circle cx="20" cy="35" r="8" fill="none"
                                                stroke="#2563eb" stroke-width="4" />
                                        </g>
                                    </g>

                                    <!-- ERP Text -->
                                    <text x="300" y="380" text-anchor="middle" fill="#663399" font-size="48"
                                        font-weight="bold" opacity="0.5" font-family="Arial, sans-serif">ERP</text>

                                    <!-- Connection Lines -->
                                    <path d="M140 140 Q300 180 400 180" stroke="url(#lineGradient)" stroke-width="2"
                                        fill="none" stroke-dasharray="5,5" opacity="0.4"
                                        class="animate-pulse-slow" />
                                    <path d="M140 340 Q300 260 400 260" stroke="url(#lineGradient)" stroke-width="2"
                                        fill="none" stroke-dasharray="5,5" opacity="0.4"
                                        class="animate-pulse-slow" style="animation-delay: 0.5s" />
                                    <path d="M480 140 Q400 200 400 260" stroke="url(#lineGradient)" stroke-width="2"
                                        fill="none" stroke-dasharray="5,5" opacity="0.4"
                                        class="animate-pulse-slow" style="animation-delay: 1s" />
                                    <path d="M480 320 Q400 300 370 370" stroke="url(#lineGradient)" stroke-width="2"
                                        fill="none" stroke-dasharray="5,5" opacity="0.4"
                                        class="animate-pulse-slow" style="animation-delay: 1.5s" />

                                    <!-- Definitions -->
                                    <defs>
                                        <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%"
                                            y2="100%">
                                            <stop offset="0%" style="stop-color:#663399;stop-opacity:0.8" />
                                            <stop offset="50%" style="stop-color:#2563eb;stop-opacity:0.6" />
                                            <stop offset="100%" style="stop-color:#8B5FBF;stop-opacity:0.8" />
                                        </linearGradient>
                                        <linearGradient id="bgGradient2" x1="100%" y1="0%"
                                            x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color:#2563eb;stop-opacity:0.8" />
                                            <stop offset="100%" style="stop-color:#663399;stop-opacity:0.8" />
                                        </linearGradient>
                                        <linearGradient id="serverGradient" x1="0%" y1="0%"
                                            x2="100%" y2="0%">
                                            <stop offset="0%" style="stop-color:#663399" />
                                            <stop offset="100%" style="stop-color:#8B5FBF" />
                                        </linearGradient>
                                        <linearGradient id="serverGradient2" x1="0%" y1="0%"
                                            x2="100%" y2="0%">
                                            <stop offset="0%" style="stop-color:#2563eb" />
                                            <stop offset="100%" style="stop-color:#3b82f6" />
                                        </linearGradient>
                                        <linearGradient id="lineGradient" x1="0%" y1="0%"
                                            x2="100%" y2="0%">
                                            <stop offset="0%" style="stop-color:#663399" />
                                            <stop offset="50%" style="stop-color:#2563eb" />
                                            <stop offset="100%" style="stop-color:#8B5FBF" />
                                        </linearGradient>
                                        <filter id="shadow">
                                            <feDropShadow dx="0" dy="4" stdDeviation="4"
                                                flood-opacity="0.2" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>

                            <!-- Rotating Ring -->
                            <div class="absolute inset-0 animate-rotate-slow">
                                <svg viewBox="0 0 600 500" class="w-full h-auto opacity-20">
                                    <circle cx="300" cy="250" r="220" fill="none"
                                        stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="10,5" />
                                </svg>
                            </div>
                        </div>

                        <!-- Floating Badges -->
                        <div class="absolute top-0 -right-4 bg-white rounded-lg shadow-lg p-3 animate-float">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="font-medium text-gray-700">Live System</span>
                            </div>
                        </div>

                        <div class="absolute bottom-8 -left-4 bg-white rounded-lg shadow-lg p-3 animate-float"
                            style="animation-delay: 1s">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-shield-alt text-primary"></i>
                                <span class="font-medium text-gray-700">Secured</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Stats Section -->
        <section class="py-20 bg-gradient-to-r from-primary-gt to-secondary-gt relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-40 h-40 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-60 h-60 bg-white rounded-full blur-3xl"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="grid md:grid-cols-4 gap-8 text-white text-center">
                    <div class="animate-slide-up">
                        <div class="text-4xl md:text-5xl font-bold mb-2">
                            <span class="counter" data-target="20">0</span>+
                        </div>
                        <p class="text-xl">Khách hàng tin tưởng</p>
                        <div class="w-16 h-1 bg-white/30 mx-auto mt-4"></div>
                    </div>

                    <div class="animate-slide-up" style="animation-delay: 0.2s">
                        <div class="text-4xl md:text-5xl font-bold mb-2">
                            <span class="counter" data-target="98">0</span>%
                        </div>
                        <p class="text-xl">Uptime đảm bảo</p>
                        <div class="w-16 h-1 bg-white/30 mx-auto mt-4"></div>
                    </div>

                    <div class="animate-slide-up" style="animation-delay: 0.4s">
                        <div class="text-4xl md:text-5xl font-bold mb-2">
                            <span class="counter" data-target="30">0</span>p
                        </div>
                        <p class="text-xl">Thời gian phản hồi</p>
                        <div class="w-16 h-1 bg-white/30 mx-auto mt-4"></div>
                    </div>

                    <div class="animate-slide-up" style="animation-delay: 0.6s">
                        <div class="text-4xl md:text-5xl font-bold mb-2">
                            <span class="counter" data-target="10">0</span>+
                        </div>
                        <p class="text-xl">Năm kinh nghiệm triển khai</p>
                        <div class="w-16 h-1 bg-white/30 mx-auto mt-4"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-choose-us-section"
            class="bg-gradient-to-br from-ai-purple/20 to-aiBlue/20 bg-cover relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-ai-pattern before:opacity-20 z-10 bg-no-repeat bg-center">
            <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-6 pt-8 lg:py-24">
                <div class="text-center mb-4 md:mb-8">
                    <span
                        class="inline-block bg-ai-green/20 text-ai-green px-6 py-3 rounded-full text-lg font-semibold mb-6">
                        Tại sao chọn chúng tôi?
                    </span>
                    <h2 class="text-3xl lg:text-5xl font-bold mb-8 !leading-normal">
                        Tại Sao Cần <span
                            class="bg-gradient-to-r from-ai-purple to-gtLightPurple bg-clip-text text-transparent !leading-normal">Bảo
                            Trì ERP?</span>
                    </h2>
                    <p class="text-lg text-dark-bg max-w-2xl mx-auto md:mb-8">
                        Hệ thống ERP không được bảo trì đúng cách có thể gây ra nhiều vấn đề nghiêm trọng
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Problem 1 -->
                    <div class="relative">
                        <div
                            class="bg-shiro p-6 rounded-2xl shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl h-full">
                            <div
                                class="absolute -top-2 -right-2 bg-ai-green text-shiro px-3 py-1 rounded-full text-xs font-semibold rotate-12 shadow-md">
                                Giải quyết!
                            </div>

                            <!-- Problem State -->
                            <div class="mb-6">
                                <div
                                    class="w-16 h-16 bg-aiBlue/20 rounded-2xl flex items-center justify-center mb-4 transition-transform hover:scale-110">
                                    <i class="fas fa-exclamation-triangle text-aiBlue text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-sumi mb-2">Gián đoạn hoạt động</h3>
                                <p class="text-dark-bg">Lỗi hệ thống ảnh hưởng trực tiếp đến quy trình kinh doanh</p>
                            </div>

                            <!-- Arrow Divider -->
                            <div class="flex items-center justify-center my-4">
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                                <i class="fas fa-arrow-down text-ai-purple mx-3 animate-bounce"></i>
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                            </div>

                            <!-- Solution State -->
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-16 h-16 aspect-1 bg-gradient-to-br from-ai-purple to-gtLightPurple rounded-2xl flex items-center justify-center shadow-md">
                                    <i class="fas fa-check text-shiro text-xl"></i>
                                </div>
                                <p class="font-bold text-ai-purple">Hệ thống hoạt động 24/7 ổn định</p>
                            </div>
                        </div>
                    </div>

                    <!-- Problem 2 -->
                    <div class="relative">
                        <div
                            class="bg-shiro p-6 rounded-2xl shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl h-full">
                            <div
                                class="absolute -top-2 -right-2 bg-ai-green text-shiro px-3 py-1 rounded-full text-xs font-semibold rotate-12 shadow-md">
                                Giải quyết!
                            </div>

                            <!-- Problem State -->
                            <div class="mb-6">
                                <div
                                    class="w-16 h-16 aspect-1 bg-ai-accent/20 rounded-2xl flex items-center justify-center mb-4 transition-transform hover:scale-110">
                                    <i class="fas fa-tachometer-alt text-ai-accent text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-sumi mb-2">Hiệu suất giảm sút</h3>
                                <p class="text-dark-bg">Hệ thống chậm chạp làm giảm năng suất làm việc</p>
                            </div>

                            <!-- Arrow Divider -->
                            <div class="flex items-center justify-center my-4">
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                                <i class="fas fa-arrow-down text-aiBlue mx-3 animate-bounce"></i>
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                            </div>

                            <!-- Solution State -->
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-16 h-16 aspect-1 bg-gradient-to-br from-aiBlue to-ai-accent rounded-2xl flex items-center justify-center shadow-md">
                                    <i class="fas fa-rocket text-shiro text-xl"></i>
                                </div>
                                <p class="font-bold text-aiBlue">Tối ưu hóa, tăng tốc độ xử lý</p>
                            </div>
                        </div>
                    </div>

                    <!-- Problem 3 -->
                    <div class="relative">
                        <div
                            class="bg-shiro p-6 rounded-2xl shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl h-full">
                            <div
                                class="absolute -top-2 -right-2 bg-ai-green text-shiro px-3 py-1 rounded-full text-xs font-semibold rotate-12 shadow-md">
                                Giải quyết!
                            </div>

                            <!-- Problem State -->
                            <div class="mb-6">
                                <div
                                    class="w-16 h-16 bg-ai-purple/20 rounded-2xl flex items-center justify-center mb-4 transition-transform hover:scale-110">
                                    <i class="fas fa-shield-alt text-ai-purple text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-sumi mb-2">Rủi ro bảo mật</h3>
                                <p class="text-dark-bg">Thiếu cập nhật khiến hệ thống dễ bị tấn công</p>
                            </div>

                            <!-- Arrow Divider -->
                            <div class="flex items-center justify-center my-4">
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                                <i class="fas fa-arrow-down text-ai-purple mx-3 animate-bounce"></i>
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                            </div>

                            <!-- Solution State -->
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-16 h-16 aspect-1 bg-gradient-to-br from-ai-purple to-gtLightPurple rounded-2xl flex items-center justify-center shadow-md">
                                    <i class="fas fa-lock text-shiro text-xl"></i>
                                </div>
                                <p class="font-bold text-ai-purple">Bảo mật tối đa, cập nhật liên tục</p>
                            </div>
                        </div>
                    </div>

                    <!-- Problem 4 -->
                    <div class="relative">
                        <div
                            class="bg-shiro p-6 rounded-2xl shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl h-full">
                            <div
                                class="absolute -top-2 -right-2 bg-ai-green text-shiro px-3 py-1 rounded-full text-xs font-semibold rotate-12 shadow-md">
                                Giải quyết!
                            </div>

                            <!-- Problem State -->
                            <div class="mb-6">
                                <div
                                    class="w-16 h-16 bg-aiBlue/20 rounded-2xl flex items-center justify-center mb-4 transition-transform hover:scale-110">
                                    <i class="fas fa-dollar-sign text-aiBlue text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-sumi mb-2">Chi phí phát sinh</h3>
                                <p class="text-dark-bg">Khắc phục khẩn cấp tốn kém hơn bảo trì định kỳ</p>
                            </div>

                            <!-- Arrow Divider -->
                            <div class="flex items-center justify-center my-4">
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                                <i class="fas fa-arrow-down text-aiBlue mx-3 animate-bounce"></i>
                                <div class="w-full h-px bg-sumi bg-opacity-10"></div>
                            </div>

                            <!-- Solution State -->
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-aiBlue to-ai-accent rounded-2xl flex items-center justify-center shadow-md">
                                    <i class="fas fa-piggy-bank text-shiro text-xl"></i>
                                </div>
                                <p class="font-bold text-aiBlue">Tiết kiệm chi phí đáng kể</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics -->
                <div class="md:mt-12 mb-2  bg-shiro rounded-2xl p-8 shadow-lg">
                    <div class="grid md:grid-cols-4 gap-6 text-center">
                        <div class="transition-transform">
                            <div class="text-3xl font-bold text-primary-gt mb-2">90%</div>
                            <p class="text-dark-bg">Giảm thời gian sự cố</p>
                        </div>
                        <div class="transition-transform">
                            <div class="text-3xl font-bold text-blue-600 mb-2" style="animation-delay: 0.2s">60%</div>
                            <p class="text-dark-bg">Tiết kiệm chi phí</p>
                        </div>
                        <div class="transition-transform">
                            <div class="text-3xl font-bold text-primary-gt mb-2" style="animation-delay: 0.4s">24/7
                            </div>
                            <p class="text-dark-bg">Hỗ trợ kịp thời</p>
                        </div>
                        <div class="transition-transform">
                            <div class="text-3xl font-bold text-blue-600 mb-2" style="animation-delay: 0.6s">99.9%
                            </div>
                            <p class="text-dark-bg">Uptime đảm bảo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-12 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-2 xl:px-0">
                <div class="text-center mb-8 md:mb-16">
                    <span
                        class="inline-block bg-bg-main bg-opacity-10 text-bg-main px-6 py-3 rounded-full text-lg font-semibold mb-4 w-fit">
                        Dịch vụ chuyên nghiệp
                    </span>
                    <h1
                        class="text-3xl lg:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed mb-8 md:mb-0">
                        <span class="bg-gradient-to-r from-[#5c3c97] to-[#8B5FBF] bg-clip-text text-transparent">Dịch
                            Vụ</span> Cung Cấp
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                        Giải pháp bảo trì ERP toàn diện đảm bảo duy trì hiệu suất và bảo mật hệ thống
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Service 1 -->
                    <div data-aos="fade-up"
                        class="bg-white rounded-3xl border border-[#E5E7EB] p-4 py-8 md:p-8 shadow-lg card-hover">
                        <div class="flex items-start mb-2 md:mb-6">
                            <div
                                class="w-16 h-16 aspect-1 bg-primary-gt rounded-2xl flex items-center justify-center mr-6">
                                <i class="fas fa-headset text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-1">Hỗ Trợ Kịp Thời & Xử Lý Sự Cố</h3>
                                <p class="text-gray-600 md:block hidden">Đội ngũ chuyên gia luôn sẵn sàng phản hồi và
                                    giải
                                    quyết mọi
                                    vấn đề trong thời gian nhanh nhất.</p>
                            </div>
                        </div>
                        <p class="text-gray-600 md:hidden mb-4">Đội ngũ chuyên gia luôn sẵn sàng phản hồi và giải
                            quyết mọi
                            vấn đề trong thời gian nhanh nhất.</p>
                        <img src="{{ asset('assets/images/erp-maintenance-support.jpg') }}" alt="Support Team"
                            class="w-full h-80 object-cover rounded-2xl">
                    </div>

                    <!-- Service 2 -->
                    <div data-aos="fade-up"
                        class="bg-white rounded-3xl border border-[#E5E7EB] p-4 py-8 md:p-8 shadow-lg card-hover">
                        <div class="flex items-start mb-6">
                            <div
                                class="w-16 h-16 aspect-1 bg-primary-gt rounded-2xl flex items-center justify-center mr-6">
                                <i class="fas fa-cogs text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-1">Tối Ưu Hóa Hiệu Suất</h3>
                                <p class="text-gray-600 md:block hidden">Phát triển nhỏ, điều chỉnh quy trình và cải
                                    tiến cấu
                                    hình để
                                    tối ưu hóa hiệu suất hệ thống.</p>
                            </div>
                        </div>
                        <p class="text-gray-600 md:hidden mb-4">Phát triển nhỏ, điều chỉnh quy trình và cải tiến
                            cấu
                            hình để
                            tối ưu hóa hiệu suất hệ thống.</p>
                        <img src="{{ asset('assets/images/erp-maintenance-performance.jpg') }}"
                            alt="Performance Optimization" class="w-full h-80 object-cover rounded-2xl">
                    </div>

                    <!-- Service 3 -->
                    <div data-aos="fade-up"
                        class="bg-white rounded-3xl border border-[#E5E7EB] p-4 py-8 md:p-8 shadow-lg card-hover">
                        <div class="flex items-start mb-6">
                            <div
                                class="w-16 h-16 aspect-1 bg-primary-gt rounded-2xl flex items-center justify-center mr-6">
                                <i class="fas fa-shield-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-1">Bảo Mật & Compliance</h3>
                                <p class="text-gray-600 md:block hidden">Quản lý giấy phép, cập nhật bảo mật và đảm bảo
                                    tuân
                                    thủ các
                                    quy định pháp lý.</p>
                            </div>
                        </div>
                        <p class="text-gray-600 md:hidden mb-4">Quản lý giấy phép, cập nhật bảo mật và đảm bảo tuân
                            thủ các
                            quy định pháp lý.</p>
                        <img src="{{ asset('assets/images/erp-maintenance-security.jpg') }}"
                            alt="Security and Compliance" class="w-full h-80 object-cover rounded-2xl">
                    </div>

                    <!-- Service 4 -->
                    <div data-aos="fade-up"
                        class="bg-white rounded-3xl border border-[#E5E7EB] p-4 py-8 md:p-8 shadow-lg card-hover">
                        <div class="flex items-start mb-6">
                            <div
                                class="w-16 h-16 aspect-1 bg-primary-gt rounded-2xl flex items-center justify-center mr-6">
                                <i class="fas fa-user-graduate text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-1">Đào Tạo & Tư Vấn</h3>
                                <p class="text-gray-600 md:block hidden">Đánh giá hành vi người dùng và đề xuất khóa
                                    đào tạo để
                                    khai
                                    thác tối đa tiềm năng ERP.</p>
                            </div>
                        </div>
                        <p class="text-gray-600 md:hidden mb-4">Đánh giá hành vi người dùng và đề xuất khóa đào tạo
                            để
                            khai
                            thác tối đa tiềm năng ERP.</p>
                        <img src="{{ asset('assets/images/erp-maintenance-training.jpg') }}"
                            alt="Training and Consultation" class="w-full h-80 object-cover rounded-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="contact"
            class="bg-gradient-to-br from-[#663399] to-[#8B5FBF] text-white py-20 relative overflow-hidden">
            <div class="container mx-auto px-6 text-center relative z-10">
                <div class="mb-12">
                    <h2 class="text-3xl lg:text-5xl font-bold mb-6 !leading-normal">
                        Sẵn sàng tối ưu hóa<br>
                        <span class="text-yellow-300">hệ thống ERP?</span>
                    </h2>
                    <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                        Liên hệ với TSC ngay hôm nay để được tư vấn miễn phí
                    </p>
                </div>

                <div
                    class="max-w-lg mx-auto bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                    <h3 class="text-2xl font-bold mb-6 text-white">Đăng ký đánh giá miễn phí</h3>
                    <form id="contact-form-maintenance" class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input id="fullname-input" type="text" placeholder="Họ và tên"
                                class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-yellow-300 text-white placeholder-gray-300">
                            <input id="email-input" type="email" placeholder="Email"
                                class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-yellow-300 text-white placeholder-gray-300">
                        </div>
                        <input id="phone-number-input" type="tel" placeholder="Số điện thoại"
                            class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-yellow-300 text-white placeholder-gray-300">
                        <input id="company-name-input" type="text" placeholder="Tên công ty"
                            class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-yellow-300 text-white placeholder-gray-300">
                        <select id="selected-purpose"
                            class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-yellow-300 text-white">
                            <option class="text-black hidden" value="">Dịch vụ quan tâm *</option>
                        </select>
                        <textarea id="message-input" placeholder="Lời nhắn" rows="3"
                            class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-yellow-300 text-white placeholder-gray-300"></textarea>
                        <button type="submit"
                            class="w-full bg-white text-primary-gt  font-bold py-4 rounded-xl text-lg transition transform hover:scale-[103%]">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Gửi yêu cầu liên hệ
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div
                    class="mt-12 border-t border-white border-opacity-10 pt-8 grid grid-cols-1 md:grid-cols-3 gap-8 opacity-90">
                    <div class="text-center">
                        <i class="fas fa-phone text-2xl mb-2"></i>
                        <div class="font-bold">Hotline</div>
                        <div>0123 456 789</div>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-envelope text-2xl mb-2"></i>
                        <div class="font-bold">Email</div>
                        <div>contact@tsc.com.vn</div>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-clock text-2xl mb-2"></i>
                        <div class="font-bold">Hỗ trợ</div>
                        <div>kịp thời</div>
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
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            counters.forEach(counter => {
                const animate = () => {
                    const value = +counter.getAttribute('data-target');
                    const data = +counter.innerText;
                    const time = value / speed;

                    if (data < value) {
                        counter.innerText = Math.ceil(data + time);
                        setTimeout(animate, 10);
                    } else {
                        counter.innerText = value;
                    }
                }

                // Start animation when in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animate();
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(counter);
            });

            function fetchPurposeOptions() {
                const locale = document.documentElement.lang || 'vi';

                fetch('/api/contact/contact-reasons', {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        const select = document.getElementById('selected-purpose');
                        if (Array.isArray(data)) {
                            data.forEach(option => {
                                const opt = document.createElement('option');
                                opt.value = option.id;
                                opt.textContent = locale === 'en' ? option.description_en : option.description;
                                opt.className = "text-black";
                                select.appendChild(opt);
                            });
                            select.value = "2";
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            document.getElementById('contact-form-maintenance').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = document.getElementById('contact-form-maintenance');
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;

                let data = {
                    fullname: form.querySelector('#fullname-input').value,
                    email: form.querySelector('#email-input').value,
                    company_name: form.querySelector('#company-name-input').value,
                    phone_number: form.querySelector('#phone-number-input').value,
                    contact_reason: form.querySelector('#selected-purpose').value,
                    message: form.querySelector('#message-input').value,
                };

                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                if (!data.fullname) {
                    showToast('warning', '{{ __('Please enter your full name') }}');
                    return false;
                }
                if (!data.email) {
                    showToast('warning', '{{ __('Please enter your email') }}');
                    return false;
                }
                if (!emailPattern.test(data.email)) {
                    showToast('warning', '{{ __('Email is not in correct format') }}');
                    return false;
                }
                // Fix: Đổi từ !!data.contact_reason thành !data.contact_reason
                if (!data.contact_reason) {
                    showToast('warning', '{{ __('Please choose a solution') }}');
                    return false;
                }

                // Disable submit button
                submitBtn.disabled = true;
                submitBtn.textContent = '{{ __('Sending...') }}';

                const locale = document.documentElement.lang || 'vi';

                fetch('/api/contact/submit', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-Locale': locale,
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(data => {
                                throw new Error(data.message || 'Có lỗi xảy ra, vui lòng thử lại sau');
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        alert(data.message || 'Gửi liên hệ thành công!');
                        document.getElementById('contact-form-maintenance').reset();
                    })
                    .catch(error => {
                        alert(error.message || 'Có lỗi xảy ra, vui lòng thử lại sau');
                    })
                    .finally(() => {
                        // Re-enable submit button
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
            });

            fetchPurposeOptions();
        </script>
    @endpush
</x-app-layout>
