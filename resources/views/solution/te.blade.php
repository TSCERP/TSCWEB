<x-app-layout>

    <section>
        <div class="relative overflow-hidden">
            <div class="bg-white pt-10 pb-14 sm:pt-16 lg:overflow-hidden lg:pt-24 lg:pb-24">
                <div class="mx-auto max-w-5xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                        <div class="mx-auto max-w-md px-4 text-center sm:max-w-2xl sm:px-6 lg:flex lg:items-center lg:px-0 lg:text-left">
                            <div class="lg:py-24">
                                <h1 class="mt-4 text-4xl font-bold tracking-tight text-black sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl"><span class="block text-pink-500">Travel & Expense </span><span class="block text-black">Management</span></h1>
                                <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Our Website will launch soon. Join the waitlist to try the beta before it's publicly available.</p>
                                <div class="mt-10 sm:mt-12">

                                    <!-- This is a working waitlist form. Create your access key from https://web3forms.com/s to setup.  -->
                                    <form class="sm:mx-auto sm:max-w-xl lg:mx-0" action="https://api.web3forms.com/submit">
                                        <div class="sm:flex">
                                            <input type="hidden" name="access_key" value="YOUR_ACCESS_KEy_HERE">
                                            <input type="hidden" name="subject" value="New Waitlist">
                                            <div class="min-w-0 flex-1"><label for="email" class="sr-only">Email address</label><input id="email" type="email" placeholder="Enter your email" class="block w-full rounded-md border-0 bg-gray-200 px-4 py-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-400" value="" autocomplete="off" /></div>
                                            <div class="mt-3 sm:mt-0 sm:ml-3"><button type="submit" class="block w-full rounded-md bg-pink-500 py-3 px-4 font-medium text-white shadow hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2 focus:ring-offset-gray-900">Join Waitlist</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 hidden lg:block"><img class="" src="https://user-images.githubusercontent.com/1884712/202186141-9f8a93e1-7743-459a-bc95-b1d826931624.png" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    <script>
        console.log('Hello from the coming soon of the page!');
    </script>
    @endpush

</x-app-layout>
