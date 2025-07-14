<div x-data="{
    show: @js($show),
    purpose: @js($defaultPurpose),
    purposeOptions: [],
    selectedPurpose: @js($defaultSelectedPurpose ?? 1),
    isLoading: false,
    focusables() {
        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])';
        return [...$el.querySelectorAll(selector)]
            .filter(el => !el.hasAttribute('disabled'));
    },
    firstFocusable() { return this.focusables()[0] },
    lastFocusable() { return this.focusables().slice(-1)[0] },
    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
    validateForm() {
        const name = this.$refs.name.value;
        const email = this.$refs.email.value;
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (!name) {
            showToast('warning', '{{ __('Please enter your full name') }}');
            return false;
        }
        if (!email) {
            showToast('warning', '{{ __('Please enter your email') }}');
            return false;
        }
        if (!emailPattern.test(email)) {
            showToast('warning', '{{ __('Email is not in correct format') }}');
            return false;
        }
        if (!this.selectedPurpose) {
            showToast('warning', '{{ __('Please choose a solution') }}');
            return false;
        }
        return true;
    },
    fetchPurposeOptions() {
        this.isLoading = true;
        fetch('/api/contact/contact-reasons', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.message || '{{ __('An error occurred, please try again later') }}');
                    });
                }
                return response.json();
            })
            .then(data => {
                this.purposeOptions = data;
            })
            .catch(error => {
                console.error('Error:', error.message);
                showToast('error', error.message || '{{ __('An error occurred, please try again later') }}');
            })
            .finally(() => {
                this.isLoading = false;
            });
    },
    submitForm() {
        if (!this.validateForm()) return;

        this.isLoading = true;

        let data = {
            fullname: this.$refs.name.value,
            email: this.$refs.email.value,
            company_name: this.$refs.company_name.value,
            phone_number: this.$refs.phone.value,
            contact_reason: this.selectedPurpose,
            message: this.$refs.message.value,
        };

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
                    return response.json().then(data => {
                        throw new Error(data.message || '{{ __('An error occurred, please try again later') }}');
                    });
                }
                return response.json();
            })
            .then(data => {
                showToast('success', data.message);
                document.getElementById('contact-form').reset();
                this.selectedPurpose = 1;
                this.show = false;
            })
            .catch(error => {
                console.error('Error:', error.message);
                showToast('error', error.message || '{{ __('An error occurred, please try again later') }}');
            })
            .finally(() => {
                this.isLoading = false;
            });
    }
}" x-init="fetchPurposeOptions();
$watch('show', value => {
    if (value) {
        document.body.classList.add('overflow-hidden');
        setTimeout(() => firstFocusable().focus(), 100);
    } else {
        document.body.classList.remove('overflow-hidden');
    }
})"
    x-on:open-modal.window="
        if ($event.detail && typeof $event.detail === 'object') {
            if ($event.detail.name === '{{ $name }}') {
                show = true;
                if ($event.detail.selectedPurpose) {
                    selectedPurpose = $event.detail.selectedPurpose;
                }
            }
        } else if ($event.detail === '{{ $name }}') {
            show = true;
        }
    "
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null" x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
    class="fixed inset-0 overflow-y-auto sm:px-4 sm:py-6 z-[10001]" style="display: {{ $show ? 'block' : 'none' }};">

    <!-- Backdrop -->
    <div x-show="show" class="fixed inset-0 bg-black bg-opacity-50 transition-opacity" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    </div>

    <!-- Modal -->
    <div x-show="show" class="relative min-h-screen flex items-center justify-center p-0 md:p-4"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">

        <div class="relative bg-white rounded-2xl sm:rounded-2xl shadow-xl w-screen h-dvh sm:h-auto sm:max-w-2xl mx-auto overflow-hidden">
            <!-- Header -->
            <div class="relative bg-gradient-to-r from-primary-gt to-secondary-gt px-6 py-5">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-white">{{ __('Get In Touch With Us') }}</h2>
                    <button @click="show = false"
                        class="w-9 h-9 flex items-center justify-center text-white hover:bg-white hover:bg-opacity-20 rounded-full transition-colors duration-200">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6 max-h-[calc(100dvh-9.5rem)] sm:max-h-[calc(100vh-16rem)] overflow-y-auto custom-scrollbar">
                <form id="contact-form" @submit.prevent="submitForm()">
                    @csrf

                    <!-- Required field notice -->
                    <div class="mb-6 flex items-center gap-2 text-sm text-gray-600">
                        <i class="fas fa-info-circle text-primary-gt"></i>
                        <span>{{ __('Fields marked with * are required') }}</span>
                    </div>

                    <!-- Form Grid -->
                    <div class="space-y-4">
                        <!-- Row 1: Name and Phone -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="fullname-input" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Full name') }} <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="fullname-input" name="name" x-ref="name"
                                    class="w-full px-4 py-2.5 border border-border-gray rounded-lg focus:ring-2 focus:ring-primary-gt focus:border-transparent transition-all duration-200"
                                    placeholder="{{ __('Enter your full name') }}">
                            </div>
                            <div>
                                <label for="phone-number-input" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Phone number') }}
                                </label>
                                <input type="text" id="phone-number-input" name="phone" x-ref="phone"
                                    class="w-full px-4 py-2.5 border border-border-gray rounded-lg focus:ring-2 focus:ring-primary-gt focus:border-transparent transition-all duration-200"
                                    placeholder="{{ __('Enter your phone number') }}">
                            </div>
                        </div>

                        <!-- Row 2: Company and Email -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="company-name-input" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Company name') }}
                                </label>
                                <input type="text" id="company-name-input" name="company" x-ref="company_name"
                                    class="w-full px-4 py-2.5 border border-border-gray rounded-lg focus:ring-2 focus:ring-primary-gt focus:border-transparent transition-all duration-200"
                                    placeholder="{{ __('Enter your company name') }}">
                            </div>
                            <div>
                                <label for="email-input" class="block text-sm font-medium text-gray-700 mb-1">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email-input" name="email" x-ref="email"
                                    class="w-full px-4 py-2.5 border border-border-gray rounded-lg focus:ring-2 focus:ring-primary-gt focus:border-transparent transition-all duration-200"
                                    placeholder="{{ __('Enter your email') }}">
                            </div>
                        </div>

                        <!-- Solution Selection -->
                        <div>
                            <x-basic-select :label="__('Select solution')" :value="1" x-model="selectedPurpose"
                                class="w-full" />
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message-input" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('Message') }}
                            </label>
                            <textarea id="message-input" name="message" x-ref="message" rows="4"
                                class="w-full px-4 py-2.5 border border-border-gray rounded-lg focus:ring-2 focus:ring-primary-gt focus:border-transparent transition-all duration-200"
                                placeholder="{{ __('Tell us more about your needs') }}..."></textarea>
                        </div>

                        <!-- Policy Section -->
                        <div class="mt-6">
                            <h3 class="font-medium text-gray-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-shield-alt text-primary-gt"></i>
                                {{ __('Privacy Policy') }}
                            </h3>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                                    <span>{{ __('Your information will not be shared') }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                                    <span>{{ __('Information is used for product contact purposes') }}</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                                    <span>{{ __('Please do not send multiple requests, the system will block if spam messages are detected') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-6 py-4 border-t border-bg-gray">
                <div class="flex justify-end gap-3">
                    <button type="button" @click="show = false"
                        class="px-6 py-2.5 border border-border-gray text-gray-700 rounded-lg hover:bg-gray-100 transition-colors duration-200 font-medium">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" form="contact-form" :disabled="isLoading"
                        class="px-6 py-2.5 bg-primary-gt text-white rounded-lg hover:bg-secondary-gt transition-all duration-200 font-medium disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-2">
                        <span x-show="!isLoading">{{ __('Submit') }}</span>
                        <span x-show="isLoading" class="flex items-center gap-2">
                            <i class="fas fa-spinner fa-spin"></i>
                            {{ __('Submitting') }}...
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>