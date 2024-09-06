<div x-data="{
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
}" x-init="$watch('show', value => {
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
            <button @click="show = false" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900">
                &times;
            </button>
            <h2 class="text-lg font-semibold text-gray-800">Liên Hệ Với Chúng Tôi</h2>
        </div>
        <div class="relative max-h-[calc(100vh-4rem)] h-auto overflow-y-scroll p-4">
            <form class="my-[45px]" action="#" method="POST" @submit.prevent="validateForm()">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="name" class="block text-gray-700 text-sm font-medium">Họ và tên:
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" x-ref="name"
                            class="w-full px-3 py-2 border rounded text-sm border-border-gray">
                    </div>
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="phone" class="block text-gray-700 text-sm font-medium">Số điện thoại:</label>
                        <input type="text" id="phone" name="phone" x-ref="phone"
                            class="w-full px-3 py-2 border rounded text-sm border-border-gray">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="company_name" class="block text-gray-700 text-sm font-medium">Tên công ty:
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="company_name" name="company_name"
                            class="w-full px-3 py-2 border rounded text-sm border-border-gray">
                    </div>
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="email" class="block text-gray-700 text-sm font-medium">Email:
                            <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" x-ref="email"
                            class="w-full px-3 py-2 border rounded text-sm border-border-gray">
                    </div>
                </div>
                <div class="mb-4 flex flex-col gap-2">
                    <x-basic-select :options="[
                        'Giải pháp SAP Business One',
                        'Giải pháp Oracle Netsuite',
                        'Báo cáo Power BI',
                        'Giải pháp quản lý sản xuất Beas',
                    ]" label="Chọn yêu cầu" :value="1" />
                </div>

                <div class="mb-8">
                    <label for="message" class="block text-gray-700 text-sm font-medium">Lời nhắn:</label>
                    <textarea id="message" name="message" class="w-full px-3 py-2 border rounded"></textarea>
                </div>
            </form>
        </div>
        <div class="fixed bottom-0 left-0 flex justify-between items-center w-full h-fit bg-white px-4 py-2 z-10">
            {{-- <div class="text-right"> --}}
            <button type="submit" class="text-white bg-text-main px-4 py-2 w-full rounded">Submit</button>
            {{-- </div> --}}
        </div>
    </div>
</div>
