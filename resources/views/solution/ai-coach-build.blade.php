<x-app-layout>
    @section('title', __('AI Coach & Build') . ' | Grant Thornton TSC')
    @push('styles')
        <style>
            .ai-gradient-1 {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .ai-gradient-2 {
                background: linear-gradient(135deg, #6e008c 0%, #1D46C2 100%);
            }

            .ai-gradient-3 {
                background: linear-gradient(135deg, #1D46C2 0%, #4facfe 100%);
            }

            .timeline-item {
                position: relative;
                padding-left: 2rem;
            }

            .timeline-item::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                width: 2px;
                background: linear-gradient(to bottom, #667eea, #764ba2);
            }

            .timeline-item::after {
                content: '';
                position: absolute;
                left: -6px;
                top: 1.5rem;
                width: 14px;
                height: 14px;
                background: linear-gradient(135deg, #667eea, #764ba2);
                border-radius: 50%;
                box-shadow: 0 0 0 4px white;
            }

            .timeline-item:last-child::before {
                background: linear-gradient(to bottom, #667eea, transparent);
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

        <section class="pt-[170px] pb-24 overflow-hidden relative flex items-center"
            style="background: linear-gradient(135deg, #111827 0%, #1f2937 25%, #374151 50%, #111827 75%, #000000 100%), url('https://media.canva.com/v2/files/uri:ifs%3A%2F%2FM%2FVMzQL1cTqy9ECQsHvrr-T5HpjcoavCUJuiXk8YaRB9s.jpg?csig=AAAAAAAAAAAAAAAAAAAAAJbJSOIqwJff88cctL3JUEJGzHBMaYMcf0Q46AOZBiup&exp=1752071553&signer=media-rpc&token=AAIAAU0AL1ZNelFMMWNUcXk5RUNRc0h2cnItVDVIcGpjb2F2Q1VKdWlYazhZYVJCOXMuanBnAAAAAAGX75o_6KJMy5huoxXjel9bW9FDzhXcbErpBLM7noumy6ReCu80'); background-size: cover; background-position: center; background-blend-mode: overlay;">

            <!-- Background overlay to reduce opacity -->
            <div class="absolute inset-0 bg-black opacity-90"></div>

            <!-- Tech overlay pattern -->
            <div class="absolute inset-0 opacity-10"
                style="background-image: linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px), linear-gradient(180deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <!-- Glow effects -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500 rounded-full blur-3xl opacity-[0.01]"
                    style="opacity: 0.1;"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl delay-1000"
                    style="opacity: 0.1;"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500 rounded-full blur-3xl delay-2000"
                    style="opacity: 0.1;"></div>
            </div>

            <!-- Static AI Elements -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <!-- Robot Icons -->
                <div
                    class="absolute top-20 left-10 w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center opacity-20">
                    <i class="fas fa-robot text-2xl text-white"></i>
                </div>

                <div
                    class="absolute top-1/4 right-20 w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center opacity-25">
                    <i class="fas fa-brain text-2xl text-white"></i>
                </div>

                <div
                    class="absolute bottom-1/4 left-1/4 w-12 h-12 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-full flex items-center justify-center opacity-30">
                    <i class="fas fa-microchip text-lg text-white"></i>
                </div>

                <div
                    class="absolute bottom-20 right-1/4 w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-full flex items-center justify-center opacity-20">
                    <i class="fas fa-network-wired text-lg text-white"></i>
                </div>

                <!-- Geometric shapes -->
                <div
                    class="absolute top-1/3 left-1/3 w-8 h-8 bg-blue-500 opacity-15 transform rotate-45 animate-spin-slow">
                </div>
                <div class="absolute bottom-1/3 right-1/3 w-6 h-6 bg-purple-500 opacity-20 animate-pulse-slow"></div>

                <!-- Circuit lines -->
                <div
                    class="absolute top-1/2 left-0 w-32 h-px bg-gradient-to-r from-transparent via-blue-500 to-transparent opacity-30 animate-pulse-slow">
                </div>
                <div class="absolute top-1/3 right-0 w-24 h-px bg-gradient-to-l from-transparent via-purple-500 to-transparent opacity-25 animate-pulse-slow"
                    style="animation-delay: 2s;"></div>

                <!-- Glowing orbs -->
                <div
                    class="absolute top-10 right-1/3 w-2 h-2 bg-blue-400 rounded-full animate-pulse-slow shadow-lg shadow-blue-500/50">
                </div>
                <div class="absolute bottom-10 left-1/3 w-3 h-3 bg-purple-400 rounded-full animate-pulse-slow shadow-lg shadow-purple-500/50"
                    style="animation-delay: 1s;"></div>
                <div class="absolute top-2/3 right-10 w-1 h-1 bg-cyan-400 rounded-full animate-pulse-slow shadow-lg shadow-cyan-500/50"
                    style="animation-delay: 3s;"></div>
            </div>

            <!-- Main content -->
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-5xl mx-auto">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center bg-blue-500 bg-opacity-20 text-blue-400 px-6 py-3 rounded-full text-sm font-medium mb-8 backdrop-blur-sm border border-blue-500 border-opacity-30">
                        <div class="w-2 h-2 bg-blue-400 rounded-full mr-3 animate-pulse"></div>
                        <span class="uppercase tracking-wide">AI Coach & Build</span>
                    </div>

                    <!-- Main heading with typing effect -->
                    <div class="mb-4 md:mb-8 h-32 md:h-40 lg:h-48 flex items-center justify-center">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold !leading-snug text-center">
                            <div class="typing-container">
                                <span id="typing-text" class="typing-text text-white"></span>
                                <span class="cursor"></span>
                            </div>
                            <!-- Fallback for mobile/no-JS -->
                            <div id="static-text" class="hidden">
                                <div class="flex items-center justify-center">
                                    <span class="text-white mb-1 text-[34px] sm:text-4xl text-nowrap">Khai Phá Sức Mạnh AI</span>
                                </div>
                                <div class="text-blue-400">Cho Doanh Nghiệp</div>
                            </div>
                        </h1>
                    </div>

                    <!-- Description -->
                    <p class="text-lg md:text-xl text-white leading-relaxed max-w-4xl mx-auto mb-12">
                        Chuyển đổi doanh nghiệp với AI thông qua phương pháp thực tế - từ đánh giá tiềm năng
                        đến triển khai ứng dụng mang lại
                        <span class="text-blue-400 font-semibold">kết quả cụ thể</span>.
                    </p>

                    <!-- Action buttons -->
                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                        <button
                            class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-10 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25 group">
                            <i class="fas fa-rocket mr-3 group-hover:rotate-12 transition-transform"></i>
                            Bắt đầu ngay hôm nay
                        </button>

                        <button
                            class="border-2 border-white hover:border-blue-500 text-white hover:text-blue-400 px-10 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 backdrop-blur-sm group">
                            <i class="fas fa-play mr-3 group-hover:translate-x-1 transition-transform"></i>
                            Xem demo trực tiếp
                        </button>
                    </div>

                    <!-- Scroll indicator -->
                    <div class="absolute bottom-1 md:bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                        <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                            <div class="w-1 h-3 bg-blue-500 rounded-full mt-2 animate-bounce"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Large background AI elements -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-5">
                <div class="absolute -top-32 -right-32 w-64 h-64 transform rotate-45">
                    <i class="fas fa-robot text-9xl text-blue-500"></i>
                </div>
                <div class="absolute -bottom-32 -left-32 w-64 h-64 transform -rotate-45">
                    <i class="fas fa-brain text-9xl text-purple-500"></i>
                </div>
            </div>
        </section>

        <section
            class="bg-white bg-cover relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-40 z-10 bg-no-repeat bg-center">
            <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-6 pt-8 lg:py-14 lg:pb-4">
                <div class="text-center md:mb-8">
                    <span
                        class="inline-block bg-green-100 text-green-600 px-6 py-3 rounded-full text-lg font-semibold mb-6">
                    Tại sao chọn chúng tôi?
                    </span>
                    <h2 class="text-3xl md:text-5xl font-bold mb-8 !leading-snug md:!leading-normal">
                        Tại Sao Chọn <span
                            class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Dịch
                            Vụ</span>
                        Của Chúng Tôi?
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto md:mb-8">
                        Những lợi ích cụ thể và có thể đo lường mà doanh nghiệp bạn sẽ nhận được
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 md:mb-20">
                    <div
                        class="group relative bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-150 cursor-default transform hover:-translate-y-2 border border-blue-100 overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-start mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-cogs text-2xl text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="text-xl md:text-2xl font-bold text-slate-800 mb-2 group-hover:text-blue-600 transition-colors">
                                        Tối ưu hóa quy trình
                                    </h3>
                                    <p class="text-blue-600 font-semibold">Tự động hóa các tác vụ lặp lại</p>
                                </div>
                            </div>

                            <p class="text-slate-600 leading-relaxed mb-6">
                                Giải phóng nhân lực khỏi các công việc thủ công, tập trung vào các nhiệm vụ có giá trị
                                cao hơn và sáng tạo hơn.
                            </p>

                            <div class="bg-blue-100 rounded-2xl p-4 border-l-4 border-blue-500">
                                <div class="flex items-center">
                                    <i class="fas fa-chart-bar text-blue-600 mr-3"></i>
                                    <span class="text-blue-700 font-semibold">Tiết kiệm 40-60% thời gian xử lý</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group relative bg-gradient-to-br from-white to-purple-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-150 cursor-default transform hover:-translate-y-2 border border-purple-100 overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-start mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mr-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-chart-line text-2xl text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="text-xl md:text-2xl font-bold text-slate-800 mb-2 group-hover:text-purple-600 transition-colors">
                                        Nâng cao hiệu suất
                                    </h3>
                                    <p class="text-purple-600 font-semibold">Quyết định nhanh và chính xác</p>
                                </div>
                            </div>

                            <p class="text-slate-600 leading-relaxed mb-6">
                                Cải thiện tốc độ và độ chính xác trong phân tích dữ liệu và đưa ra quyết định kinh doanh
                                thông minh.
                            </p>

                            <div class="bg-purple-100 rounded-2xl p-4 border-l-4 border-purple-500">
                                <div class="flex items-center">
                                    <i class="fas fa-rocket text-purple-600 mr-3"></i>
                                    <span class="text-purple-700 font-semibold">Tăng 2-3x tốc độ ra quyết định</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group relative bg-gradient-to-br from-white to-emerald-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-150 cursor-default transform hover:-translate-y-2 border border-emerald-100 overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-start mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mr-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-trophy text-2xl text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="text-xl md:text-2xl font-bold text-slate-800 mb-2 group-hover:text-emerald-600 transition-colors">
                                        Tăng cường cạnh tranh
                                    </h3>
                                    <p class="text-emerald-600 font-semibold">Khai thác sức mạnh dữ liệu</p>
                                </div>
                            </div>

                            <p class="text-slate-600 leading-relaxed mb-6">
                                Sử dụng AI để phân tích dữ liệu sâu, tạo ra những insight độc đáo và phát triển sản
                                phẩm/dịch vụ đột phá.
                            </p>

                            <div class="bg-emerald-100 rounded-2xl p-4 border-l-4 border-emerald-500">
                                <div class="flex items-center">
                                    <i class="fas fa-brain text-emerald-600 mr-3"></i>
                                    <span class="text-emerald-700 font-semibold">Phát hiện cơ hội kinh doanh mới</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group relative bg-gradient-to-br from-white to-yellow-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-150 cursor-default transform hover:-translate-y-2 border border-yellow-100 overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-start mb-6">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mr-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                                    <i class="fas fa-lightbulb text-2xl text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="text-xl md:text-2xl font-bold text-slate-800 mb-2 group-hover:text-yellow-600 transition-colors">
                                        Văn hóa đổi mới
                                    </h3>
                                    <p class="text-yellow-600 font-semibold">Khuyến khích học hỏi</p>
                                </div>
                            </div>

                            <p class="text-slate-600 leading-relaxed mb-6">
                                Xây dựng môi trường làm việc khuyến khích nhân viên chủ động tìm hiểu và ứng dụng công
                                nghệ mới.
                            </p>

                            <div class="bg-yellow-100 rounded-2xl p-4 border-l-4 border-yellow-500">
                                <div class="flex items-center">
                                    <i class="fas fa-users text-yellow-600 mr-3"></i>
                                    <span class="text-yellow-700 font-semibold">Tăng 85% sự hài lòng nhân viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-12 md:py-20 bg-bg-gray relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-bg-gray before:opacity-40 z-10 bg-no-repeat bg-center bg-[length:60%_auto] bg-[url('../assets/images/service-pattern.webp')]0">
            <div class="container relative mx-auto px-6">
                <div class="text-center mb-16">
                    <span
                        class="inline-block bg-aiBlue bg-opacity-10 text-aiBlue px-6 py-3 rounded-full text-lg font-semibold mb-6">
                        Dịch vụ của chúng tôi
                    </span>
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-6 !leading-snug md:!leading-normal">
                        3 Bước Chinh Phục <span
                            class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">AI</span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                        Hành trình toàn diện từ đánh giá tiềm năng đến triển khai ứng dụng AI thực tế
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border border-gray-100 relative">
                        <div class="absolute -top-4 left-8">
                            <span class="bg-aiBlue text-white px-4 py-2 rounded-full text-sm font-bold">BƯỚC 1</span>
                        </div>
                        <div class="text-center mb-8 mt-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-aiBlue to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 ai-glow">
                                <i class="fas fa-chart-line text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">Đánh Giá Mức Độ Trưởng Thành</h3>
                            <h4 class="text-lg font-semibold text-aiBlue">Kỹ Thuật Số & Xác Định Cơ Hội AI</h4>
                        </div>
                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Đánh giá hiện trạng kỹ thuật số doanh nghiệp</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Xác định các "điểm đau" và cơ hội AI</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Xây dựng use cases thực tế cho từng phòng ban</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Roadmap triển khai AI chi tiết</span>
                            </li>
                        </ul>
                        <div class="bg-aiBlue bg-opacity-10 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-aiBlue">2-3 tuần</div>
                            <div class="text-sm text-gray-500">Thời gian hoàn thành</div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border border-gray-100 relative">
                        <div class="absolute -top-4 left-8">
                            <span class="bg-aiGreen text-white px-4 py-2 rounded-full text-sm font-bold">BƯỚC 2</span>
                        </div>
                        <div class="text-center mb-8 mt-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-aiGreen to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 ai-glow">
                                <i class="fas fa-graduation-cap text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">Huấn Luyện Chuyên Sâu</h3>
                            <h4 class="text-lg font-semibold text-aiGreen">& Nâng Cao Kỹ Năng AI</h4>
                        </div>
                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Đào tạo kỹ năng kỹ thuật số cơ bản</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Workshop Prompt Engineering thực hành</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Sử dụng các công cụ AI phổ biến</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Ứng dụng AI vào công việc hàng ngày</span>
                            </li>
                        </ul>
                        <div class="bg-aiGreen bg-opacity-10 rounded-xl p-4 text-center">
                            <div class="text-xl md:text-2xl font-bold text-aiGreen">1-2 tuần</div>
                            <div class="text-sm text-gray-500">Thời gian hoàn thành</div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border border-gray-100 relative">
                        <div class="absolute -top-4 left-8">
                            <span class="bg-yellow-500 text-white px-4 py-2 rounded-full text-sm font-bold">BƯỚC 3</span>
                        </div>
                        <div class="text-center mb-8 mt-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6 ai-glow">
                                <i class="fas fa-rocket text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">Phát Triển Ứng Dụng</h3>
                            <h4 class="text-lg font-semibold text-yellow-500">AI "Quick Win"</h4>
                        </div>
                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Phát triển công cụ AI nhỏ, hiệu quả</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Tự động hóa quy trình cụ thể</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Chatbot và AI assistant</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-aiGreen mr-3 mt-1"></i>
                                <span>Giải pháp AI tùy chỉnh cho từng nhu cầu</span>
                            </li>
                        </ul>
                        <div class="bg-yellow-500 bg-opacity-10 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-yellow-500">3-4 tuần</div>
                            <div class="text-sm text-gray-500">Thời gian hoàn thành</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                        Lộ Trình <span
                            class="bg-gradient-to-r from-primary-gt to-secondary-gt bg-clip-text text-transparent">Đào
                            Tạo</span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-4xl mx-auto">
                        Chương trình được thiết kế theo phương pháp khoa học với 8 buổi học thực chiến
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <!-- Session 1 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-1 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">1</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Kick-off & Phân Tích Hiện Trạng</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Giới thiệu chương trình, đánh giá AI Readiness (nhân sự, dữ liệu, hệ thống), xây dựng
                                bản đồ ứng dụng AI.
                            </p>
                        </div>
                    </div>

                    <!-- Session 2 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-purple-50 to-blue-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-2 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">2</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Tổng Quan AI & Ứng Dụng</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Phân biệt AI, ML, DL, GenAI, LLM; ứng dụng thực tế trong SME và giải mã những hiểu lầm
                                về AI.
                            </p>
                        </div>
                    </div>

                    <!-- Session 3 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-3 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">3</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Tối Ưu Hóa Prompt</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Hướng dẫn tạo prompt hiệu quả cho LLM (như ChatGPT), so sánh prompt hay và dở.
                            </p>
                        </div>
                    </div>

                    <!-- Session 4 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-1 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">4</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Quy Trình Triển Khai AI</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Quy trình 6 bước (Business Understanding → Deployment), phân biệt PoC, MVP, Production.
                            </p>
                        </div>
                    </div>

                    <!-- Session 5 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-2 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">5</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Workshop Xác Định Use Case</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Xác định các bài toán AI (dự đoán, tối ưu, tự động hóa) theo lĩnh vực: sản xuất, thương
                                mại, dịch vụ.
                            </p>
                        </div>
                    </div>

                    <!-- Session 6 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-3 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">6</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Open-Source vs Cloud AI</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                So sánh các nền tảng AI, lựa chọn giải pháp phù hợp cho SME.
                            </p>
                        </div>
                    </div>

                    <!-- Session 7 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-1 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">7</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Coaching Đội Ngũ Nội Bộ</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Xây dựng đội ngũ AI (AI Champion, Data Facilitator, End-user), công cụ AI cho người
                                không chuyên.
                            </p>
                        </div>
                    </div>

                    <!-- Session 8 -->
                    <div class="timeline-item mb-12">
                        <div class="bg-gradient-to-r from-violet-50 to-purple-50 rounded-2xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 aspect-1 ai-gradient-2 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-lg">8</span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900">Roadmap AI</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Lập kế hoạch 3 giai đoạn: Khám phá, Mở rộng, Tích hợp toàn diện với MLOps và dashboard.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 bg-gray-50">
            <div class="container mx-auto">
                <div class="text-center mb-16">
                    <span
                        class="inline-block bg-primary-gt bg-opacity-10 text-primary px-6 py-3 rounded-full text-lg font-semibold mb-8">
                        Giới thiệu
                    </span>
                    <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-4 !leading-snug md:!leading-normal">
                        Ứng Dụng <span class="text-purple-600">AI Thực Tiễn</span> Trong Doanh Nghiệp
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                        Khám phá cách AI có thể chuyển đổi doanh nghiệp qua các ví dụ thực tế
                    </p>
                </div>

                <!-- Example 1: AI trong HR -->
                <div class="mb-16">
                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                        <div class="flex flex-col lg:flex-row">
                            <div class="flex-1 p-4 lg:p-12">
                                <div
                                    class="inline-flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-full mb-6">
                                    <i class="fas fa-users mr-2"></i>
                                    <span class="text-sm font-semibold">VÍ DỤ: AI TRONG TUYỂN DỤNG</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                                    Tự Động Sàng Lọc CV với AI
                                </h3>
                                <p class="text-gray-600 mb-6">
                                    Một công ty công nghệ với 500+ CV mỗi tháng đã áp dụng AI để tối ưu quy trình tuyển
                                    dụng:
                                </p>
                                <div class="grid grid-cols-2 gap-6 mb-8">
                                    <div class="bg-blue-50 p-4 rounded-xl">
                                        <h4 class="font-semibold text-gray-900 mb-2">Trước khi có AI</h4>
                                        <ul class="text-sm text-gray-600 space-y-1">
                                            <li>• 5 giờ/ngày review CV</li>
                                            <li>• 30% CV phù hợp bị bỏ sót</li>
                                            <li>• Feedback chậm cho ứng viên</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-50 p-4 rounded-xl">
                                        <h4 class="font-semibold text-gray-900 mb-2">Sau khi có AI</h4>
                                        <ul class="text-sm text-gray-600 space-y-1">
                                            <li>• 30 phút/ngày kiểm tra kết quả</li>
                                            <li>• 95% độ chính xác matching</li>
                                            <li>• Auto-reply trong 24h</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-6 text-sm">
                                    <div class="flex items-center">
                                        <i class="fas fa-cogs text-blue-500 mr-2"></i>
                                        <span class="text-gray-700">Setup: 2 tuần</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                                        <span class="text-gray-700">Training: 1 ngày</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-dollar-sign text-green-500 mr-2"></i>
                                        <span class="text-gray-700">ROI: 4 tháng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 bg-gradient-to-br from-blue-50 to-purple-50 p-12 flex items-center">
                                <div class="w-full">
                                    <div class="bg-white p-6 rounded-2xl shadow-lg">
                                        <div class="flex items-center mb-4">
                                            <div
                                                class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                                <i class="fas fa-file-alt text-blue-600"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">AI Resume Scanner
                                                </div>
                                                <div class="text-xs text-gray-500">Powered by NLP</div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                                <span class="text-sm text-gray-700">Python Developer CV.pdf</span>
                                                <span
                                                    class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">95%
                                                    Match</span>
                                            </div>
                                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                                <span class="text-sm text-gray-700">Senior Java CV.docx</span>
                                                <span
                                                    class="text-xs bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full">78%
                                                    Match</span>
                                            </div>
                                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                                <span class="text-sm text-gray-700">Full Stack Dev CV.pdf</span>
                                                <span
                                                    class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">92%
                                                    Match</span>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-4 border-t">
                                            <div class="flex justify-between text-xs text-gray-600">
                                                <span>Đã xử lý: 127 CV</span>
                                                <span>Thời gian: 2.5 phút</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Example 2: AI trong Sales & Marketing -->
                <div class="mb-16">
                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                        <div class="flex flex-col lg:flex-row-reverse">
                            <div class="flex-1 p-4 lg:p-12">
                                <div
                                    class="inline-flex items-center bg-purple-100 text-purple-700 px-4 py-2 rounded-full mb-6">
                                    <i class="fas fa-chart-line mr-2"></i>
                                    <span class="text-sm font-semibold">VÍ DỤ: AI TRONG SALES</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                                    AI Phân Tích & Dự Báo Khách Hàng Tiềm Năng
                                </h3>
                                <p class="text-gray-600 mb-6">
                                    Công ty B2B với 10,000+ leads đã triển khai AI để tối ưu hóa quy trình sales:
                                </p>
                                <div class="space-y-4 mb-8">
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                            <i class="fas fa-search text-purple-600 text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Lead Scoring tự động</h4>
                                            <p class="text-sm text-gray-600">AI phân tích 50+ data points để xếp hạng
                                                khả năng convert của từng lead</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                            <i class="fas fa-bullseye text-purple-600 text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Personalized Outreach</h4>
                                            <p class="text-sm text-gray-600">Tạo email/message cá nhân hóa dựa trên
                                                profile và behavior của lead</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                            <i class="fas fa-clock text-purple-600 text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Best Time Prediction</h4>
                                            <p class="text-sm text-gray-600">AI suggest thời điểm tốt nhất để contact
                                                dựa trên lịch sử tương tác</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-purple-50 p-4 rounded-xl">
                                    <div class="grid grid-cols-3 gap-4 text-center">
                                        <div>
                                            <div class="text-2xl font-bold text-purple-600">3.2x</div>
                                            <div class="text-xs text-gray-600">Tăng conversion rate</div>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-purple-600">65%</div>
                                            <div class="text-xs text-gray-600">Giảm thời gian sales cycle</div>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-purple-600">$2.5M</div>
                                            <div class="text-xs text-gray-600">Revenue tăng thêm/năm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 bg-gradient-to-br from-purple-50 to-pink-50 p-12 flex items-center">
                                <div class="w-full">
                                    <div class="bg-white p-6 rounded-2xl shadow-lg">
                                        <h4 class="font-semibold text-gray-900 mb-4">AI Lead Scoring Dashboard</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div
                                                        class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                                        <i class="fas fa-fire text-green-600"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium">Tech Corp Vietnam</div>
                                                        <div class="text-xs text-gray-500">Software, 200+ employees
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <div class="text-lg font-bold text-green-600">98%</div>
                                                    <div class="text-xs text-gray-500">Hot Lead</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div
                                                        class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                                                        <i class="fas fa-bolt text-yellow-600"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium">ABC Manufacturing</div>
                                                        <div class="text-xs text-gray-500">Industry, 500+ employees
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <div class="text-lg font-bold text-yellow-600">72%</div>
                                                    <div class="text-xs text-gray-500">Warm Lead</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div
                                                        class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                                        <i class="fas fa-snowflake text-blue-600"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium">Small Retail Shop</div>
                                                        <div class="text-xs text-gray-500">Retail, <50 employees</div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <div class="text-lg font-bold text-blue-600">31%</div>
                                                        <div class="text-xs text-gray-500">Cold Lead</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 p-3 bg-purple-50 rounded-lg">
                                                <div class="flex items-center justify-between text-sm">
                                                    <span class="text-gray-700">AI Recommendations:</span>
                                                    <span class="font-medium text-purple-600">Focus on Hot Leads
                                                        Today</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Example 3: AI trong Operations -->
                    <div>
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                            <div class="flex flex-col lg:flex-row">
                                <div class="flex-1 p-4 lg:p-12">
                                    <div
                                        class="inline-flex items-center bg-green-100 text-green-700 px-4 py-2 rounded-full mb-6">
                                        <i class="fas fa-cogs mr-2"></i>
                                        <span class="text-sm font-semibold">VÍ DỤ: AI TRONG VẬN HÀNH</span>
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                                        Chatbot Nội Bộ Hỗ Trợ Nhân Viên 24/7
                                    </h3>
                                    <p class="text-gray-600 mb-6">
                                        Doanh nghiệp 1000+ nhân viên triển khai AI Assistant nội bộ để tối ưu hóa
                                        support:
                                    </p>
                                    <div class="grid grid-cols-2 gap-4 mb-8">
                                        <div class="bg-gray-50 p-4 rounded-xl">
                                            <h4 class="font-semibold text-gray-900 mb-3">Các câu hỏi AI xử lý:</h4>
                                            <ul class="text-sm text-gray-600 space-y-2">
                                                <li class="flex items-center">
                                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                                    <span>Chính sách nghỉ phép</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                                    <span>Quy trình làm việc</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                                    <span>IT Support cơ bản</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                                    <span>Tra cứu thông tin</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bg-gray-50 p-4 rounded-xl">
                                            <h4 class="font-semibold text-gray-900 mb-3">Kết quả đạt được:</h4>
                                            <ul class="text-sm text-gray-600 space-y-2">
                                                <li class="flex items-center">
                                                    <i class="fas fa-arrow-down text-red-500 mr-2"></i>
                                                    <span>Giảm 80% ticket HR</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <i class="fas fa-arrow-down text-red-500 mr-2"></i>
                                                    <span>Giảm 60% email IT</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <i class="fas fa-arrow-up text-green-500 mr-2"></i>
                                                    <span>Response time <1 phút</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <i class="fas fa-arrow-up text-green-500 mr-2"></i>
                                                    <span>Available 24/7</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-green-50 p-6 rounded-xl">
                                        <h4 class="font-semibold text-gray-900 mb-3">Tính năng nổi bật:</h4>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center text-sm">
                                                <i class="fas fa-language text-green-600 mr-2"></i>
                                                <span>Đa ngôn ngữ (VI/EN)</span>
                                            </div>
                                            <div class="flex items-center text-sm">
                                                <i class="fas fa-link text-green-600 mr-2"></i>
                                                <span>Tích hợp Slack/Teams</span>
                                            </div>
                                            <div class="flex items-center text-sm">
                                                <i class="fas fa-brain text-green-600 mr-2"></i>
                                                <span>Tự học từ feedback</span>
                                            </div>
                                            <div class="flex items-center text-sm">
                                                <i class="fas fa-shield-alt text-green-600 mr-2"></i>
                                                <span>Bảo mật nội bộ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 bg-gradient-to-br from-green-50 to-blue-50 p-12 flex items-center">
                                    <div class="w-full">
                                        <div class="bg-white p-4 rounded-2xl shadow-lg">
                                            <div class="bg-gray-100 p-4 rounded-xl">
                                                <div class="flex items-start space-x-3 mb-3">
                                                    <div
                                                        class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                                        <i class="fas fa-user text-white text-sm"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div
                                                            class="bg-blue-500 text-white p-3 rounded-lg rounded-tl-none">
                                                            <p class="text-sm">Em muốn xin nghỉ phép 3 ngày, quy trình
                                                                như thế nào ạ?</p>
                                                        </div>
                                                        <span class="text-xs text-gray-500">Nhân viên - 09:15</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-start space-x-3 mb-3">
                                                    <div
                                                        class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                                        <i class="fas fa-robot text-white text-sm"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="bg-gray-200 p-3 rounded-lg rounded-tl-none">
                                                            <p class="text-sm text-gray-800 mb-2">Để xin nghỉ phép, bạn
                                                                cần:</p>
                                                            <ol class="text-sm text-gray-700 space-y-1">
                                                                <li>1. Điền form nghỉ phép trên HR Portal</li>
                                                                <li>2. Gửi cho quản lý trực tiếp duyệt</li>
                                                                <li>3. CC email cho HR</li>
                                                            </ol>
                                                            <div class="mt-2 pt-2 border-t">
                                                                <a href="#"
                                                                    class="text-blue-600 text-sm hover:underline">📎
                                                                    Mẫu form nghỉ phép</a>
                                                            </div>
                                                        </div>
                                                        <span class="text-xs text-gray-500">AI Assistant - 09:15</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-start space-x-3">
                                                    <div
                                                        class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                                        <i class="fas fa-user text-white text-sm"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div
                                                            class="bg-blue-500 text-white p-3 rounded-lg rounded-tl-none">
                                                            <p class="text-sm">Cảm ơn em! 👍</p>
                                                        </div>
                                                        <span class="text-xs text-gray-500">Nhân viên - 09:16</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 flex items-center justify-between text-xs text-gray-600">
                                                <span>💬 2,847 conversations today</span>
                                                <span>⚡ Avg response: 0.8s</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="contact" class="py-20 bg-gradient-to-r from-slate-800 to-slate-700 text-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-block bg-white bg-opacity-20 text-white px-6 py-3 rounded-full text-lg font-semibold mb-6">
                        Bắt đầu hành trình AI
                    </div>
                    <h2 class="text-3xl lg:text-5xl font-bold mb-6 !leading-snug md:!leading-normal">
                        Sẵn sàng áp dụng AI cho doanh nghiệp?
                    </h2>
                    <p class="text-lg md:text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                        Liên hệ với chúng tôi để được tư vấn miễn phí và bắt đầu hành trình AI transformation
                    </p>
                </div>

                <div class="max-w-2xl mx-auto">
                    <div class="bg-white bg-opacity-10 rounded-2xl p-8 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold mb-6 text-center">Đăng ký tư vấn miễn phí</h3>
                        <form id="contact-form-ai-build" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-white text-sm font-medium mb-2">Họ và tên *</label>
                                    <input id="fullname-input" type="text"
                                        class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg focus:outline-none focus:border-blue-300 text-white placeholder-gray-300"
                                        placeholder="Nhập họ tên">
                                </div>
                                <div>
                                    <label class="block text-white text-sm font-medium mb-2">Email *</label>
                                    <input id="email-input" type="email"
                                        class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg focus:outline-none focus:border-blue-300 text-white placeholder-gray-300"
                                        placeholder="email@company.com">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-white text-sm font-medium mb-2">Số điện thoại *</label>
                                    <input id="phone-number-input" type="tel"
                                        class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg focus:outline-none focus:border-blue-300 text-white placeholder-gray-300"
                                        placeholder="0123 456 789">
                                </div>
                                <div>
                                    <label class="block text-white text-sm font-medium mb-2">Tên công ty *</label>
                                    <input id="company-name-input" type="text"
                                        class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg focus:outline-none focus:border-blue-300 text-white placeholder-gray-300"
                                        placeholder="Tên công ty">
                                </div>
                            </div>

                            <div>
                                <label class="block text-white text-sm font-medium mb-2">Dịch vụ quan tâm</label>
                                <select id="selected-purpose"
                                    class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg focus:outline-none focus:border-blue-300 text-white">
                                    <option value="" class="text-slate-800 hidden">Chọn dịch vụ</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-white text-sm font-medium mb-2">Mô tả ngắn về nhu cầu</label>
                                <textarea id="message-input" rows="4"
                                    class="w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-lg focus:outline-none focus:border-blue-300 text-white placeholder-gray-300"
                                    placeholder="Chia sẻ về mục tiêu và thách thức của công ty..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 rounded-lg transition-colors duration-300">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Gửi yêu cầu tư vấn
                            </button>
                        </form>
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
            // Check if device is mobile
            function isMobile() {
                return window.innerWidth <= 768;
            }

            // Typing animation
            const line1 = "Khai Phá Sức Mạnh AI";
            const line2 = "Cho Doanh Nghiệp";
            const typingElement = document.getElementById('typing-text');
            const cursor = document.querySelector('.cursor');
            const staticText = document.getElementById('static-text');

            let currentText = '';
            let currentIndex = 0;
            let isTypingLine2 = false;
            let typingComplete = false;

            function showStaticText() {
                // Show static text for mobile
                document.querySelector('.typing-container').classList.add('hidden');
                staticText.classList.remove('hidden');
            }

            function typeText() {
                if (!isTypingLine2) {
                    // Typing line 1
                    if (currentIndex < line1.length) {
                        currentText += line1[currentIndex];
                        typingElement.innerHTML = currentText;
                        currentIndex++;
                        setTimeout(typeText, Math.random() * 50 + 80);
                    } else {
                        // Finished line 1, start line 2
                        currentText += '<br><span class="text-blue-400">';
                        isTypingLine2 = true;
                        currentIndex = 0;
                        setTimeout(typeText, 500); // Pause before second line
                    }
                } else {
                    // Typing line 2
                    if (currentIndex < line2.length) {
                        currentText += line2[currentIndex];
                        typingElement.innerHTML = currentText + '</span>';
                        currentIndex++;
                        setTimeout(typeText, Math.random() * 50 + 80);
                    } else {
                        // Finished typing both lines
                        typingComplete = true;
                        setTimeout(() => {
                            cursor.style.display = 'none';
                        }, 1000);
                    }
                }
            }

            // Initialize
            document.addEventListener('DOMContentLoaded', function() {
                if (isMobile()) {
                    showStaticText();
                } else {
                    // Start typing animation after a delay
                    setTimeout(typeText, 1000);
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (isMobile() && !typingComplete) {
                    showStaticText();
                }
            });

            // Add glow effect to buttons on hover
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', () => {
                    button.style.boxShadow = '0 0 30px rgba(59, 130, 246, 0.4)';
                });

                button.addEventListener('mouseleave', () => {
                    button.style.boxShadow = '';
                });
            });

            // Add interactive particles on mouse move (desktop only)
            if (!isMobile()) {
                document.addEventListener('mousemove', (e) => {
                    if (Math.random() < 0.02) {
                        const particle = document.createElement('div');
                        particle.className =
                            'absolute w-1 h-1 bg-blue-400 rounded-full pointer-events-none animate-pulse';
                        particle.style.left = e.clientX + 'px';
                        particle.style.top = e.clientY + 'px';
                        particle.style.zIndex = '1';

                        document.body.appendChild(particle);

                        setTimeout(() => {
                            particle.remove();
                        }, 2000);
                    }
                });
            }

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

            document.getElementById('contact-form-ai-build').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = document.getElementById('contact-form-ai-build');
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
