<x-app-layout>
    @section('title', __('SaaS Product') . ' | Grant Thornton TSC')
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
        <section class="pt-[170px] bg-gradient-to-br from-primary-gt to-secondary-gt text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div
                            class="inline-flex items-center gap-2 bg-white text-primary-gt  px-4 py-2 rounded-full text-sm font-medium">
                            <i class="fas fa-rocket mr-2"></i>
                            Giải pháp SaaS doanh nghiệp
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold !leading-snug md:!leading-normal"
                            style="line-height: 1.2;">
                            Giải Pháp Phát Triển <span class="text-yellow-300" style="line-height: 1.2;"> Phần Mềm
                            </span> Cho
                            <span class="text-yellow-300" style="line-height: 1.2;"> Doanh Nghiệp</span>
                        </h1>
                        <p class="text-xl text-gray-100 leading-relaxed">
                            Các giải pháp phần mềm "plug & play" được thiết kế đáp ứng tức thì các yêu cầu của doanh
                            nghiệp. Triển khai nhanh, tiết kiệm chi phí, linh hoạt mở rộng.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button
                                onclick="document.getElementById('benefit-section').scrollIntoView({ behavior: 'smooth' });"
                                class="bg-white text-primary-gt px-8 py-3 rounded-lg font-semibold transition-colors flex items-center justify-center">
                                <i class="fas fa-play mr-2"></i>
                                Khám phá ngay
                            </button>
                            <button
                                onclick="document.getElementById('contact-us-section').scrollIntoView({ behavior: 'smooth' });"
                                class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary-gt transition-colors flex items-center justify-center">
                                <i class="fas fa-phone mr-2"></i>
                                Liên hệ tư vấn
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <div
                            class="relative z-10 bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-300">98%</div>
                                    <div class="text-sm text-gray-200">Uptime</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-300">8/5</div>
                                    <div class="text-sm text-gray-200">Hỗ trợ liên tục</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-300">5+</div>
                                    <div class="text-sm text-gray-200">Khách hàng</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-300">95%</div>
                                    <div class="text-sm text-gray-200">Hài lòng</div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-300 rounded-full opacity-20"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-cyan-300 rounded-full opacity-20"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why SaaS Section -->
        <section id="benefit-section" class="py-12 bg-white" id="benefits">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span
                        class="inline-block bg-green-500 bg-opacity-20 px-6 py-3 rounded-full text-lg font-semibold mb-10">
                        Lợi ích thực tế
                    </span>
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4 !leading-snug md:!leading-normal">
                        Tại Sao <span class="text-yellow-500">SaaS Product</span> Là Lựa Chọn Tối Ưu?
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                        SaaS đã trở thành mô hình phân phối phần mềm được ưa chuộng nhờ những lợi ích vượt trội
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-primary-gt to-secondary-gt rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-bolt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Triển khai nhanh chóng</h3>
                        <p class="text-gray-600 text-lg">Không cần cài đặt phức tạp, có thể bắt đầu sử dụng ngay lập tức
                        </p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-success to-emerald-400 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-dollar-sign text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Tiết kiệm chi phí</h3>
                        <p class="text-gray-600 text-lg">Thanh toán theo mô hình thuê bao, giảm gánh nặng đầu tư ban đầu
                        </p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-accent to-blue-400 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-expand-arrows-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Linh hoạt và mở rộng</h3>
                        <p class="text-gray-600 text-lg">Dễ dàng điều chỉnh quy mô sử dụng theo nhu cầu phát triển</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-warning to-orange-400 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-sync-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Cập nhật liên tục</h3>
                        <p class="text-gray-600 text-lg">Luôn được sử dụng phiên bản mới nhất với tính năng cải tiến</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-12 md:py-20 pt-10 bg-gray-50" id="services">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 md:mb-16">
                    <span
                        class="inline-block bg-bg-main bg-opacity-10 text-bg-main px-6 py-3 rounded-full text-lg font-semibold mb-8 md:mb-14 w-fit">
                        Dịch vụ chuyên nghiệp
                    </span>
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                        Dịch Vụ Của Chúng Tôi
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                        Chúng tôi cung cấp các giải pháp SaaS toàn diện để hỗ trợ doanh nghiệp phát triển
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-primary-gt to-secondary-gt rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-cogs text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Cấu Hình Sẵn Sàng & Triển Khai Nhanh</h3>
                        <p class="text-gray-600 mb-4">
                            Các công cụ SaaS được cấu hình sẵn (Quản lý Chi phí & Du lịch, BI, Quy trình HR) để có
                            thể sử dụng ngay lập tức.
                        </p>
                        <div class="flex items-center text-primary-gt font-semibold">
                            <span>Tìm hiểu thêm</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-success to-emerald-400 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-headset text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Hỗ Trợ Liên Tục & Cập Nhật Định Kỳ</h3>
                        <p class="text-gray-600 mb-4">
                            Nhận được sự hỗ trợ liên tục, các bản cập nhật tính năng mới và quản lý thanh toán rõ ràng
                            thông qua mô hình thuê bao.
                        </p>
                        <div class="flex items-center text-primary-gt font-semibold">
                            <span>Tìm hiểu thêm</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-accent to-blue-400 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-puzzle-piece text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Giải Pháp Chuyên Biệt</h3>
                        <p class="text-gray-600 mb-4">
                            Tập trung vào các giải pháp Micro SaaS như Quản lý Chi phí Du lịch, Bảng chấm công, Quy
                            trình phê duyệt.
                        </p>
                        <div class="flex items-center text-primary-gt font-semibold">
                            <span>Tìm hiểu thêm</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section
            class="pb-10 bg-bg-gray relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-bg-gray before:opacity-40 z-10 bg-no-repeat bg-center bg-[length:60%_auto] bg-[url('../assets/images/service-pattern.webp')]"
            id="products">
            <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4 !leading-snug md:!leading-normal">
                        Sản Phẩm SaaS <span class="text-yellow-500">Nổi Bật</span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                        Khám phá các giải pháp SaaS được thiết kế để tối ưu hóa hoạt động kinh doanh của bạn
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-300 hover:shadow-lg transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-primary-gt to-primary-gt rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-plane text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Quản lý Chi phí & Du lịch</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2" style="min-height: 3rem;">Tự động hóa quy trình
                            quản lý chi phí và đặt vé du lịch
                            công tác</p>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-gt font-semibold">Dễ dàng triển khai</span>
                            <button
                                class="bg-secondary-gt text-white px-4 py-2 rounded-lg text-sm hover:bg-secondary-gt transition-colors">
                                Dùng thử
                            </button>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-300 hover:shadow-lg transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-primary-gt to-primary-gt rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-chart-bar text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Business Intelligence</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2" style="min-height: 3rem;">Phân tích dữ liệu và báo
                            cáo thông minh cho ra quyết định
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-gt font-semibold">Mọi quy mô doanh nghiệp</span>
                            <button
                                class="bg-secondary-gt text-white px-4 py-2 rounded-lg text-sm hover:bg-secondary-gt transition-colors">
                                Dùng thử
                            </button>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-300 hover:shadow-lg transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-primary-gt to-primary-gt rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Quy trình HR</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2" style="min-height: 3rem;">Quản lý nhân sự và quy
                            trình phê duyệt tự động</p>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-gt font-semibold">Tự động hóa toàn bộ quy trình</span>
                            <button
                                class="bg-secondary-gt text-white px-4 py-2 rounded-lg text-sm hover:bg-secondary-gt transition-colors">
                                Dùng thử
                            </button>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-300 hover:shadow-lg transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-primary-gt to-primary-gt rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Bảng chấm công</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2" style="min-height: 3rem;">Theo dõi thời gian làm
                            việc và tính lương tự động</p>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-gt font-semibold">Tiết kiệm 50% thời gian</span>
                            <button
                                class="bg-secondary-gt text-white px-4 py-2 rounded-lg text-sm hover:bg-secondary-gt transition-colors">
                                Dùng thử
                            </button>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-300 hover:shadow-lg transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-primary-gt to-primary-gt rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-check-circle text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Quy trình phê duyệt</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2" style="min-height: 3rem;">Tự động hóa quy trình phê
                            duyệt và workflow</p>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-gt font-semibold">Giảm thiểu sai sót đến 90%</span>
                            <button
                                class="bg-secondary-gt text-white px-4 py-2 rounded-lg text-sm hover:bg-secondary-gt transition-colors">
                                Dùng thử
                            </button>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-300 hover:shadow-lg transition-shadow">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-primary-gt to-primary-gt rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-plus text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Giải pháp tùy chỉnh</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2" style="min-height: 3rem;">Phát triển giải pháp
                            riêng theo nhu cầu cụ thể</p>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-gt font-semibold">Liên hệ</span>
                            <button
                                class="bg-secondary-gt text-white px-4 py-2 rounded-lg text-sm hover:bg-secondary-gt transition-colors">
                                Tư vấn
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-yellow-500 mb-4">
                        Lợi Ích Vượt Trội
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Khi sử dụng SaaS Product của chúng tôi, doanh nghiệp sẽ nhận được những lợi ích thiết thực
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-primary-gt to-secondary-gt rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Tăng cường hiệu quả hoạt động</h3>
                                <p class="text-gray-600">Tự động hóa các tác vụ, giảm thiểu sai sót và tối ưu hóa quy
                                    trình làm việc</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-success to-emerald-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-brain text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Nâng cao khả năng ra quyết định</h3>
                                <p class="text-gray-600">Cung cấp dữ liệu và báo cáo tức thời, giúp đưa ra quyết định
                                    kinh doanh sáng suốt</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-accent to-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Giảm thiểu rủi ro CNTT</h3>
                                <p class="text-gray-600">Chúng tôi quản lý toàn bộ hạ tầng và bảo mật, giúp an tâm
                                    tập trung vào kinh doanh</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-warning to-orange-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-rocket text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Thúc đẩy tăng trưởng</h3>
                                <p class="text-gray-600">Giải phóng nguồn lực để doanh nghiệp có thể tập trung vào các
                                    chiến lược phát triển</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-primary-gt to-secondary-gt">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                        TSC - Đối Tác SaaS Đáng Tin Cậy Của Bạn
                    </h2>
                    <p class="text-xl text-white mb-8">
                        TSC cam kết mang đến các SaaS Product chất lượng cao, đáng tin cậy và phù hợp với nhu cầu của
                        các doanh nghiệp cần phát triển nhanh.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button
                            class="bg-white text-primary-gt px-8 py-3 rounded-lg font-semibold hover:bg-[#23272f] transition-colors">
                            Khám phá giải pháp
                        </button>
                        <button
                            class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white !hover:text-white transition-colors">
                            Liên hệ ngay
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact-us-section"
            class="py-12 md:py-20 bg-gradient-to-br from-[#23272f] via-[#2d323b] to-[#181a20] text-white"
            id="contact">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="flex flex-col items-center lg:items-start">
                        <h2 class="text-3xl md:text-5xl font-bold mb-6">Liên Hệ Với Chúng Tôi</h2>
                        <p class="text-gray-300 mb-8">
                            Hãy để chúng tôi giúp khám phá các giải pháp SaaS phù hợp nhất cho doanh nghiệp của bạn
                        </p>
                        <div class="space-y-4 w-full">
                            <div class="flex items-center">
                                <i class="fas fa-phone text-primary-gt mr-4"></i>
                                <span>+84 (0) 123 456 789</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-primary-gt mr-4"></i>
                                <span>contact@tsc-saas.com</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-primary-gt mr-4"></i>
                                <span>Tầng 10, Tòa nhà ABC, Quận 1, TP.HCM</span>
                            </div>
                        </div>
                        <div class="w-full flex justify-center lg:justify-start mt-10">
                            <img class="w-64 max-w-xs sm:w-80 md:w-96 lg:w-[340px] xl:w-[400px] h-auto object-contain transition-all duration-300"
                                src="{{ asset('assets/images/contact-us.png') }}" alt="contact-us-illustration">
                        </div>
                    </div>

                    <div class="border border-border-gray rounded-2xl p-8 shadow-xl">
                        <form id="contact-form-saas" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">Họ tên</label>
                                    <input id="fullname-input" type="text"
                                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-white"
                                        placeholder="Nhập họ tên">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                                    <input id="email-input" type="email"
                                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-white"
                                        placeholder="Nhập email">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Công ty</label>
                                <input id="company-name-input" type="text"
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-white"
                                    placeholder="Tên công ty">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Số điện thoại</label>
                                <input id="phone-number-input" type="tel"
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-white"
                                    placeholder="Số điện thoại">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Nhu cầu</label>
                                <select id="selected-purpose"
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Tin nhắn</label>
                                <textarea id="message-input" rows="4"
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-white"
                                    placeholder="Mô tả chi tiết nhu cầu của bạn"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-primary-gt text-white py-3 rounded-lg font-semibold hover:bg-primary-dark transition-colors">
                                Gửi liên hệ
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
                            select.value = "4";
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            document.getElementById('contact-form-saas').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = document.getElementById('contact-form-saas');
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
                if (!data.contact_reason) {
                    showToast('warning', '{{ __('Please choose a solution') }}');
                    return false;
                }

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
