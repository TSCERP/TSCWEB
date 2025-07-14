<x-app-layout>
    @section('title', __('Japanese IT Hub') . ' | Grant Thornton TSC')
    @push('styles')
        <style>
            .sakura-decoration {
                position: absolute;
                width: 15px;
                height: 15px;
                background: #FFCCCB;
                border-radius: 50%;
                opacity: 0.6;
                animation: float 6s ease-in-out infinite;
            }

            .sakura-decoration:before {
                content: '🌸';
                position: absolute;
                top: -5px;
                left: -5px;
                font-size: 20px;
            }

            .bridge-container {
                position: relative;
                height: 300px;
                overflow: hidden;
            }

            .country-box {
                position: absolute;
                width: 120px;
                height: 80px;
                border-radius: 12px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .country-box:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            }

            .vietnam-box {
                top: 20px;
                left: 20px;
                background: linear-gradient(135deg, #ff6b6b, #ee5a52);
                color: white;
            }

            .japan-box {
                bottom: 20px;
                right: 20px;
                background: linear-gradient(135deg, #4ecdc4, #44a08d);
                color: white;
            }

            .bridge-path {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 200px;
                height: 4px;
                background: linear-gradient(to right, #C62D42, #E6B422, #002FA7);
                border-radius: 2px;
                transform-origin: center;
                animation: bridgeGlow 3s ease-in-out infinite;
            }

            @keyframes bridgeGlow {

                0%,
                100% {
                    box-shadow: 0 0 5px rgba(198, 45, 66, 0.3);
                    transform: translate(-50%, -50%) scale(1);
                }

                50% {
                    box-shadow: 0 0 20px rgba(198, 45, 66, 0.6);
                    transform: translate(-50%, -50%) scale(1.05);
                }
            }

            .service-flow {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                display: flex;
                gap: 30px;
                align-items: center;
            }

            .service-icon {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 18px;
                animation: pulse 2s infinite;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .service-icon:hover {
                transform: scale(1.2) rotate(10deg);
            }

            @keyframes pulse {
                0% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.1);
                }

                100% {
                    transform: scale(1);
                }
            }

            .service-translation {
                background: linear-gradient(135deg, #C62D42, #A52334);
                animation-delay: 0s;
            }

            .service-bridge {
                background: linear-gradient(135deg, #E6B422, #C19A1E);
                animation-delay: 0.5s;
            }

            .service-tech {
                background: linear-gradient(135deg, #002FA7, #001A75);
                animation-delay: 1s;
            }

            .data-flow-vn-to-jp {
                position: absolute;
                width: 8px;
                height: 8px;
                background: #C62D42;
                border-radius: 50%;
                animation: dataMoveVnToJp 4s linear infinite;
            }

            .data-flow-jp-to-vn {
                position: absolute;
                width: 8px;
                height: 8px;
                background: #002FA7;
                border-radius: 50%;
                animation: dataMoveJpToVn 4s linear infinite;
            }

            @keyframes dataMoveVnToJp {
                0% {
                    top: 60px;
                    left: 140px;
                    opacity: 0;
                }

                20% {
                    top: 90px;
                    left: 170px;
                    opacity: 1;
                }

                50% {
                    top: 150px;
                    left: 250px;
                    opacity: 1;
                }

                80% {
                    top: 200px;
                    left: 320px;
                    opacity: 1;
                }

                100% {
                    top: 240px;
                    left: 380px;
                    opacity: 0;
                }
            }

            @keyframes dataMoveJpToVn {
                0% {
                    top: 240px;
                    left: 380px;
                    opacity: 0;
                }

                20% {
                    top: 200px;
                    left: 320px;
                    opacity: 1;
                }

                50% {
                    top: 150px;
                    left: 250px;
                    opacity: 1;
                }

                80% {
                    top: 90px;
                    left: 170px;
                    opacity: 1;
                }

                100% {
                    top: 60px;
                    left: 140px;
                    opacity: 0;
                }
            }

            .challenge-indicator {
                position: absolute;
                font-size: 12px;
                color: #666;
                text-align: center;
                background: rgba(255, 255, 255, 0.9);
                padding: 4px 8px;
                border-radius: 20px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                animation: fadeInOut 4s ease-in-out infinite;
            }

            @keyframes fadeInOut {

                0%,
                100% {
                    opacity: 0;
                    transform: translateY(10px);
                }

                50% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .challenge-1 {
                top: 80px;
                left: 180px;
                animation-delay: 0s;
            }

            .challenge-2 {
                top: 120px;
                right: 120px;
                animation-delay: 1s;
            }

            .challenge-3 {
                bottom: 80px;
                left: 160px;
                animation-delay: 2s;
            }

            .success-arrow {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 24px;
                color: #769164;
                animation: arrowMove 3s ease-in-out infinite;
            }

            @keyframes arrowMove {

                0%,
                100% {
                    transform: translate(-50%, -50%) scale(1);
                }

                50% {
                    transform: translate(-50%, -50%) scale(1.3);
                }
            }
        </style>
    @endpush
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
        <!-- Hero Section -->
        <section class="mt-[130px] bg-gradient-japan py-20 relative overflow-hidden">
            <!-- Sakura Decorations Only -->
            <div class="sakura-decoration animate-float" style="top: 10%; left: 10%; animation-delay: 0s;"></div>
            <div class="sakura-decoration animate-float" style="top: 15%; right: 30%; animation-delay: 1s;"></div>
            <div class="sakura-decoration animate-float" style="top: 20%; right: 60%; animation-delay: 1s;"></div>
            <div class="sakura-decoration animate-float" style="bottom: 40%; left: 20%; animation-delay: 2s;"></div>
            <div class="sakura-decoration animate-float" style="bottom: 30%; left: 50%; animation-delay: 2s;"></div>
            <div class="sakura-decoration animate-float" style="bottom: 10%; right: 25%; animation-delay: 3s;"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="-mt-40">
                        <div class="flex items-center gap-4 mb-8">
                            <!-- Real Flag Images -->
                            <div class="flex items-center gap-4 bg-white p-3 rounded-xl shadow-lg">
                                <img src="https://flagcdn.com/w80/jp.png" alt="Japan Flag" class="w-12 h-8 rounded">
                                <div class="bg-torii-gate rounded-t-lg w-8 h-4 relative">
                                    <div class="absolute top-0 left-1 w-6 h-1 bg-aka rounded"></div>
                                    <div class="absolute top-2 left-2 w-1 h-3 bg-aka"></div>
                                    <div class="absolute top-2 right-2 w-1 h-3 bg-aka"></div>
                                </div>
                                <img src="https://flagcdn.com/w80/vn.png" alt="Vietnam Flag" class="w-12 h-8 rounded">
                            </div>
                        </div>

                        <h1
                            class="block text-5xl md:text-6xl font-bold mb-6 mt-12 md:mt-0 md:!leading-normal text-sumi">
                            Japanese
                            <span
                                class="block pt-3 bg-gradient-to-br from-[#C62D42] to-[#E6B422] bg-clip-text text-transparent">IT
                                Hub</span>
                        </h1>

                        <div class="bg-white bg-opacity-80 rounded-2xl p-6 mb-8 border border-sakura">
                            <p class="text-xl mb-4 text-sumi">
                                <span class="font-bold text-aka">Cầu nối công nghệ</span> Việt Nam - Nhật Bản
                            </p>
                            <p class="text-lg text-gray-700 leading-relaxed">
                                Vượt qua mọi rào cản văn hóa, ngôn ngữ và quy trình - Mang đến giải pháp IT toàn diện
                                cho
                                doanh nghiệp
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <button onclick="document.getElementById('contact').scrollIntoView()"
                                class="bg-aka hover:bg-red-700 text-white font-bold py-4 px-8 rounded-xl text-lg transition transform hover:scale-105 shadow-lg">
                                <i class="fas fa-handshake mr-3"></i>
                                Tư vấn miễn phí
                            </button>
                            <button onclick="document.getElementById('why-choose-us-section').scrollIntoView({ behavior: 'smooth' });"
                                class="bg-ai hover:bg-blue-800 text-white font-semibold py-4 px-8 rounded-xl text-lg transition">
                                Tìm hiểu thêm
                            </button>
                        </div>
                    </div>

                    <!-- Right Visual - Traditional Japanese Bridge -->
                    <div class="relative">
                        <div class="bg-white bg-opacity-90 rounded-3xl p-4 md:p-8 shadow-lg border-2 border-sakura">
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold text-sumi mb-2">IT Bridge Solution</h3>
                                <p class="text-gray-600">Connecting Vietnam & Japan Through Technology</p>
                            </div>

                            <!-- Bridge Flow Illustration -->
                            <div class="bridge-container relative">
                                <!-- Vietnam Side -->
                                <div class="country-box vietnam-box">
                                    <img src="https://flagcdn.com/w40/vn.png" alt="Vietnam"
                                        class="w-8 h-5 mb-1 rounded">
                                    <span class="text-xs font-bold">Vietnam</span>
                                    <span class="text-xs">IT Team</span>
                                </div>

                                <!-- Japan Side -->
                                <div class="country-box japan-box">
                                    <img src="https://flagcdn.com/w40/jp.png" alt="Japan"
                                        class="w-8 h-5 mb-1 rounded">
                                    <span class="text-xs font-bold">Japan</span>
                                    <span class="text-xs">Enterprise</span>
                                </div>

                                <!-- TSC Hub Center -->
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-gradient-to-br from-kin to-yellow-600 rounded-full w-20 h-20 flex items-center justify-center text-white font-bold shadow-lg z-10">
                                    <div class="text-center">
                                        <div class="text-sm font-bold">TSC</div>
                                        <div class="text-xs">Hub</div>
                                    </div>
                                </div>

                                <!-- Bridge Paths -->
                                <div
                                    class="absolute top-1/2 left-20 w-32 h-1 bg-gradient-to-r from-aka to-kin rounded transform -translate-y-1/2">
                                </div>
                                <div
                                    class="absolute top-1/2 right-20 w-32 h-1 bg-gradient-to-l from-ai to-kin rounded transform -translate-y-1/2">
                                </div>

                                <!-- Bidirectional Arrows -->
                                <div class="absolute top-1/2 left-32 transform -translate-y-1/2 text-aka">
                                    <i class="fas fa-arrow-right text-sm"></i>
                                </div>
                                <div class="absolute top-1/2 left-28 transform -translate-y-1/2 text-aka">
                                    <i class="fas fa-arrow-left text-sm"></i>
                                </div>
                                <div class="absolute top-1/2 right-32 transform -translate-y-1/2 text-ai">
                                    <i class="fas fa-arrow-left text-sm"></i>
                                </div>
                                <div class="absolute top-1/2 right-28 transform -translate-y-1/2 text-ai">
                                    <i class="fas fa-arrow-right text-sm"></i>
                                </div>

                                <!-- Service Flow Icons around TSC -->
                                <div class="absolute top-20 left-1/2 transform -translate-x-1/2">
                                    <div class="service-icon service-translation" title="Translation & Communication">
                                        <i class="fas fa-language"></i>
                                    </div>
                                </div>
                                <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2">
                                    <div class="service-icon service-bridge" title="Cultural Bridge">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-16">
                                    <div class="service-icon service-tech" title="Technical Solutions">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                </div>

                                <!-- Data Flow Animation - Vietnam to Japan -->
                                <div class="hidden data-flow-vn-to-jp"></div>
                                <div class="hidden data-flow-vn-to-jp" style="animation-delay: 1s;"></div>
                                <div class="hidden data-flow-vn-to-jp" style="animation-delay: 2s;"></div>

                                <!-- Data Flow Animation - Japan to Vietnam -->
                                <div class="hidden data-flow-jp-to-vn"></div>
                                <div class="hidden data-flow-jp-to-vn" style="animation-delay: 1.5s;"></div>
                                <div class="hidden data-flow-jp-to-vn" style="animation-delay: 2.5s;"></div>

                                <!-- Challenge Indicators -->
                                <div class="hidden md:block challenge-indicator challenge-1">
                                    Language<br>Barrier
                                </div>
                                <div class="hidden md:block challenge-indicator challenge-2">
                                    Cultural<br>Gap
                                </div>
                                <div class="hidden md:block challenge-indicator challenge-3">
                                    J-SOX<br>Compliance
                                </div>
                            </div>

                            <!-- Key Benefits -->
                            <div class="grid grid-cols-3 gap-4 mt-6">
                                <div
                                    class="text-center bg-gradient-to-br from-red-50 to-white p-4 rounded-xl border border-red-100">
                                    <div class="text-2xl font-bold text-aka mb-1">100%</div>
                                    <div class="text-xs text-gray-600">J-SOX Compliant</div>
                                </div>
                                <div
                                    class="text-center bg-gradient-to-br from-yellow-50 to-white p-4 rounded-xl border border-yellow-100">
                                    <div class="text-2xl font-bold text-kin mb-1">5+</div>
                                    <div class="text-xs text-gray-600">Projects Success</div>
                                </div>
                                <div
                                    class="text-center bg-gradient-to-br from-blue-50 to-white p-4 rounded-xl border border-blue-100">
                                    <div class="text-2xl font-bold text-ai mb-1">24/7</div>
                                    <div class="text-xs text-gray-600">Support</div>
                                </div>
                            </div>

                            <!-- Process Flow -->
                            <div
                                class="hidden md:block mt-6 bg-gradient-to-r from-sakura/20 to-washi/20 p-4 rounded-2xl">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 bg-aka rounded-full"></div>
                                        <span class="text-sumi font-medium">Vietnam Team</span>
                                    </div>
                                    <div class="flex-1 mx-4 relative">
                                        <div class="h-1 bg-gradient-to-r from-aka via-kin to-ai rounded-full"></div>
                                        <div
                                            class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <div class="w-4 h-4 bg-kin rounded-full border-2 border-white shadow-md">
                                            </div>
                                        </div>
                                        <div
                                            class="absolute top-2 left-1/2 transform -translate-x-1/2 text-xs text-sumi font-bold">
                                            TSC</div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-sumi font-medium">Japan Enterprise</span>
                                        <div class="w-3 h-3 bg-ai rounded-full"></div>
                                    </div>
                                </div>
                                <div class="text-center mt-2 text-xs text-gray-600">
                                    <i class="fas fa-exchange-alt text-kin mr-1"></i>
                                    Bidirectional Communication & Solutions
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="why-choose-us-section" class="py-12 md:py-20 bg-shiro">
            <div class="container mx-auto px-6">
                <div class="text-center mb-8 md:mb-16">
                    <div class="inline-block bg-sakura mb-6 px-6 py-3 rounded-full text-lg font-semibold">
                        <span class="text-aka font-bold">Tại sao chọn chúng tôi</span>
                        <span class="text-sumi ml-2 hidden md:inline-block">• なぜ選ばれるのか</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl !leading-snug md:!leading-normal font-bold text-sumi mb-6">
                        Tại Sao Japanese IT Hub Là<br>
                        <span class="bg-gradient-to-br from-[#C62D42] to-[#E6B422] bg-clip-text text-transparent">Giải
                            Pháp
                            Tối Ưu?</span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                        Sự hợp tác giữa doanh nghiệp Việt Nam và Nhật Bản đang ngày càng phát triển. Tuy nhiên,
                        những khác biệt về văn hóa, ngôn ngữ và quy trình có thể tạo ra rào cản trong các dự án IT.<br>
                        <span class="text-sumi font-bold mt-4 md:mt-0">"Chúng tôi là cầu nối để cả hai bên đều thành
                            công"</span>
                    </p>
                </div>

                <!-- Challenge vs Solution with Japanese Imagery -->
                <div class="grid lg:grid-cols-2 gap-12 mb-16">
                    <div class="order-2 lg:order-1">
                        <div id="info-box-1"
                            class="bg-gradient-to-br from-red-50 to-white rounded-3xl p-4 md:p-8 border border-red-200">
                            <h3 class="text-2xl font-bold text-aka mb-6 flex items-center">
                                Thách Thức Thường Gặp
                            </h3>

                            <div class="space-y-4">
                                <div class="flex items-start bg-white rounded-xl p-4 shadow-sm">
                                    <div
                                        class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <i class="fas fa-language text-red-500"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sumi">Rào cản ngôn ngữ</div>
                                        <div class="text-gray-600">Giao tiếp sai lệch gây hiểu nhầm trong dự án</div>
                                    </div>
                                </div>

                                <div class="flex items-start bg-white rounded-xl p-4 shadow-sm">
                                    <div
                                        class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <i class="fas fa-users text-red-500"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sumi">Khác biệt văn hóa</div>
                                        <div class="text-gray-600">Phong cách làm việc và approach khác nhau</div>
                                    </div>
                                </div>

                                <div class="flex items-start bg-white rounded-xl p-4 shadow-sm">
                                    <div
                                        class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <i class="fas fa-gavel text-red-500"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sumi">Quy định phức tạp</div>
                                        <div class="text-gray-600">J-SOX và các compliance requirement khó hiểu</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2 relative">
                        <div id="image-box-1" class="relative rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=600&fit=crop&crop=entropy"
                                alt="Japanese business meeting challenges" class="w-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-sumi/40 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 text-white">
                                <div class="text-lg font-bold">Cross-cultural Challenges</div>
                                <div class="text-sm opacity-90">異文化間の課題</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TSC Solution -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <div id="image-box-2" class="rounded-2xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=450&fit=crop&crop=entropy"
                                alt="Successful Japan-Vietnam collaboration"
                                class="w-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-midori/40 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 text-white">
                                <div class="text-lg font-bold">TSC Solution</div>
                                <div class="text-sm opacity-90">成功への架け橋</div>
                            </div>
                        </div>
                    </div>

                    <div id="info-box-2">
                        <div
                            class="bg-gradient-to-br from-green-50 to-white rounded-3xl p-4 md:p-8 border border-green-200">
                            <h3 class="text-2xl font-bold text-midori mb-6 flex items-center">
                                Giải Pháp TSC
                            </h3>

                            <div class="space-y-4">
                                <div class="flex items-start bg-white rounded-xl p-4 shadow-sm">
                                    <div
                                        class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <i class="fas fa-puzzle-piece text-midori"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sumi">Cầu nối văn hóa & ngôn ngữ</div>
                                        <div class="text-gray-600">Giao tiếp thông suốt, hiểu rõ cả hai bên
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-start bg-white rounded-xl p-4 shadow-sm">
                                    <div
                                        class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <i class="fas fa-clipboard-check text-midori"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sumi">J-SOX Compliance 100%</div>
                                        <div class="text-gray-600">Đảm bảo tuân thủ đầy đủ quy định Nhật Bản
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-start bg-white rounded-xl p-4 shadow-sm">
                                    <div
                                        class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <i class="fas fa-rocket text-midori"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sumi">IT Solutions tối ưu</div>
                                        <div class="text-gray-600">Hiệu quả và hiệu suất cao cho cả hai bên
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section -->
        <section id="services" class="py-12 md:py-20 bg-washi">
            <div class="container mx-auto px-6">
                <div class="text-center mb-8 md:mb-16">
                    <div class="inline-block bg-sakura mb-6 px-6 py-3 rounded-full text-lg font-semibold">
                        <span class="text-aka font-bold">Dịch vụ</span>
                        <span class="text-sumi ml-2 hidden md:inline-block">• Our Services</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl !leading-normal font-bold text-sumi mb-6">
                        <span class="bg-gradient-to-br from-[#C62D42] to-[#E6B422] bg-clip-text text-transparent">
                            Dịch Vụ IT Toàn Diện
                        </span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600">Giải pháp CNTT chuyên nghiệp cho doanh nghiệp Việt -
                        Nhật</p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8 mb-16">
                    <!-- Dịch vụ 1 -->
                    <div
                        class="bg-shiro rounded-3xl p-4 md:p-8 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-lg shadow-[rgba(198,45,66,0.1)] border border-sakura">
                        <div class="text-center mb-6">
                            <div class="w-16 h-16 bg-aka rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-language text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sumi mb-2">Tư vấn IT song ngữ</h3>
                            <p class="text-gray-600">Tư vấn IT chuyên biệt song ngữ Việt - Nhật</p>
                        </div>
                        <div class="h-40 rounded-2xl mb-6 overflow-hidden bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=500&h=250&fit=crop&crop=entropy"
                                alt="Bilingual IT consultation" class="w-full h-full object-cover object-center">
                        </div>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-torii-gate text-aka mr-2"></i>
                                <span>Tài liệu kiểm soát nội bộ</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-torii-gate text-aka mr-2"></i>
                                <span>Đánh giá IT General Controls</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-torii-gate text-aka mr-2"></i>
                                <span>Hỗ trợ J-SOX</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Dịch vụ 2 -->
                    <div
                        class="bg-shiro rounded-3xl p-4 md:p-8 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-lg shadow-[rgba(198,45,66,0.1)] border border-sakura">
                        <div class="text-center mb-6">
                            <div class="w-16 h-16 bg-ai rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-handshake text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sumi mb-2">Kết nối văn hóa</h3>
                            <p class="text-gray-600">Cầu nối giữa trụ sở Nhật và team Việt Nam</p>
                        </div>
                        <div class="h-40 rounded-2xl mb-6 overflow-hidden bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=500&h=250&fit=crop&crop=entropy"
                                alt="Cross-cultural bridge" class="w-full h-full object-cover object-center">
                        </div>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-yin-yang text-ai mr-2"></i>
                                <span>Dung hòa kỳ vọng</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-yin-yang text-ai mr-2"></i>
                                <span>Giải quyết vấn đề IT/ERP</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-yin-yang text-ai mr-2"></i>
                                <span>Đảm bảo tuân thủ</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Dịch vụ 3 -->
                    <div
                        class="bg-shiro rounded-3xl p-4 md:p-8 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-lg shadow-[rgba(198,45,66,0.1)] border border-sakura">
                        <div class="text-center mb-6">
                            <div class="w-16 h-16 bg-midori rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-cogs text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sumi mb-2">Triển khai ERP & BPO</h3>
                            <p class="text-gray-600">Triển khai ERP/IT và dịch vụ BPO bằng tiếng Nhật</p>
                        </div>
                        <div class="h-40 rounded-2xl mb-6 overflow-hidden bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=250&fit=crop&crop=entropy"
                                alt="ERP implementation" class="w-full h-full object-cover object-center">
                        </div>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-mountain text-midori mr-2"></i>
                                <span>Dịch vụ BPO</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-mountain text-midori mr-2"></i>
                                <span>Triển khai ERP tiếng Nhật</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-mountain text-midori mr-2"></i>
                                <span>Phát triển cơ hội mới</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Câu chuyện thành công -->
                <div class="bg-gradient-to-br from-sakura to-white rounded-3xl p-4 md:p-8  border-2 border-aka">
                    <div class="grid lg:grid-cols-2 gap-8 items-center">
                        <div class="md:order-1">
                            <h3 class="text-2xl font-bold text-sumi mb-6 flex items-center">
                                <span class="text-3xl md:text-4xl mr-3">🏆</span>
                                Câu chuyện thành công
                            </h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-aka">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-semibold text-sumi">Dự án J-SOX</span>
                                        <span class="text-aka font-bold">100%</span>
                                    </div>
                                    <div class="text-gray-600">Đạt tuân thủ hoàn toàn, không vi phạm</div>
                                </div>
                                <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-ai">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-semibold text-sumi">Giao tiếp liên văn hóa</span>
                                        <span class="text-ai font-bold">+400%</span>
                                    </div>
                                    <div class="text-gray-600">Cải thiện hiệu quả giao tiếp đa quốc gia</div>
                                </div>
                                <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-midori">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-semibold text-sumi">Thời gian dự án</span>
                                        <span class="text-midori font-bold">-60%</span>
                                    </div>
                                    <div class="text-gray-600">Rút ngắn thời gian so với chuẩn</div>
                                </div>
                                <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-kin">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-semibold text-sumi">Mức độ hài lòng</span>
                                        <span class="text-orange-500 font-bold">98%</span>
                                    </div>
                                    <div class="text-gray-600">Khách hàng đánh giá rất cao</div>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="h-80 rounded-2xl overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=450&fit=crop&crop=entropy"
                                    alt="Successful Japan-Vietnam IT project"
                                    class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-aka/20 to-transparent"></div>
                                <div class="absolute bottom-6 left-2 md:left-6 text-white">
                                    <div class="text-lg font-bold">Tập đoàn đa quốc gia Nhật Bản</div>
                                    <div class="text-sm opacity-90">Triển khai thành công J-SOX</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="contact"
            class="py-20 bg-gradient-to-br from-sumi to-ai text-white relative overflow-hidden border-b-4 border-aka">
            <!-- Traditional Pattern Background -->
            <div class="absolute inset-0 opacity-5">
                <div
                    style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2280%22 height=%2280%22 viewBox=%220 0 80 80%22><g fill=%22%23FFCCCB%22><circle cx=%2240%22 cy=%2240%22 r=%2220%22 fill=%22none%22 stroke=%22%23FFCCCB%22 stroke-width=%221%22/><circle cx=%2240%22 cy=%2240%22 r=%2210%22 fill=%22none%22 stroke=%22%23FFCCCB%22 stroke-width=%221%22/></g></svg>'); background-size: 80px 80px;">
                </div>
            </div>

            <div class="container mx-auto px-6 text-center relative z-10">
                <div class="mb-12">
                    <div
                        class="inline-block bg-white bg-opacity-20 text-white mb-6 px-6 py-3 rounded-full text-lg font-semibold">
                        <span class="font-bold">Liên hệ</span>
                        <span class="ml-2">• Contact Us</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 !leading-normal">
                        TSC - Đối Tác CNTT<br>
                        <span class="text-kin">Đáng Tin Cậy</span>
                    </h2>
                    <p class="text-lg md:text-xl mb-8 opacity-90 max-w-4xl mx-auto leading-relaxed">
                        Với kinh nghiệm phong phú và đội ngũ song ngữ, chúng tôi là đối tác đáng tin cậy cho các doanh
                        nghiệp đang phát triển trong môi trường kinh doanh giữa Nhật Bản và Việt Nam.<br>
                        <span class="text-kin">Chúng tôi luôn sẵn sàng đồng hành cùng sự thành công của bạn.</span>
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                    <!-- Contact Form -->
                    <div
                        class="bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-8 border border-white border-opacity-20">
                        <h3 class="text-2xl font-bold mb-6 text-white flex items-center justify-center">
                            <span class="text-3xl mr-3">🤝</span>
                            Đăng ký tư vấn miễn phí
                        </h3>
                        <form id="contact-form-japanese-it" class="space-y-4">
                            <div class="grid md:grid-cols-2 gap-4">
                                <input id="fullname-input" type="text" placeholder="Họ và tên *" required
                                    class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-kin text-white placeholder-gray-300">
                                <input id="email-input" type="email" placeholder="Email *" required
                                    class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-kin text-white placeholder-gray-300">
                            </div>
                            <input id="phone-number-input" type="tel" placeholder="Số điện thoại"
                                class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-kin text-white placeholder-gray-300">
                            <input id="company-name-input" type="text" placeholder="Tên công ty"
                                class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-kin text-white placeholder-gray-300">
                            <select id="selected-purpose"
                                class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-kin text-white"
                                required>
                                <option class="text-black hidden" value="">Dịch vụ quan tâm *</option>
                            </select>
                            <textarea id="message-input" placeholder="Mô tả dự án" rows="3"
                                class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl focus:outline-none focus:border-kin text-white placeholder-gray-300 resize-none"></textarea>
                            <button type="submit"
                                class="w-full bg-kin hover:bg-yellow-600 text-sumi font-bold py-4 rounded-xl text-lg transition transform hover:scale-105 shadow-lg">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Gửi đăng ký tư vấn miễn phí
                            </button>
                        </form>
                        <p class="text-xs text-gray-300 mt-4 text-center">
                            * Thông tin bắt buộc • Dữ liệu của bạn sẽ được bảo mật tuyệt đối
                        </p>
                    </div>

                    <!-- Contact Info -->
                    <div class="space-y-6">
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-6 border border-white border-opacity-20">
                            <h4 class="font-bold text-white mb-4 flex items-center">
                                Liên hệ trực tiếp (Direct Contact)
                            </h4>
                            <div class="space-y-3">
                                <div class="flex items-center text-white">
                                    <img src="https://flagcdn.com/w20/jp.png" alt="Japan" class="w-5 h-3 mr-3">
                                    <span>Văn phòng Tokyo: +81-3-XXXX-XXXX</span>
                                </div>
                                <div class="flex items-center text-white">
                                    <img src="https://flagcdn.com/w20/vn.png" alt="Vietnam" class="w-5 h-3 mr-3">
                                    <span>Văn phòng HCM: +84-123-456-789</span>
                                </div>
                                <div class="flex items-center text-white">
                                    <i class="fas fa-envelope mr-3"></i>
                                    <span>japan.hub@tsc.com.vn</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-6 border border-white border-opacity-20">
                            <h4 class="font-bold text-white mb-4 flex items-center">
                                Giờ làm việc (Business Hours)
                            </h4>
                            <div class="space-y-2 text-white text-sm">
                                <div>Giờ Nhật: 9:00-18:00 (Thứ 2 - Thứ 6)</div>
                                <div>Giờ Việt Nam: 9:00-18:00 (Thứ 2 - Thứ 6)</div>
                                <div class="text-kin font-bold">Hỗ trợ khẩn cấp: 24/7</div>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-20">
                                <div class="text-2xl font-bold text-kin">200+</div>
                                <div class="text-sm text-gray-300">Dự án quản trị hệ thống</div>
                            </div>
                            <div
                                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-20">
                                <div class="text-2xl font-bold text-kin">100%</div>
                                <div class="text-sm text-gray-300">Tỷ lệ tuân thủ J-SOX</div>
                            </div>
                            <div
                                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-20">
                                <div class="text-2xl font-bold text-kin">24/7</div>
                                <div class="text-sm text-gray-300">Hỗ trợ khẩn cấp</div>
                            </div>
                            <div
                                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-20">
                                <div class="text-2xl font-bold text-kin">5 năm</div>
                                <div class="text-sm text-gray-300">Kinh nghiệm chuyên môn</div>
                            </div>
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
                const navLinks = document.querySelectorAll('a[href^="#"]');
                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href');
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });

                // Animate sakura on scroll
                window.addEventListener('scroll', function() {
                    const sakuras = document.querySelectorAll('.sakura-decoration');
                    const scrolled = window.pageYOffset;
                    sakuras.forEach(sakura => {
                        const rate = scrolled * -0.5;
                        sakura.style.transform = `translateY(${rate}px)`;
                    });
                });

                window.addEventListener('load', () => {
                    if (window.innerWidth >= 768) {
                        const infoBox1 = document.getElementById('info-box-1');
                        const imageBox1 = document.getElementById('image-box-1');
                        const infoBoxHeight1 = infoBox1.offsetHeight;
                        imageBox1.style.height = `${infoBoxHeight1}px`;

                        const infoBox2 = document.getElementById('info-box-2');
                        const imageBox2 = document.getElementById('image-box-2');
                        const infoBoxHeight2 = infoBox2.offsetHeight;
                        imageBox2.style.height = `${infoBoxHeight2}px`;
                    }
                });
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
                            select.value = "3";
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            document.getElementById('contact-form-japanese-it').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = document.getElementById('contact-form-japanese-it');
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
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
            });

            fetchPurposeOptions();
        </script>
    @endpush
</x-app-layout>
