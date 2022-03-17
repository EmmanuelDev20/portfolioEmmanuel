<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl w-11/12 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}">
                <x-jet-application-mark />
            </a>
            <!-- Navigation Links -->
            <div class="flex gap-6">
                <x-jet-nav-link class="font-semibold hidden sm:flex text-darkBlue hover:bg-red" href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('HOME') }}
                </x-jet-nav-link>
                <x-jet-nav-link class="font-semibold hidden sm:flex text-darkBlue hover:bg-red" href="#about">
                    {{ __('ABOUT ME') }}
                </x-jet-nav-link>
                <x-jet-nav-link class="font-semibold hidden sm:flex text-darkBlue hover:bg-red" href="#projects">
                    {{ __('PROJECTS') }}
                </x-jet-nav-link>
                <x-jet-nav-link class="font-semibold hidden sm:flex text-darkBlue hover:bg-red" href="#technologies">
                    {{ __('TECHNOLOGIES') }}
                </x-jet-nav-link>
                <x-jet-nav-link class="font-semibold hidden sm:flex text-darkBlue hover:bg-red border-2 border-redOne rounded-full px-6 pb-1 hover:bg-redOne hover:text-white" href="#contact">
                    {{ __('CONTACT') }}
                </x-jet-nav-link>
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#about">
                {{ __('About me') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#projects">
                {{ __('Projects') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#technologies">
                {{ __('Technologies') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="#contact">
                {{ __('Contact') }}
            </x-jet-responsive-nav-link>
        </div>
    </div>
</nav>