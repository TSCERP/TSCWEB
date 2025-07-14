<x-app-layout>
    @section('title', __('AI Course SME') . ' | Grant Thornton TSC')
    @push('styles')
        <style>
            .ai-gradient-1 {
                background: linear-gradient(135deg, #0EA5E9 0%, #3B82F6 50%, #8B5CF6 100%);
            }

            .ai-gradient-2 {
                background: linear-gradient(135deg, #06B6D4 0%, #10B981 100%);
            }

            /* .ai-gradient-3 {
                background: linear-gradient(135deg, #8B5CF6 0%, #EC4899 50%, #06B6D4 100%);
            }

            .ai-gradient-4 {
                background: linear-gradient(135deg, #F59E0B 0%, #EF4444 50%, #EC4899 100%);
            }

            .ai-gradient-5 {
                background: linear-gradient(135deg, #10B981 0%, #059669 50%, #0D9488 100%);
            } */

            .ai-gradient-3 {
                background: linear-gradient(135deg, #7C3AED 0%, #A855F7 50%, #C084FC 100%);
            }

            /* .ai-glow {
                box-shadow: 0 0 20px rgba(14, 165, 233, 0.3);
            }

            .ai-glow-purple {
                box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
            } */

            .ai-text-gradient {
                background: linear-gradient(135deg, #0EA5E9, #8B5CF6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .ai-text-gradient-2 {
                background: linear-gradient(135deg, #06B6D4 0%, #10B981 50%, #3B82F6 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .ai-text-gradient-3 {
                background: linear-gradient(135deg, #8B5CF6 0%, #EC4899 50%, #06B6D4 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .benefit-card {
                transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
                position: relative;
                overflow: hidden;
            }

            .benefit-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                transition: left 0.5s;
            }

            .floating-animation {
                animation: float 6s ease-in-out infinite;
            }

            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            .pulse-glow {
                animation: pulse-glow 2s ease-in-out infinite alternate;
            }

            @keyframes pulse-glow {
                from {
                    box-shadow: 0 0 20px rgba(14, 165, 233, 0.4);
                }

                to {
                    box-shadow: 0 0 30px rgba(14, 165, 233, 0.8);
                }
            }

            .card-hover {
                transition: all 0.3s ease;
            }

            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            }

            .ai-pattern {
                background-image:
                    radial-gradient(circle at 25% 25%, rgba(14, 165, 233, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 75% 75%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
            }

            .typing-animation {
                overflow: hidden;
                border-right: 2px solid #0EA5E9;
                white-space: nowrap;
                animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
            }

            @keyframes typing {
                from {
                    width: 0;
                }

                to {
                    width: 100%;
                }
            }

            @keyframes blink-caret {

                from,
                to {
                    border-color: transparent;
                }

                50% {
                    border-color: #0EA5E9;
                }
            }

            .number-counter {
                font-variant-numeric: tabular-nums;
            }

            .timeline-item {
                position: relative;
                opacity: 0;
                transform: translateX(-50px);
                animation: slideInLeft 0.8s ease-out forwards;
            }

            .timeline-item:nth-child(even) {
                transform: translateX(50px);
                animation: slideInRight 0.8s ease-out forwards;
            }

            @keyframes slideInLeft {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes slideInRight {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .timeline-item::before {
                content: '';
                position: absolute;
                left: -20px;
                top: 50%;
                transform: translateY(-50%);
                width: 12px;
                height: 12px;
                background: #0EA5E9;
                border-radius: 50%;
                border: 3px solid white;
                box-shadow: 0 0 0 3px #0EA5E9;
            }

            .grid-pattern {
                background-image:
                    linear-gradient(rgba(14, 165, 233, 0.1) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(14, 165, 233, 0.1) 1px, transparent 1px);
                background-size: 20px 20px;
            }

            .stats-animation {
                animation: countUp 2s ease-out forwards;
            }

            @keyframes countUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
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
        <section
            class="pt-[190px] relative bg-gradient-to-br from-slate-900 via-blue-900 to-purple-900 text-white py-20 overflow-hidden">
            <div class="absolute inset-0 ai-pattern"></div>
            <div class="absolute inset-0 grid-pattern"></div>

            <!-- Floating AI Elements -->
            <div
                class="absolute top-20 right-20 w-32 h-32 ai-gradient-2 rounded-full blur-3xl opacity-20 floating-animation">
            </div>
            <div class="absolute bottom-20 left-20 w-24 h-24 ai-gradient-3 rounded-full blur-2xl opacity-30 floating-animation"
                style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 ai-gradient-1 rounded-full blur-3xl opacity-10 floating-animation"
                style="animation-delay: 4s;"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-6">
                            <span class="text-cyan-300 text-sm font-medium">🚀 AI Transformation Program</span>
                        </div>
                        <h1 class="text-5xl md:text-6xl font-bold mb-6 !leading-normal">
                            Khoá Học <span class="ai-text-gradient">AI</span><br>
                            <span class="text-cyan-300">Dành Riêng Cho SME</span>
                        </h1>
                        <div class="text-xl md:text-2xl mb-8 leading-relaxed opacity-90 max-w-lg">
                            <span class="typing-animation">Biến AI thành lợi thế cạnh tranh</span>
                            <p class="mt-2 text-lg">Không cần biết lập trình • 8 buổi học thực chiến</p>
                        </div>

                        <!-- Stats Row -->
                        <div class="grid grid-cols-3 gap-6 mb-8">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-cyan-400 number-counter">10+</div>
                                <div class="text-sm text-gray-300">Doanh nghiệp và Cá nhân</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-400 number-counter">95%</div>
                                <div class="text-sm text-gray-300">Thành công</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-purple-400 number-counter">8</div>
                                <div class="text-sm text-gray-300">Buổi học</div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <button
                                class="bg-secondary-gt text-white font-bold py-4 px-8 rounded-full hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                                <i class="fas fa-download mr-2"></i>
                                Nhận Chương Trình Chi Tiết
                            </button>
                            <button
                                class="border-2 border-cyan-400 text-cyan-400 font-bold py-4 px-8 rounded-full hover:bg-cyan-400 hover:text-white transition-all duration-300">
                                <i class="fas fa-play mr-2"></i>
                                Xem Demo AI
                            </button>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-shiro/10 backdrop-blur-xl rounded-3xl p-8 border border-shiro/20">
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold mb-2">🤖 AI Dashboard Live</h3>
                                <p class="text-ai-accent">Xem AI hoạt động trong doanh nghiệp</p>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center justify-between bg-gradient-to-r from-aiBlue/20 to-ai-purple/20 rounded-xl p-4 backdrop-blur-sm">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 ai-gradient-1 rounded-full flex items-center justify-center mr-3">
                                            <i class="fas fa-robot text-shiro"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium">AI Chatbot</span>
                                            <div class="text-sm text-washi">Customer Support</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-ai-green font-bold text-lg">98%</span>
                                        <div class="text-sm text-washi">Accuracy</div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between bg-gradient-to-r from-ai-green/20 to-aiBlue/20 rounded-xl p-4 backdrop-blur-sm">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 ai-gradient-2 rounded-full flex items-center justify-center mr-3">
                                            <i class="fas fa-chart-line text-shiro"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium">Sales Prediction</span>
                                            <div class="text-sm text-washi">Revenue Forecast</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-aiBlue font-bold text-lg">+35%</span>
                                        <div class="text-sm text-washi">Revenue</div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between bg-gradient-to-r from-ai-purple/20 to-aiBlue/20 rounded-xl p-4 backdrop-blur-sm">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 ai-gradient-3 rounded-full flex items-center justify-center mr-3">
                                            <i class="fas fa-cogs text-shiro"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium">Automation</span>
                                            <div class="text-sm text-washi">Process Optimization</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-ai-purple font-bold text-lg">-60%</span>
                                        <div class="text-sm text-washi">Time Saved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Value Proposition -->
        <section class="py-12 md:py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 !leading-normal">
                        Tại Sao Chọn <span class="ai-text-gradient">Chương Trình Đào Tạo AI</span> Của Chúng Tôi?
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Phương pháp đào tạo AI độc quyền được thiết kế đặc biệt cho doanh nghiệp SME Việt Nam
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <div
                            class="w-16 h-16 ai-gradient-1 rounded-2xl flex items-center justify-center mx-auto mb-6 ai-glow">
                            <i class="fas fa-rocket text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Triển Khai Nhanh</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Khoá học toàn diện kéo dài chỉ trong 8 tuần, xây dựng nền tảng và gợi ý từ ý tưởng đến ứng dụng thực tế.
                        </p>
                    </div>

                    <div class="text-center card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <div
                            class="w-16 h-16 ai-gradient-2 rounded-2xl flex items-center justify-center mx-auto mb-6 ai-glow">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Không Cần Kỹ Thuật</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Được thiết kế cho CEO, Manager và nhân viên không có background IT hoặc lập trình.
                        </p>
                    </div>

                    <div class="text-center card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <div
                            class="w-16 h-16 ai-gradient-3 rounded-2xl flex items-center justify-center mx-auto mb-6 ai-glow">
                            <i class="fas fa-chart-line text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">ROI Đo Lường Được</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Cam kết ROI tối thiểu 200% trong 6 tháng đầu hoặc hoàn tiền 100% học phí.
                        </p>
                    </div>

                    <div class="text-center card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <div
                            class="w-16 h-16 ai-gradient-1 rounded-2xl flex items-center justify-center mx-auto mb-6 ai-glow">
                            <i class="fas fa-hands-helping text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Hỗ Trợ 24/7</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Đội ngũ chuyên gia AI luôn sẵn sàng hỗ trợ trong suốt quá trình triển khai.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Course Content Timeline -->
        <section id="content" class="py-14 md:py-20 bg-shiro">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-sumi mb-4 !leading-normal">
                        Chương Trình <span class="ai-text-gradient-2">8 Buổi Học</span> Thực Chiến
                    </h2>
                    <p class="text-xl text-dark-bg max-w-4xl mx-auto">
                        Được thiết kế theo phương pháp CRISP-DM quốc tế kết hợp với case study thực tế từ các doanh nghiệp SME Việt Nam
                    </p>
                </div>

                <div class="max-w-6xl mx-auto">
                    <div class="space-y-8">
                        <!-- Session 1 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-aiBlue/10 to-ai-accent/10 rounded-2xl p-8 border border-aiBlue/20">
                            <div class="w-16 h-16 ai-gradient-1 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow">
                                1
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">AI Readiness Assessment</h3>
                                <p class="text-dark-bg mb-4">Đánh giá toàn diện khả năng sẵn sàng AI của doanh nghiệp. Xác định điểm mạnh, điểm yếu và cơ hội ứng dụng AI.</p>
                                <div class="flex items-center text-ai-primary">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Thực hành • Workshop</span>
                                </div>
                            </div>
                        </div>

                        <!-- Session 2 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-ai-purple/10 to-aiBlue/10 rounded-2xl p-8 border border-ai-purple/20">
                            <div class="w-16 h-16 ai-gradient-3 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow-purple">
                                2
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">AI/ML/LLM Fundamentals</h3>
                                <p class="text-dark-bg mb-4">Nắm vững kiến thức nền tảng về AI, Machine Learning và Large Language Models một cách dễ hiểu, không kỹ thuật.</p>
                                <div class="flex items-center text-ai-purple">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Lý thuyết • Case Study</span>
                                </div>
                            </div>
                        </div>

                        <!-- Session 3 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-ai-green/10 to-ai-accent/10 rounded-2xl p-8 border border-ai-green/20">
                            <div class="w-16 h-16 ai-gradient-2 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow">
                                3
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">Prompt Engineering Mastery</h3>
                                <p class="text-dark-bg mb-4">Thành thạo kỹ thuật viết prompt hiệu quả để tối ưu hóa kết quả từ AI. Học cách giao tiếp với AI như chuyên gia.</p>
                                <div class="flex items-center text-ai-green">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Thực hành • Lab</span>
                                </div>
                            </div>
                        </div>

                        <!-- Session 4 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-aiBlue/10 to-ai-purple/10 rounded-2xl p-8 border border-aiBlue/20">
                            <div class="w-16 h-16 ai-gradient-1 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow">
                                4
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">CRISP-DM Implementation</h3>
                                <p class="text-dark-bg mb-4">Áp dụng phương pháp CRISP-DM quốc tế để quản lý dự án AI từ A-Z. Đảm bảo thành công với quy trình chuẩn.</p>
                                <div class="flex items-center text-ai-primary">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Phương pháp • Framework</span>
                                </div>
                            </div>
                        </div>

                        <!-- Session 5 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-ai-green/10 to-aiBlue/10 rounded-2xl p-8 border border-ai-green/20">
                            <div class="w-16 h-16 ai-gradient-2 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow">
                                5
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">AI Solution Prototyping</h3>
                                <p class="text-dark-bg mb-4">Thực hành xây dựng prototype giải pháp AI phù hợp với bài toán doanh nghiệp. Không cần code.</p>
                                <div class="flex items-center text-ai-green">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Thực hành • Demo</span>
                                </div>
                            </div>
                        </div>

                        <!-- Session 6 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-ai-accent/10 to-aiBlue/10 rounded-2xl p-8 border border-ai-accent/20">
                            <div class="w-16 h-16 ai-gradient-1 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow">
                                6
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">Data & AI Security</h3>
                                <p class="text-dark-bg mb-4">Hiểu về bảo mật dữ liệu, quyền riêng tư và các rủi ro khi triển khai AI trong doanh nghiệp.</p>
                                <div class="flex items-center text-ai-accent">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Lý thuyết • Thảo luận</span>
                                </div>
                            </div>
                        </div>

                        <!-- Session 7 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-ai-purple/10 to-aiBlue/10 rounded-2xl p-8 border border-ai-purple/20">
                            <div class="w-16 h-16 ai-gradient-3 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow-purple">
                                7
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">AI KPI & Hiệu Quả</h3>
                                <p class="text-dark-bg mb-4">Thiết lập KPI, đo lường hiệu quả và tối ưu hóa dự án AI cho doanh nghiệp SME.</p>
                                <div class="flex items-center text-ai-purple">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Thực hành • Đánh giá</span>
                                </div>
                            </div>
                        </div>

                        <!-- Session 8 -->
                        <div class="timeline-item flex items-center bg-gradient-to-r from-ai-green/10 to-ai-accent/10 rounded-2xl p-8 border border-ai-green/20">
                            <div class="w-16 h-16 ai-gradient-2 rounded-2xl flex items-center justify-center text-shiro font-bold text-xl mr-6 ai-glow">
                                8
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sumi mb-2">AI Project Demo & Graduation</h3>
                                <p class="text-dark-bg mb-4">Trình bày, demo dự án AI thực tế và nhận chứng nhận hoàn thành khóa học.</p>
                                <div class="flex items-center text-ai-green">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span class="font-medium">2 giờ • Demo • Chứng nhận</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-bg-gray relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-bg-gray before:opacity-30 z-10 bg-no-repeat bg-center bg-[length:60%_auto] bg-[url('../assets/images/service-pattern.webp')]">
            <div class="relative container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                        <span class="ai-text-gradient">Ứng Dụng AI</span> Thay Đổi Doanh Nghiệp SME
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Từ tự động hóa đến dự đoán thông minh - Khám phá cách AI có thể cách mạng hóa mọi khía cạnh kinh
                        doanh
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <!-- Use Case 1: Customer Service -->
                    <div class="benefit-card bg-white rounded-2xl p-8 shadow-lg border border-bg-gray">
                        <div class="text-center mb-6">
                            <div
                                class="w-16 h-16 ai-gradient-1 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-robot text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">AI Chatbot Thông Minh</h3>
                            <p class="text-gray-600">Hỗ trợ khách hàng 24/7 với độ chính xác 95%</p>
                        </div>
                        <div class="space-y-3 text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Giải quyết 80% yêu cầu tự động</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Tích hợp đa nền tảng</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Học từ mỗi cuộc hội thoại</span>
                            </div>
                        </div>
                    </div>

                    <!-- Use Case 2: Sales Forecasting -->
                    <div class="benefit-card bg-white rounded-2xl p-8 shadow-lg border border-bg-gray">
                        <div class="text-center mb-6">
                            <div
                                class="w-16 h-16 ai-gradient-2 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-chart-line text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Dự Báo Bán Hàng</h3>
                            <p class="text-gray-600">Dự đoán chính xác 90% xu hướng thị trường</p>
                        </div>
                        <div class="space-y-3 text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Phân tích dữ liệu lịch sử</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Nhận diện xu hướng thị trường</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Tối ưu hóa kho hàng</span>
                            </div>
                        </div>
                    </div>

                    <!-- Use Case 3: Process Automation -->
                    <div class="benefit-card bg-white rounded-2xl p-8 shadow-lg border border-bg-gray">
                        <div class="text-center mb-6">
                            <div
                                class="w-16 h-16 ai-gradient-3 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-cogs text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Tự Động Hóa Thông Minh</h3>
                            <p class="text-gray-600">Giảm 70% thời gian xử lý công việc lặp lại</p>
                        </div>
                        <div class="space-y-3 text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Xử lý hóa đơn tự động</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Workflow thông minh</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Giảm thiểu sai sót</span>
                            </div>
                        </div>
                    </div>

                    <!-- Use Case 4: Marketing Intelligence -->
                    <div class="benefit-card bg-white rounded-2xl p-8 shadow-lg border border-bg-gray">
                        <div class="text-center mb-6">
                            <div
                                class="w-16 h-16 ai-gradient-1 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-bullhorn text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Marketing Thông Minh</h3>
                            <p class="text-gray-600">Tăng hiệu quả quảng cáo 200% với AI</p>
                        </div>
                        <div class="space-y-3 text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Phân khúc khách hàng tự động</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Cá nhân hóa nội dung</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Tối ưu hóa ngân sách</span>
                            </div>
                        </div>
                    </div>

                    <!-- Use Case 5: Risk Management -->
                    <div class="benefit-card bg-white rounded-2xl p-8 shadow-lg border border-bg-gray">
                        <div class="text-center mb-6">
                            <div
                                class="w-16 h-16 ai-gradient-2 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-shield-alt text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Quản Lý Rủi Ro</h3>
                            <p class="text-gray-600">Phát hiện sớm 98% rủi ro tiềm ẩn</p>
                        </div>
                        <div class="space-y-3 text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Cảnh báo bất thường</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Đánh giá tín dụng</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Bảo mật dữ liệu</span>
                            </div>
                        </div>
                    </div>

                    <!-- Use Case 6: Data Analytics -->
                    <div class="benefit-card bg-white rounded-2xl p-8 shadow-lg border border-bg-gray">
                        <div class="text-center mb-6">
                            <div
                                class="w-16 h-16 ai-gradient-3 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-chart-pie text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Phân Tích Dữ Liệu</h3>
                            <p class="text-gray-600">Trực quan hóa dữ liệu phức tạp trong 5 phút</p>
                        </div>
                        <div class="space-y-3 text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Dashboard thời gian thực</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Báo cáo tự động</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Insights thông minh</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="register" class="py-20 bg-gradient-to-tr from-slate-900 via-blue-900 to-purple-900 text-white">
            <div class="container mx-auto px-6">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Đăng Ký Nhận Chương Trình Chi Tiết</h2>
                        <p class="text-xl opacity-90 max-w-2xl mx-auto">
                            Nhận ngay tài liệu PDF chi tiết về khóa học và tư vấn giải pháp AI.
                        </p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <!-- Left: Form -->
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-8 border border-white border-opacity-20">
                            <form id="contact-form-ai-course" class="space-y-6">
                                <div>
                                    <label class="block text-white font-medium mb-2">Họ và tên *</label>
                                    <input id="fullname-input" type="text" required
                                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                                        placeholder="Nguyễn Văn A">
                                </div>

                                <div>
                                    <label class="block text-white font-medium mb-2">Email *</label>
                                    <input id="email-input" type="email" name="email" required
                                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                                        placeholder="email@company.com">
                                </div>

                                <div>
                                    <label class="block text-white font-medium mb-2">Tên công ty</label>
                                    <input type="text" id="company-name-input"
                                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                                        placeholder="Công ty ABC">
                                </div>

                                <div>
                                    <label class="block text-white font-medium mb-2">Số điện thoại</label>
                                    <input type="tel" id="phone-number-input"
                                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                                        placeholder="0901234567">
                                </div>
                                <div>
                                    <label class="block text-white font-medium mb-2">Ghi chú</label>
                                    <textarea id="message-input" rows="3"
                                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                                        ></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full ai-gradient-1 text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    <i class="fas fa-download mr-2"></i>
                                    Đăng Ký Nhận Chương Trình
                                </button>

                                <p class="text-center text-white opacity-80 text-sm">
                                    Tài liệu PDF sẽ gửi qua email sau 1 phút
                                </p>
                            </form>
                        </div>

                        <!-- Right: Benefits -->
                        <div class="space-y-6">
                            <h3 class="text-2xl font-bold mb-6">Bạn sẽ nhận được:</h3>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-8 h-8 ai-gradient-2 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-file-pdf text-gray-800"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2">Tài liệu khóa học chi tiết (PDF)</h4>
                                    <p class="opacity-90">Nội dung 8 buổi học, timeline, và phương pháp thực hành</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-8 h-8 ai-gradient-3 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-tools text-gray-800"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2">Tham gia cộng đồng AI SME</h4>
                                    <p class="opacity-90">Kết nối với cộng đồng doanh nghiệp SME đang ứng dụng AI, chia
                                        sẻ kinh nghiệm và cùng nhau phát triển</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-8 h-8 ai-gradient-1 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-phone text-gray-800"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2">Tư vấn 1-1 miễn phí</h4>
                                    <p class="opacity-90">30 phút tư vấn cá nhân về chiến lược AI cho doanh nghiệp</p>
                                </div>
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
                            select.value = "3";
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            document.getElementById('contact-form-ai-course').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = document.getElementById('contact-form-ai-course');
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;

                let data = {
                    fullname: form.querySelector('#fullname-input').value,
                    email: form.querySelector('#email-input').value,
                    company_name: form.querySelector('#company-name-input').value,
                    phone_number: form.querySelector('#phone-number-input').value,
                    contact_reason: 6,
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
