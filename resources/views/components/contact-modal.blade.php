@props(['name', 'show' => true, 'maxWidth' => '2xl', 'defaultPurpose' => null])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        purpose: @js($defaultPurpose),
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
            const purpose = this.$refs.purpose.value;
            const solution = this.$refs.solution.value;
            const phone = this.$refs.phone.value;
            const email = this.$refs.email.value;

            if (!name || !purpose || !solution) {
                alert('Họ và tên, Mục đích, và Chọn giải pháp là bắt buộc.');
                return false;
            }
            if (!phone && !email) {
                alert('Cần ít nhất SĐT hoặc Email.');
                return false;
            }
            return true;
        }
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            setTimeout(() => firstFocusable().focus(), 100);
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        <div class="relative px-8 py-4">
            <button @click="show = false" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900">
                &times;
            </button>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Contact Us</h2>
            <form action="#" method="POST" @submit.prevent="validateForm()">
                @csrf
                <div class="mb-4 flex flex-col gap-2">
                    <label for="purpose" class="block text-gray-700">Mục đích:</label>
                    <select id="purpose" name="purpose" x-ref="purpose" class="w-full px-3 py-2 border rounded">
                        <option value="">Chọn mục đích</option>
                        <option value="Đăng ký dùng thử" :selected="purpose === 'Đăng ký dùng thử'">Đăng ký dùng thử</option>
                        <option value="Đăng ký demo" :selected="purpose === 'Đăng ký demo'">Đăng ký demo</option>
                        <option value="Liên hệ thêm thông tin" :selected="purpose === 'Liên hệ thêm thông tin'">Liên hệ thêm thông tin</option>
                    </select>
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="name" class="block text-gray-700">Họ và tên:</label>
                    <input type="text" id="name" name="name" x-ref="name" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="company_name" class="block text-gray-700">Tên công ty:</label>
                    <input type="text" id="company_name" name="company_name" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="company_size" class="block text-gray-700">Lựa chọn quy mô công ty:</label>
                    <select id="company_size" name="company_size" class="w-full px-3 py-2 border rounded">
                        <!-- Add your options here -->
                    </select>
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="phone" class="block text-gray-700">SĐT:</label>
                    <input type="text" id="phone" name="phone" x-ref="phone" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" x-ref="email" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="solution" class="block text-gray-700">Chọn giải pháp:</label>
                    <select id="solution" name="solution" x-ref="solution" class="w-full px-3 py-2 border rounded">
                        <option value="">Chọn giải pháp</option>
                        <option value="SAP Business One">SAP Business One</option>
                        <option value="Oracle NetSuite">Oracle NetSuite</option>
                        <option value="Dashboard Reporting">Dashboard Reporting</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <label for="message" class="block text-gray-700">Lời nhắn:</label>
                    <textarea id="message" name="message" class="w-full px-3 py-2 border rounded"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
