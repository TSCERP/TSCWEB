<x-app-layout>
    @section('title', __('Travel & Expense Management') . ' | Grant Thornton TSC')

    <section class="relative min-h-screen bg-gradient-to-br from-pink-50 via-white to-purple-50 overflow-hidden">
        <!-- Background decorations -->
        <div class="absolute inset-0">
            <div class="absolute top-20 right-20 w-64 h-64 bg-pink-200 opacity-20 rounded-full animate-float"></div>
            <div class="absolute bottom-20 left-20 w-48 h-48 bg-purple-200 opacity-20 rounded-full animate-float"
                style="animation-delay: -3s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-100 opacity-10 rounded-full animate-float"
                style="animation-delay: -6s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-44 pb-20">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <div class="mb-8">
                        <span
                            class="inline-block bg-pink-100 text-pink-600 px-6 py-3 rounded-full text-lg font-semibold mb-6"
                            data-aos="fade-up">
                            {{ __('Coming Soon') }}
                        </span>
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight" data-aos="fade-up"
                            data-aos-delay="100">
                            <span class="block text-pink-500">{{ __('Travel & Expense') }}</span>
                            <span class="block text-gray-900">{{ __('Management') }}</span>
                        </h1>
                        <p class="mt-6 text-xl text-gray-600 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                            {{ __('Revolutionize your business travel and expense management with our intelligent platform.') }}
                            <span class="text-pink-500 font-semibold">{{ __('Join the waitlist') }}</span>
                            {{ __('to be the first to experience the future of expense tracking.') }}
                        </p>
                    </div>

                    <!-- Features Preview -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-receipt text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('Smart Receipt Scanning') }}</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-plane text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('Trip Planning & Booking') }}</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('Admin Dashboard') }}</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('Mobile-First Design') }}</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-indigo-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-route text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('Trip Management') }}</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-cogs text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('Advanced Analytics') }}</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-shield-alt text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('Security & Compliance') }}</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-white bg-opacity-60 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-robot text-white"></i>
                            </div>
                            <span class="font-medium text-gray-800">{{ __('AI-Powered Automation') }}</span>
                        </div>
                    </div>

                    <!--  Form -->
                    <!-- Statistics Section -->
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8" data-aos="fade-up"
                        data-aos-delay="400">
                        <!-- Stat 1 -->
                        <div
                            class="text-center bg-white bg-opacity-80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white border-opacity-50">
                            <div class="text-4xl font-bold text-pink-500 mb-2">500+</div>
                            <div class="text-sm text-gray-600 font-medium">{{ __('Companies Waiting') }}</div>
                        </div>

                        <!-- Stat 2 -->
                        <div
                            class="text-center bg-white bg-opacity-80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white border-opacity-50">
                            <div class="text-4xl font-bold text-purple-500 mb-2">95%</div>
                            <div class="text-sm text-gray-600 font-medium">{{ __('Time Savings') }}</div>
                        </div>

                        <!-- Stat 3 -->
                        <div
                            class="text-center bg-white bg-opacity-80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white border-opacity-50">
                            <div class="text-4xl font-bold text-green-500 mb-2">$2M+</div>
                            <div class="text-sm text-gray-600 font-medium">{{ __('Expenses Processed') }}</div>
                        </div>

                        <!-- Stat 4 -->
                        <div
                            class="text-center bg-white bg-opacity-80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white border-opacity-50">
                            <div class="text-4xl font-bold text-blue-500 mb-2">99.9%</div>
                            <div class="text-sm text-gray-600 font-medium">{{ __('Uptime Guarantee') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Interactive Preview -->
                <div class="mb-8 lg:mt-0" data-aos="fade-left" data-aos-delay="500">
                    <div class="relative">
                        <!-- Main Device Mockup -->
                        <div class="relative mx-auto w-full max-w-md">
                            <div class="relative bg-gray-900 rounded-3xl p-2 shadow-2xl">
                                <div class="bg-white rounded-2xl overflow-hidden">
                                    <!-- Phone Header -->
                                    <div class="bg-gradient-to-r from-pink-500 to-purple-600 px-6 py-4">
                                        <div class="flex items-center justify-between text-white">
                                            <h4 class="font-semibold">{{ __('T&E Manager') }}</h4>
                                            <div class="flex space-x-1">
                                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                                <div class="w-2 h-2 bg-white bg-opacity-60 rounded-full"></div>
                                                <div class="w-2 h-2 bg-white bg-opacity-60 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- App Content -->
                                    <div class="p-6 space-y-4">
                                        <div class="flex items-center justify-between">
                                            <h5 class="font-semibold text-gray-900">{{ __('Recent Expenses') }}</h5>
                                            <span class="text-sm text-pink-500 font-medium">{{ __('View All') }}</span>
                                        </div>

                                        <!-- Tab Navigation -->
                                        <div class="flex space-x-1 mb-4 bg-gray-100 rounded-lg p-1">
                                            <button
                                                class="mobile-tab-btn active flex-1 py-2 px-3 rounded-md text-sm font-medium transition-all"
                                                data-tab="expenses">
                                                {{ __('Expenses') }}
                                            </button>
                                            <button
                                                class="mobile-tab-btn flex-1 py-2 px-3 rounded-md text-sm font-medium transition-all"
                                                data-tab="trips">
                                                {{ __('Trips') }}
                                            </button>
                                            <button
                                                class="mobile-tab-btn flex-1 py-2 px-3 rounded-md text-sm font-medium transition-all"
                                                data-tab="dashboard">
                                                {{ __('Dashboard') }}
                                            </button>
                                            <button
                                                class="mobile-tab-btn flex-1 py-2 px-3 rounded-md text-sm font-medium transition-all"
                                                data-tab="reports">
                                                {{ __('Reports') }}
                                            </button>
                                        </div>

                                        <!-- Expenses Tab -->
                                        <div id="expenses-tab" class="mobile-tab-content">
                                            <div class="space-y-3 animate-fadeIn">
                                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                                    <div
                                                        class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-plane text-blue-600"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-gray-900">{{ __('Flight to NYC') }}
                                                        </p>
                                                        <p class="text-sm text-gray-500">{{ __('Business Travel') }}
                                                        </p>
                                                    </div>
                                                    <span class="font-semibold text-gray-900">$450</span>
                                                </div>

                                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                                    <div
                                                        class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-utensils text-green-600"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-gray-900">{{ __('Client Dinner') }}
                                                        </p>
                                                        <p class="text-sm text-gray-500">
                                                            {{ __('Meals & Entertainment') }}</p>
                                                    </div>
                                                    <span class="font-semibold text-gray-900">$85</span>
                                                </div>

                                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                                    <div
                                                        class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-taxi text-purple-600"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-gray-900">
                                                            {{ __('Airport Transfer') }}</p>
                                                        <p class="text-sm text-gray-500">{{ __('Transportation') }}
                                                        </p>
                                                    </div>
                                                    <span class="font-semibold text-gray-900">$35</span>
                                                </div>
                                            </div>

                                            <!-- Quick Actions -->
                                            <div class="grid grid-cols-2 gap-3 mt-6">
                                                <button
                                                    class="bg-pink-500 text-white py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-camera mr-2"></i>Scan Receipt
                                                </button>
                                                <button
                                                    class="bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-plus mr-2"></i>Add Expense
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Trips Tab -->
                                        <div id="trips-tab" class="mobile-tab-content hidden">
                                            <div class="space-y-3 animate-fadeIn">
                                                <div
                                                    class="flex items-center space-x-3 p-3 bg-blue-50 rounded-lg border border-blue-200 transform hover:scale-105 transition-all duration-200">
                                                    <div
                                                        class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-map-marker-alt text-white"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-gray-900">
                                                            {{ __('NYC Business Trip') }}</p>
                                                        <p class="text-sm text-gray-500">Mar 15-18, 2024</p>
                                                    </div>
                                                    <span
                                                        class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full animate-pulse">{{ __('Active') }}</span>
                                                </div>

                                                <div
                                                    class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg transform hover:scale-105 transition-all duration-200">
                                                    <div
                                                        class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-calendar text-purple-600"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-gray-900">{{ __('LA Conference') }}
                                                        </p>
                                                        <p class="text-sm text-gray-500">Apr 2-5, 2024</p>
                                                    </div>
                                                    <span
                                                        class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">{{ __('Planned') }}</span>
                                                </div>

                                                <div
                                                    class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg transform hover:scale-105 transition-all duration-200">
                                                    <div
                                                        class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-check text-gray-600"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-gray-900">
                                                            {{ __('Chicago Meeting') }}</p>
                                                        <p class="text-sm text-gray-500">Feb 20-22, 2024</p>
                                                    </div>
                                                    <span
                                                        class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ __('Completed') }}</span>
                                                </div>
                                            </div>

                                            <!-- Trip Actions -->
                                            <div class="grid grid-cols-2 gap-3 mt-6">
                                                <button
                                                    class="bg-purple-500 text-white py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-plus mr-2"></i>New Trip
                                                </button>
                                                <button
                                                    class="bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-route mr-2"></i>View All
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Dashboard Tab -->
                                        <div id="dashboard-tab" class="mobile-tab-content hidden">
                                            <div class="space-y-4 animate-fadeIn">
                                                <!-- Stats Grid -->
                                                <div class="grid grid-cols-2 gap-3">
                                                    <div
                                                        class="bg-gradient-to-r from-pink-500 to-purple-600 p-3 rounded-lg text-white transform hover:scale-105 transition-all duration-200">
                                                        <p class="text-xs opacity-90">{{ __('This Month') }}</p>
                                                        <p class="text-lg font-bold">$2,450</p>
                                                    </div>
                                                    <div
                                                        class="bg-gradient-to-r from-blue-500 to-indigo-600 p-3 rounded-lg text-white transform hover:scale-105 transition-all duration-200">
                                                        <p class="text-xs opacity-90">{{ __('Pending') }}</p>
                                                        <p class="text-lg font-bold">$570</p>
                                                    </div>
                                                </div>

                                                <!-- Quick Stats -->
                                                <div class="space-y-2">
                                                    <div class="flex justify-between items-center">
                                                        <span
                                                            class="text-sm text-gray-600">{{ __('Approved') }}</span>
                                                        <span class="text-sm font-medium">85%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                                        <div class="bg-green-500 h-2 rounded-full animate-pulse"
                                                            style="width: 85%">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-y-2">
                                                    <div class="flex justify-between items-center">
                                                        <span
                                                            class="text-sm text-gray-600">{{ __('Budget Used') }}</span>
                                                        <span class="text-sm font-medium">62%</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                                        <div class="bg-blue-500 h-2 rounded-full animate-pulse"
                                                            style="width: 62%">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Recent Activity -->
                                                <div class="space-y-2">
                                                    <h6 class="text-sm font-medium text-gray-900">
                                                        {{ __('Recent Activity') }}</h6>
                                                    <div class="space-y-2">
                                                        <div class="flex items-center space-x-2 text-xs">
                                                            <div
                                                                class="w-2 h-2 bg-green-500 rounded-full animate-ping">
                                                            </div>
                                                            <span
                                                                class="text-gray-600">{{ __('Expense approved') }}</span>
                                                        </div>
                                                        <div class="flex items-center space-x-2 text-xs">
                                                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                                            <span
                                                                class="text-gray-600">{{ __('Trip created') }}</span>
                                                        </div>
                                                        <div class="flex items-center space-x-2 text-xs">
                                                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                                            <span
                                                                class="text-gray-600">{{ __('Receipt uploaded') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dashboard Actions -->
                                            <div class="grid grid-cols-2 gap-3 mt-6">
                                                <button
                                                    class="bg-indigo-500 text-white py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-chart-bar mr-2"></i>Reports
                                                </button>
                                                <button
                                                    class="bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-cog mr-2"></i>Settings
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Reports Tab -->
                                        <div id="reports-tab" class="mobile-tab-content hidden">
                                            <div class="space-y-4 animate-fadeIn">
                                                <!-- Chart Placeholder -->
                                                <div
                                                    class="bg-gradient-to-br from-gray-50 to-gray-100 p-4 rounded-lg border-2 border-dashed border-gray-300">
                                                    <div class="text-center">
                                                        <i class="fas fa-chart-pie text-3xl text-gray-400 mb-2"></i>
                                                        <p class="text-sm text-gray-600 font-medium">Expense Analytics
                                                        </p>
                                                    </div>
                                                </div>

                                                <!-- Report Items -->
                                                <div class="space-y-3">
                                                    <div
                                                        class="flex items-center space-x-3 p-3 bg-green-50 rounded-lg border border-green-200">
                                                        <div
                                                            class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                                            <i class="fas fa-file-excel text-white"></i>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-medium text-gray-900">
                                                                {{ __('Monthly Report') }}</p>
                                                            <p class="text-sm text-gray-500">March 2024</p>
                                                        </div>
                                                        <button class="text-green-600 hover:text-green-800">
                                                            <i class="fas fa-download"></i>
                                                        </button>
                                                    </div>

                                                    <div
                                                        class="flex items-center space-x-3 p-3 bg-blue-50 rounded-lg border border-blue-200">
                                                        <div
                                                            class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                                            <i class="fas fa-chart-line text-white"></i>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-medium text-gray-900">
                                                                {{ __('Trend Analysis') }}</p>
                                                            <p class="text-sm text-gray-500">Q1 2024</p>
                                                        </div>
                                                        <button class="text-blue-600 hover:text-blue-800">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </div>

                                                    <div
                                                        class="flex items-center space-x-3 p-3 bg-purple-50 rounded-lg border border-purple-200">
                                                        <div
                                                            class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center">
                                                            <i class="fas fa-users text-white"></i>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-medium text-gray-900">
                                                                {{ __('Team Summary') }}</p>
                                                            <p class="text-sm text-gray-500">
                                                                {{ __('All Departments') }}</p>
                                                        </div>
                                                        <button class="text-purple-600 hover:text-purple-800">
                                                            <i class="fas fa-share"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Report Actions -->
                                            <div class="grid grid-cols-2 gap-3 mt-6">
                                                <button
                                                    class="bg-orange-500 text-white py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-plus mr-2"></i>New Report
                                                </button>
                                                <button
                                                    class="bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-medium text-sm transform hover:scale-105 transition-all duration-200">
                                                    <i class="fas fa-calendar mr-2"></i>Schedule
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div
                            class="absolute -top-4 -right-4 w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center text-white animate-bounce">
                            <i class="fas fa-star"></i>
                        </div>
                        <div
                            class="absolute -bottom-4 -left-4 w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white animate-pulse">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>

                    <!-- Registration Form -->
                    <div class="mt-8" data-aos="fade-up" data-aos-delay="600">
                        <div class="bg-white rounded-2xl shadow-xl p-6 max-w-md mx-auto">
                            <!-- Form Header -->
                            <div class="text-center mb-6">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-pink-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-rocket text-white text-lg"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('Join the Waitlist') }}</h3>
                                <p class="text-gray-600 text-sm">
                                    {{ __('Be the first to experience the future of expense management') }}</p>
                            </div>

                            <!-- Registration Form -->
                            <form class="space-y-4" id="te-waitlist-form">
                                <!-- Company Name -->
                                <div>
                                    <label for="company_name" class="block text-sm font-medium text-gray-700 mb-1">
                                        {{ __('Company Name') }} *
                                    </label>
                                    <input type="text" id="company_name" name="company_name" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 text-sm"
                                        placeholder="{{ __('Your company name') }}">
                                </div>

                                <!-- Name Fields -->
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">
                                            {{ __('First Name') }} *
                                        </label>
                                        <input type="text" id="first_name" name="first_name" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 text-sm"
                                            placeholder="{{ __('First name') }}">
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">
                                            {{ __('Last Name') }} *
                                        </label>
                                        <input type="text" id="last_name" name="last_name" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 text-sm"
                                            placeholder="{{ __('Last name') }}">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                        {{ __('Business Email') }} *
                                    </label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 text-sm"
                                        placeholder="{{ __('your.email@company.com') }}">
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                                        {{ __('Phone Number') }}
                                    </label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 text-sm"
                                        placeholder="+84 (555) 123-4567">
                                </div>

                                <!-- Company Size -->
                                <div>
                                    <label for="company_size" class="block text-sm font-medium text-gray-700 mb-1">
                                        {{ __('Company Size') }}
                                    </label>
                                    <select id="company_size" name="company_size"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 text-sm">
                                        <option value="">{{ __('Select company size') }}</option>
                                        <option value="1-10">{{ __('1-10 employees') }}</option>
                                        <option value="11-50">{{ __('11-50 employees') }}</option>
                                        <option value="51-200">{{ __('51-200 employees') }}</option>
                                        <option value="201-500">{{ __('201-500 employees') }}</option>
                                        <option value="500+">{{ __('500+ employees') }}</option>
                                    </select>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white py-3 px-4 rounded-lg font-semibold transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    {{ __('Join Waitlist') }}
                                </button>
                                <div class="mt-6 flex items-center justify-center space-x-6 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                        {{ __('Free early access') }}
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-blue-500 mr-2"></i>
                                        {{ __('No spam, ever') }}
                                    </div>
                                </div>
                            </form>

                            <!-- Success Message (Hidden by default) -->
                            <div id="te-success-message" class="hidden text-center py-6">
                                <div
                                    class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-check text-green-500 text-lg"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ __('Thank You!') }}</h3>
                                <p class="text-gray-600 text-sm">
                                    {{ __('You\'ve been added to our waitlist. We\'ll be in touch soon!') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        <script>
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });

            // Add floating animation and tab styles
            const style = document.createElement('style');
            style.textContent = `
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fadeIn {
                animation: fadeIn 0.5s ease-out;
            }
            .mobile-tab-btn.active {
                background-color: white;
                color: #1f2937;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }
            .mobile-tab-btn {
                color: #6b7280;
            }
            .mobile-tab-btn:hover {
                color: #374151;
            }
        `;
            document.head.appendChild(style);

            // Mobile Tab Auto-switching functionality
            let currentTabIndex = 0;
            const tabs = ['expenses', 'trips', 'dashboard', 'reports'];
            let autoSwitchInterval;

            function switchToTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.mobile-tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active class from all buttons
                document.querySelectorAll('.mobile-tab-btn').forEach(btn => {
                    btn.classList.remove('active');
                });

                // Show selected tab content
                const targetTab = document.getElementById(tabName + '-tab');
                if (targetTab) {
                    targetTab.classList.remove('hidden');
                }

                // Add active class to selected button
                const targetBtn = document.querySelector(`[data-tab="${tabName}"]`);
                if (targetBtn) {
                    targetBtn.classList.add('active');
                }
            }

            function startAutoSwitch() {
                autoSwitchInterval = setInterval(() => {
                    currentTabIndex = (currentTabIndex + 1) % tabs.length;
                    switchToTab(tabs[currentTabIndex]);
                }, 3000); // Switch every 3 seconds
            }

            function stopAutoSwitch() {
                if (autoSwitchInterval) {
                    clearInterval(autoSwitchInterval);
                }
            }

            // Initialize tab functionality
            document.addEventListener('DOMContentLoaded', function() {
                // Add click handlers to tab buttons
                document.querySelectorAll('.mobile-tab-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const tabName = this.getAttribute('data-tab');
                        currentTabIndex = tabs.indexOf(tabName);
                        switchToTab(tabName);

                        // Restart auto-switch after manual click
                        // stopAutoSwitch();
                        //  setTimeout(startAutoSwitch, 5000); // Resume after 5 seconds
                    });
                });

                // Start auto-switching
                // startAutoSwitch();

                // Pause auto-switch when hovering over the mockup
                const mockup = document.querySelector('.relative.mx-auto.w-full.max-w-md');
                if (mockup) {
                    mockup.addEventListener('mouseenter', stopAutoSwitch);
                    mockup.addEventListener('mouseleave', startAutoSwitch);
                }
            });

            // Travel & Expense Waitlist Form Handler
            document.getElementById('te-waitlist-form').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = document.getElementById('te-waitlist-form');
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;

                // Combine first and last name for fullname
                const firstName = form.querySelector('#first_name').value;
                const lastName = form.querySelector('#last_name').value;
                const fullname = `${firstName} ${lastName}`.trim();

                let data = {
                    fullname: fullname,
                    email: form.querySelector('#email').value,
                    phone_number: form.querySelector('#phone').value,
                    company_name: form.querySelector('#company_name').value,
                    contact_reason: 10, // Travel & Expense waitlist
                    message: `Company Size: ${form.querySelector('#company_size').value || 'Not specified'}\nInterested in Travel & Expense Management platform - Early Access Request`,
                };

                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                // Validation
                if (!firstName || !lastName) {
                    showToast('warning', 'Please enter your full name');
                    return false;
                }
                if (!data.email) {
                    showToast('warning', 'Please enter your email');
                    return false;
                }
                if (!emailPattern.test(data.email)) {
                    showToast('warning', 'Email is not in correct format');
                    return false;
                }

                // Update button state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Joining Waitlist...';

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
                                throw new Error(data.message || 'Something went wrong, please try again');
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        showToast('success', data.message ||
                            'Successfully joined the waitlist! We\'ll contact you soon.');
                        document.getElementById('te-waitlist-form').reset();

                        // Show success animation
                        submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i>Successfully Joined!';
                        submitBtn.classList.add('bg-green-500');

                        setTimeout(() => {
                            submitBtn.innerHTML = originalText;
                            submitBtn.classList.remove('bg-green-500');
                            submitBtn.disabled = false;
                        }, 3000);
                    })
                    .catch(error => {
                        showToast('error', error.message || 'Something went wrong, please try again');
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    });
            });

            // Toast notification function (if not already defined)
            function showToast(type, message) {
                // Create toast element
                const toast = document.createElement('div');
                toast.className =
                    `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg text-white transform transition-all duration-300 translate-x-full`;

                // Set color based on type
                if (type === 'success') {
                    toast.classList.add('bg-green-500');
                } else if (type === 'error') {
                    toast.classList.add('bg-red-500');
                } else if (type === 'warning') {
                    toast.classList.add('bg-yellow-500');
                }

                toast.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'exclamation-triangle'} mr-2"></i>
                        <span>${message}</span>
                    </div>
                `;

                document.body.appendChild(toast);

                // Animate in
                setTimeout(() => {
                    toast.classList.remove('translate-x-full');
                }, 100);

                // Remove after 5 seconds
                setTimeout(() => {
                    toast.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(toast);
                    }, 300);
                }, 5000);
            }

            console.log('Travel & Expense Management - Waitlist Page Loaded!');
        </script>
    @endpush
</x-app-layout>
