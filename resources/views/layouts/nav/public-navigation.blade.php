<nav x-data="{ open: false }" class="bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <p class="text-white font-bold text-xl tracking-widest uppercase hover:text-gray-300">Youssef Selk</p>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                    {{ __('Home') }}
                </a>
                <a href="{{ route('about') }}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                    {{ __('About') }}
                </a>
                <a href="{{ route('portfolio') }}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                    {{ __('Portfolio') }}
                </a>
                <a href="{{ route('contact') }}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                    {{ __('Contact') }}
                </a>
            </div>

            <!-- Hamburger Menu -->
            <div class="flex sm:hidden">
                <button @click="open = ! open" class="text-white hover:text-gray-300 focus:outline-none focus:text-gray-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block text-white hover:text-gray-300 px-3 py-2 rounded-md text-base font-medium">
                {{ __('Home') }}
            </a>
            <a href="{{ route('about') }}" class="block text-white hover:text-gray-300 px-3 py-2 rounded-md text-base font-medium">
                {{ __('About') }}
            </a>
            <a href="{{ route('portfolio') }}" class="block text-white hover:text-gray-300 px-3 py-2 rounded-md text-base font-medium">
                {{ __('Portfolio') }}
            </a>
            <a href="{{ route('contact') }}" class="block text-white hover:text-gray-300 px-3 py-2 rounded-md text-base font-medium">
                {{ __('Contact') }}
            </a>
        </div>
    </div>
</nav>
