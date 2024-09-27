<x-app-layout>
    <section class="pt-[130px]">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 py-12 sm:py-16">
            <h1 class="pb-10 text-5xl font-bold text-center">{{ __('About Us') }}</h3>
                {{-- <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 md:gap-8 lg:gap-16">
                    <div id="slide-up-animation" class="w-full md:w-1/3 relative overflow-hidden">
                        <img class="h-full rounded-3xl" src="{{ asset('assets/images/feature-illustration.webp') }}"
                            alt="erp-solution">
                        <img class="absolute w-7/12 bottom-4 right-4"
                            src="{{ asset('assets/images/feature-statistics.webp') }}" alt="statistics-solution">
                    </div>
                    <div
                        class="relative flex-1 flex flex-col gap-8 before:absolute before:top-0 before:right-0 before:w-[60px] before:h-[61px] before:bg-contain before:bg-[url('../assets/images/feature-item-sun.webp')]">
                        <div>
                            <span id="feature"
                                class="uppercase text-xl font-semibold mt-16 py-1 px-4 rounded-full bg-bg-gray">{{ __('Technology Solutions Consulting') }}</span>
                        </div>
                        <h3 data-aos="fade-up"
                            class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                            "{{ __('Want your business to thrive in Industry 4.0?') }}."</h3>
                        <p data-aos="fade-up" class="text-base leading-relaxed">{{ __('app.intro') }}</p>
                        <ul class="list-disc list-inside space-y-4">
                            <li data-aos="fade-up" data-aos-delay="100" class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                    viewBox="0 0 24 24" class="text-icon-main">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="9" />
                                        <path d="m8 12l3 3l5-6" />
                                    </g>
                                </svg>
                                <span class="text-lg font-semibold">{{ __('app.key1') }}</span>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300" class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                    viewBox="0 0 24 24" class="text-icon-main">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="9" />
                                        <path d="m8 12l3 3l5-6" />
                                    </g>
                                </svg>
                                <span class="text-lg font-semibold">{{ __('app.key2') }}</span>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="500" class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                    viewBox="0 0 24 24" class="text-icon-main">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="9" />
                                        <path d="m8 12l3 3l5-6" />
                                    </g>
                                </svg>
                                <span class="text-lg font-semibold">{{ __('app.key3') }}</span>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="700" class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                    viewBox="0 0 24 24" class="text-icon-main">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="9" />
                                        <path d="m8 12l3 3l5-6" />
                                    </g>
                                </svg>
                                <span class="text-lg font-semibold">{{ __('app.key4') }}</span>
                            </li>
                        </ul>
                        <div data-aos="fade-up" class="w-fit">
                            <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                                class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">{{ __('Register Trial') }}</button>
                        </div>

                    </div>
                </div> --}}
                <div class="relative mb-12 md:mt-0 sm:hidden">
                    <img src="{{ asset('assets/images/chain-mobius-contact.png') }}" alt="Illustration" class="max-w-sm md:max-w-md mx-auto md:mx-0 transform rotate-0 hover:scale-105 transition duration-500 ease-in-out" />
                </div>
                <div class="flex flex-col lg:flex-row items-center justify-between pb-8 md:pb-10 relative before:absolute before:w-4/5 before:h-4/5 before:opacity-20 before:bg-no-repeat before:bg-contain before:bg-[url('../assets/images/mobius-contact.png')] before:top-1/2 before:-translate-y-1/2 before:left-0">
                    <!-- Left Text Section -->
                    <div class="w-full lg:w-2/3">
                        {{-- <h3 class="text-sm text-indigo-600 font-semibold uppercase mb-4">About Us</h3> --}}
                        {{-- <h1 class="text-4xl font-bold mb-6 leading-tight">
                            {{__('Get to know Grant Thornton Vietnam')}}
                        </h1> --}}
                        <p class="text-lg text-gray-600 mb-4">
                            <b>{{__('Grant Thornton Vietnam')}}</b> {{__('was established in 1993 and became a 100% foreign-owned enterprise in 1997, with a branch in Ho Chi Minh City')}}.
                        </p>
                        <p class="text-lg text-gray-600 mb-4">
                            <b>In 1998</b>, we officially became a full member of Grant Thornton International. The firm's name
                            was changed to Grant Thornton (Vietnam) Limited in 1999.
                        </p>
                        <p class="text-lg text-gray-600 mb-4">
                            <b>In 2014</b>, Grant Thornton Vietnam merged with Nexia ACPA, creating a professional team of 14
                            partners and over 220 staff in Hanoi and Ho Chi Minh City.
                        </p>
                        <p class="text-lg text-gray-600 mb-4">
                            <b>In 2018</b>, we are very excited to celebrate our 25 years anniversary in Vietnam.
                        </p>
                        <p class="text-lg text-gray-600 mb-8">
                            <b>In 2019</b>, management board welcomed a female Partner; this aligned with the Grant Thornton
                            global strategy in diversity in leadership.
                        </p>
                        <div class="w-fit">
                            <button data-aos="fade-up" onclick="document.getElementById('contact-us-section').scrollIntoView({ behavior: 'smooth' });"
                                class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">{{ __('Contact Us') }}</button>
                        </div>
                    </div>

                    <!-- Right Image Section -->
                    <div class="relative mt-12 md:mt-0 hidden sm:block">
                        <img src="{{ asset('assets/images/chain-mobius-contact.png') }}" alt="Illustration" class="max-w-sm md:max-w-md mx-auto md:mx-0 transform rotate-0 hover:scale-105 transition duration-500 ease-in-out" />
                    </div>
                </div>
        </div>
    </section>
    <section id="contact-us-section" class="h-max bg-gradient-to-b from-[#f2f0f4] to-[#E9DDF4]">
        <div
            class="relative max-w-7xl mx-auto flex flex-col lg:flex-row sm:gap-8 py-6 sm:py-12 px-4 sm:px-2 xl:px-0 gap-8 ">
            <div>
                <div class="relative flex flex-col gap-6">
                    <div>
                        <img class="w-12 h-full" src="{{ asset('assets/images/banner-item-chat.webp') }}"
                            alt="chat-with-us">
                    </div>
                    <div class="flex my-auto">
                        <h1 class="text-5xl w-full sm:w-fit leading-snug md:!leading-tight font-bold relative">
                            {{ __('Contact Us') }}</h1>
                    </div>
                    <span
                        class="text-xl font-medium">{{ __('Email, call or complete the form to get how we can solve your business problem') }}.</span>
                    <div>
                        <div class="rounded-t-lg shadow px-3 py-4 bg-white flex gap-4">
                            <div class="flex items-center gap-4">
                                <div class="text-text-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em"
                                        viewBox="0 0 16 16">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M14.95 3.684L8.637 8.912a1 1 0 0 1-1.276 0l-6.31-5.228A1 1 0 0 0 1 4v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-.05-.316M2 2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2m-.21 1l5.576 4.603a1 1 0 0 0 1.27.003L14.268 3z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">Email</p>
                                <a class="" href="mailto:Grant.Thornton@vn.gt.com">Grant.Thornton@vn.gt.com</a>
                            </div>
                        </div>
                        <div class="shadow px-3 py-4 bg-white flex gap-4">
                            <div class="flex items-center gap-4">
                                <div class="text-text-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m19.23 15.26l-2.54-.29a1.99 1.99 0 0 0-1.64.57l-1.84 1.84a15.05 15.05 0 0 1-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52a2 2 0 0 0-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07c.53 8.54 7.36 15.36 15.89 15.89c1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">{{ __('Phone Number') }}</p>
                                <a class="" href="tel:+84982232343">(+84) 24 3850 1686</a>
                            </div>
                        </div>
                        <div class="rounded-b-lg shadow px-3 py-4 bg-white flex gap-4">
                            <div class="flex items-center gap-4">
                                <div class="text-text-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em"
                                        viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="M14 15V4h-3V1H2v14H0v1h7v-3h2v3h7v-1zm-8-4H4V9h2zm0-3H4V6h2zm0-3H4V3h2zm3 6H7V9h2zm0-3H7V6h2zm0-3H7V3h2zm4 6h-2V9h2zm0-3h-2V6h2z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">{{ __('Office Address') }}</p>
                                <p class="">
                                    {{ __('HCMC: 14th Floor, Pearl Plaza Building, 561A Dien Bien Phu Street, Ward 25, Binh Thanh District, HCMC') }}
                                </p>
                                <p>
                                    {{ __('HN: 18th Floor, Hoa Binh International Office Building, 106 Hoang Quoc Viet Street, Nghia Do Ward, Cau Giay District, Hanoi') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ showForm: true }" class="w-full lg:max-w-md mx-auto relative overflow-hidden">
                <!-- Form and Policies Wrapper -->
                <div class="relative w-full transition-transform duration-300 ease-in-out"
                    :class="{ '-translate-x-full': !showForm, 'translate-x-0': showForm }">
                    <!-- Form Content -->
                    <form id="contact-form-2" class="bg-white pb-6 px-4 py-4 rounded-lg gap-4 flex flex-col shadow">
                        <h3 class="font-bold text-3xl">{{ __('Get In Touch With Us') }}</h3>
                        <p>{{ __('Feel free to send a message, just fill the form below and we will reply shortly') }}!
                            👍</p>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-3">
                                <label class="font-semibold">{{ __('Full name') }} <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="fullname"
                                    class="w-full px-4 py-2 border border-border-gray focus:border-border-main rounded-lg focus:outline-none">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label class="font-semibold">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email"
                                    class="w-full px-4 py-2 border border-border-gray focus:border-border-main rounded-lg focus:outline-none">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label class="font-semibold">{{ __('Phone number') }}</label>
                                <input type="text" name="phone_number"
                                    class="w-full px-4 py-2 border border-border-gray focus:border-border-main rounded-lg focus:outline-none">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label class="font-semibold">{{ __('Message') }}</label>
                                <textarea rows="3" name="message"
                                    class="w-full px-4 py-2 border border-border-gray focus:border-border-main rounded-lg focus:outline-none"></textarea>
                            </div>
                            <button type="submit" id="contact-form-btn"
                                class="text-white bg-bg-btn px-4 py-2 w-full h-8 rounded font-bold flex justify-center items-center">
                                <span class="normal-text">{{ __('Submit') }}</span>
                                <div class="loader hidden flex space-x-1">
                                    <span
                                        class="block h-2 w-2 bg-white rounded-full animate-bounce [animation-delay:-0.2s]"></span>
                                    <span
                                        class="block h-2 w-2 bg-white rounded-full animate-bounce [animation-delay:-0.1s]"></span>
                                    <span class="block h-2 w-2 bg-white rounded-full animate-bounce"></span>
                                </div>
                            </button>
                            <p class="text-sm">
                                {{ __('By contacting us, you agree to our') }}
                                <span class="text-blue-500 cursor-pointer"
                                    @click="showForm = false">{{ __('Terms of Service') }}</span>
                                {{ __('and') }}
                                <span class="text-blue-500 cursor-pointer"
                                    @click="showForm = false">{{ __('Privacy Policy') }}</span>.
                            </p>
                        </div>
                    </form>
                </div>

                <div class="absolute top-0 left-full w-full h-full transition-transform duration-300 ease-in-out"
                    :class="{ '-translate-x-full': !showForm, 'translate-x-0': showForm }">
                    <div class="bg-white py-6 px-4 rounded-lg shadow h-full flex flex-col">
                        <h3 class="font-bold text-3xl mb-4">Terms of Service & Privacy Policy</h3>
                        <div class="px-2 flex-grow overflow-y-auto h-80 py-3 scroll-px-2 scroll-py-3 bg-border-gray">
                            <h4 class="font-semibold">Terms of Service</h4>
                            <p class="text-sm mt-2">
                                <b>1. Giới thiệu</b><br>
                                Bằng cách sử dụng mẫu liên hệ "Contact Us", bạn đồng ý tuân thủ và chịu trách nhiệm theo
                                các điều khoản dịch vụ này. Nếu bạn không đồng ý với bất kỳ điều khoản nào, xin vui lòng
                                không sử dụng mẫu liên hệ này.<br><br>

                                <b>2. Mục đích</b><br>
                                Mẫu liên hệ được cung cấp để khách hàng có thể liên hệ với chúng tôi về thông tin sản
                                phẩm, dịch vụ ERP. Các thông tin bạn cung cấp sẽ được chúng tôi sử dụng để đáp ứng yêu
                                cầu của bạn và hỗ trợ tốt nhất cho bạn.<br><br>

                                <b>3. Cam kết</b><br>
                                Bạn cam kết rằng thông tin cung cấp là chính xác và đầy đủ. Bạn không được phép sử dụng
                                mẫu liên hệ để gửi nội dung không phù hợp, gây tổn hại đến người khác, hoặc vi phạm pháp
                                luật.<br><br>

                                <b>4. Thay đổi điều khoản</b><br>
                                Chúng tôi có quyền sửa đổi, cập nhật điều khoản này bất kỳ lúc nào mà không cần thông
                                báo trước. Vui lòng kiểm tra lại thường xuyên để cập nhật những thay đổi mới nhất.
                            </p>

                            <h4 class="font-semibold mt-4">Privacy Policy</h4>
                            <p class="text-sm mt-2">
                                <b>1. Thông tin thu thập</b><br>
                                Khi bạn sử dụng mẫu liên hệ "Contact Us", chúng tôi có thể thu thập các thông tin cá
                                nhân như: họ tên, số điện thoại, email, tên công ty, và các thông tin khác mà bạn cung
                                cấp.<br><br>

                                <b>2. Mục đích sử dụng thông tin</b><br>
                                Các thông tin cá nhân này sẽ được sử dụng để:<br>
                                - Liên hệ và cung cấp thông tin chi tiết về các giải pháp ERP.<br>
                                - Cải thiện dịch vụ của chúng tôi.<br>
                                - Đáp ứng các yêu cầu hỗ trợ của bạn.<br><br>

                                <b>3. Bảo mật thông tin</b><br>
                                Chúng tôi cam kết bảo mật thông tin của bạn. Các biện pháp bảo mật được áp dụng để đảm
                                bảo dữ liệu cá nhân không bị truy cập, tiết lộ hoặc thay đổi trái phép.<br><br>

                                <b>4. Chia sẻ bên thứ ba</b><br>
                                Chúng tôi không bán hoặc chia sẻ thông tin cá nhân của bạn với bên thứ ba, trừ khi điều
                                đó là cần thiết để tuân thủ pháp luật hoặc theo yêu cầu của chính quyền.<br><br>

                                <b>5.Quyền của bạn</b><br>
                                Bạn có quyền yêu cầu xem, sửa đổi hoặc xóa dữ liệu cá nhân mà chúng tôi lưu trữ bất kỳ
                                lúc nào.
                            </p>
                        </div>
                        <button @click="showForm = true" class="mt-4 text-blue-500 hover:underline">←
                            {{ __('Back to form') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="relative max-w-7xl mx-auto flex py-8 bg-white rounded-xl">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7838.296392179153!2d106.71598807485726!3d10.799959589350214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529d7845738f3%3A0x6fd8270abc8b4947!2sPearl%20Plaza!5e0!3m2!1svi!2sus!4v1727080142967!5m2!1svi!2sus&language={{ app()->getLocale() }}"
                height="450" class="border-0 w-full rounded-2xl" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section>
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div
                class="relative flex px-10 py-16 sm:px-16 sm:py-24 rounded-3xl bg-no-repeat bg-cover bg-[url('../assets/images/banner-bg.webp')] before:absolute before:w-full before:h-full before:rounded-3xl before:top-0 before:left-0 before:bg-bg-main before:opacity-70">
                <div class="flex flex-col gap-4 sm:gap-0 sm:flex-row justify-between sm:items-center z-10">
                    <h1 data-aos="fade-up"
                        class="text-3xl sm:text-5xl text-white font-bold cursour-default leading-snug md:leading-normal lg:leading-relaxed">
                        {{ __('Are You Ready to Boost Your Business Performance?') }}</h1>
                    <div>
                        <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                            class="rounded-full text-nowrap bg-icon-main font-semibold px-6 py-4">{{ __('Register Trial') }}</button>
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
            AOS.init({
                once: true,
                duration: 700,
                easing: 'ease-in-out',
                delay: 100,
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

            document.getElementById('contact-form-btn').addEventListener('click', function(e) {
                e.preventDefault();

                const button = this;
                const loader = button.querySelector('.loader');
                const normalText = button.querySelector('.normal-text');

                loader.classList.remove('hidden');
                normalText.classList.add('hidden');
                button.disabled = true;

                let data = {
                    fullname: document.querySelector('input[name="fullname"]').value,
                    email: document.querySelector('input[name="email"]').value,
                    phone_number: document.querySelector('input[name="phone_number"]').value,
                    message: document.querySelector('textarea[name="message"]').value,
                };

                function validateInput(data) {
                    if (!data.fullname) {
                        return '{{ __('Please enter your full name') }}';
                    }
                    if (!data.email) {
                        return '{{ __('Please enter your email') }}';
                    }
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(data.email)) {
                        return '{{ __('Email is not in correct format') }}';
                    }
                    return null;
                }

                const validationError = validateInput(data);
                if (validationError) {
                    showToast('warning', validationError);
                    loader.classList.add('hidden');
                    normalText.classList.remove('hidden');
                    button.disabled = false;
                    return;
                }
                const locale = document.documentElement.lang || 'en';

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
                            return response.json().then(errorData => {
                                throw new Error(errorData.message ||
                                    '{{ __('An error occurred, please try again later') }}');
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        showToast('success', data.message);
                        document.getElementById('contact-form-2').reset();
                    })
                    .catch(error => {
                        if (error.message) {
                            showToast('error', error.message);
                            console.error('Lỗi: ' + error.message);
                        } else {
                            showToast('error', '{{ __('An error occurred, please try again later') }}');
                            console.error('Error:', error);
                        }
                    })
                    .finally(() => {
                        loader.classList.add('hidden');
                        normalText.classList.remove('hidden');
                        button.disabled = false;
                    });
            });
        </script>
    @endpush
</x-app-layout>
