<div x-data="{
    show: @js($show),
    purpose: @js($defaultPurpose),
    purposeOptions: [],
    selectedPurpose: 1,
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
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null" x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
    x-on:purpose-selected.window="selectedPurpose = $event.detail" {{-- x-on:submit.prevent="submitForm()" --}}
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50 w-screen h-screen"
    style="display: {{ $show ? 'block' : 'none' }};">
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-black opacity-60"></div>
    </div>

    <div x-show="show"
        class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto
               max-h-[calc(100vh-4rem)] max-w-full w-full mx-auto modal-container relative">
        <div class="fixed top-0 left-0 flex justify-between items-center w-full h-fit bg-white px-4 py-2 z-10 shadow">
            <div class="flex gap-3 items-center justify-center">
                <h2 class="text-lg font-semibold text-gray-800">{{ __('Get In Touch With Us') }}</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" color="currentColor">
                        <path
                            d="M13 2.047A11 11 0 0 0 12 2C6.478 2 2 6.284 2 11.567c0 2.538 1.033 4.845 2.719 6.556c.371.377.619.892.519 1.422a5.3 5.3 0 0 1-1.087 2.348a6.5 6.5 0 0 0 4.224-.657c.454-.241.681-.362.842-.386s.39.018.848.104c.638.12 1.286.18 1.935.18c4.83 0 9.065-3.277 10-7.634M11.996 12h.008M8 12h.009m12.175-8.21c0 .99-.785 1.792-1.753 1.792s-1.753-.802-1.753-1.791c0-.99.785-1.791 1.753-1.791s1.753.802 1.753 1.79" />
                        <path
                            d="M14.964 9.396c.928-1.459 2.401-2.005 3.467-2.004s2.495.545 3.423 2.004c.06.095.076.21.022.309c-.217.393-.89 1.173-1.377 1.226c-.558.06-2.02.069-2.067.069c-.046 0-1.554-.009-2.113-.07c-.486-.052-1.16-.832-1.377-1.225a.3.3 0 0 1 .022-.309" />
                    </g>
                </svg>
            </div>
            <button @click="show = false"
                class="px-2.5 rounded-full aspect-1 text-gray-600 hover:text-white hover:bg-[#0000002f] text-xl ease duration-150">
                &times;
            </button>
        </div>
        <div class="relative max-h-[calc(100vh-4rem)] h-auto overflow-y-scroll p-4">
            <form class="my-[40px] mb-[45px]" action="#" method="POST" @submit.prevent="submitForm()"
                id="contact-form">
                @csrf
                <div class="mb-4">
                    <span class="text-red-500 text-sm font-semibold mb-4">* {{ __('Required field') }}</span>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="fullname-input"
                            class="block text-gray-700 text-sm font-medium">{{ __('Full name') }}:
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="fullname-input" name="name" x-ref="name"
                            class="w-full px-3 py-2 border rounded-md text-sm border-border-gray focus:border-border-main rounded-lg focus:outline-none">
                    </div>
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="phone-number-input"
                            class="block text-gray-700 text-sm font-medium">{{ __('Phone number') }}:</label>
                        <input type="text" id="phone-number-input" name="phone" x-ref="phone"
                            class="w-full px-3 py-2 border rounded-md text-sm border-border-gray focus:border-border-main rounded-lg focus:outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="company-name-input"
                            class="block text-gray-700 text-sm font-medium">{{ __('Company name') }}:</label>
                        <input type="text" id="company-name-input" name="company" x-ref="company_name"
                            class="w-full px-3 py-2 border rounded-md text-sm border-border-gray focus:border-border-main rounded-lg focus:outline-none">
                    </div>
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="email-input" class="block text-gray-700 text-sm font-medium">Email:
                            <span class="text-red-500">*</span></label>
                        <input type="email" id="email-input" name="email" x-ref="email"
                            class="w-full px-3 py-2 border rounded-md text-sm border-border-gray focus:border-border-main rounded-lg focus:outline-none">
                    </div>
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <x-basic-select label="{{ __('Select solution') }}:" :value="1" />
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="message-input"
                        class="block text-gray-700 text-sm font-medium">{{ __('Message') }}:</label>
                    <textarea id="message-input" name="message" x-ref="message" class="w-full px-3 py-2 border rounded-md border-border-gray focus:border-border-main rounded-lg focus:outline-none"></textarea>
                </div>
                <div class="mt-3 mb-4">
                    <p class="font-semibold text-sm">{{ __('Policy') }}:</p>
                    <ul class="list-disc">
                        <li class="text-sm ml-6">{{ __('Your information will not be shared') }}.</li>
                        <li class="text-sm ml-6">{{ __('Information is used for product contact purposes') }}.</li>
                        <li class="text-sm ml-6">
                            {{ __('Please do not send multiple requests, the system will block if spam messages are detected') }}.
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="fixed bottom-0 left-0 flex justify-between items-center w-full h-fit bg-white px-4 py-2 z-10">
            <button type="submit"
                class="text-white bg-bg-btn px-4 py-2 w-full h-8 rounded font-bold flex justify-center items-center"
                :disabled="isLoading" x-bind:class="isLoading ? 'opacity-50 cursor-not-allowed' : ''"
                form="contact-form">
                <span x-show="!isLoading">{{ __('Submit') }}</span>

                <div x-show="isLoading" class="flex space-x-1">
                    <span class="block h-2 w-2 bg-white rounded-full animate-bounce [animation-delay:-0.2s]"></span>
                    <span class="block h-2 w-2 bg-white rounded-full animate-bounce [animation-delay:-0.1s]"></span>
                    <span class="block h-2 w-2 bg-white rounded-full animate-bounce"></span>
                </div>
            </button>
        </div>
    </div>
</div>
