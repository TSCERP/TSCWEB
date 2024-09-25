@props(['label', 'value'])

<div x-data="{
    open: false,
    value: {{ $value }},
    selectedPurpose: {{ $value }},
    purposeOptions: [],
    onButtonClick() { this.open = !this.open },
    choose(id) {
        this.value = id;
        this.selectedPurpose = id;
        this.open = false;
        $dispatch('purpose-selected', id);
    },
    fetchPurposeOptions() {
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
                if (data.errors) {
                    console.log(data.errors);
                    alert('Có lỗi xảy ra.');
                } else {
                    this.purposeOptions = data;
                }
            })
            .catch(error => console.error('Error:', error));
    },
    init() {
        this.value = {{ $value }};
        this.fetchPurposeOptions();
    }
}" x-init="init()">
    <label class="block text-sm leading-5 font-medium text-gray-700">{{ $label }}</label>
    <div class="relative">
        <span class="inline-block w-full rounded-md shadow-sm">
            <button x-ref="button" @click="onButtonClick()" type="button" aria-haspopup="listbox" :aria-expanded="open"
                aria-labelledby="assigned-to-label"
                class="cursor-default relative w-full rounded-md border border-border-gray bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                <div class="flex items-center space-x-3">
                    <span x-text="purposeOptions.find(option => option.id === value)?.description"
                        class="block truncate"></span>
                </div>
                <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </button>
        </span>
        <div x-show="open" @click.away="open = false" class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
            <ul x-ref="listbox" tabindex="-1" role="listbox"
                class="max-h-56 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">
                <template x-for="option in purposeOptions" :key="option.id">
                    <li @click="choose(option.id)" @mouseenter="selectedPurpose = option.id"
                        @mouseleave="selectedPurpose = null"
                        :class="{
                            'text-white bg-indigo-600': selectedPurpose === option.id,
                            'text-gray-900': !(selectedPurpose === option.id)
                        }"
                        class="text-gray-900 cursor-default select-none relative py-2 pl-4 pr-9">
                        <div class="flex items-center space-x-3">
                            <span
                                :class="{ 'font-semibold': value === option.id, 'font-normal': !(value === option.id) }"
                                class="font-normal block truncate" x-text="option.description"></span>
                        </div>
                        <span x-show="value === option.id"
                            :class="{ 'text-white': selectedPurpose === option.id, 'text-indigo-600': !(selectedPurpose ===
                                    option.id) }"
                            class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>
