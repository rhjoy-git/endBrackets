<nav x-data="{ isOpen: false, isScrolled: false }" @scroll.window="isScrolled = window.pageYOffset > 15"
    class="top-0 bg-primary dark:bg-primary-dark fixed max-w-full w-full z-50 transition-all duration-50 container lg:py-4 lg:px-20"
    :class="{ 'bg-opacity-100 backdrop-blur shadow-md': isScrolled }">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 md:py-1">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('resources/img/Logo.png')}}" alt="End Brackets Logo" class="h-12 w-auto">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 text-base">
                <a href="#works" class="text-neutral-900 hover:text-blue transition">Works</a>
                <a href="#about" class="text-neutral-900 hover:text-blue transition">About</a>
                <a href="#services" class="text-neutral-900 hover:text-blue transition">Services</a>
                <a href="#contact" class="text-neutral-900 hover:text-blue transition">Contact</a>
                <a href="#career" class="text-neutral-900 hover:text-blue transition">Career</a>
                <button class="bg-button text-white px-6 py-2 h-[60px] w-[150px] hover:bg-blue-dark transition">
                    Hire Us
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-neutral-900 hover:text-blue focus:outline-none"
                    aria-controls="mobile-menu" :aria-expanded="isOpen">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden" x-show="isOpen" @click.away="isOpen = false" x-collapse>
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#works" class="block text-neutral-900 hover:text-blue px-3 py-2">Works</a>
            <a href="#about" class="block text-neutral-900 hover:text-blue px-3 py-2">About</a>
            <a href="#services" class="block text-neutral-900 hover:text-blue px-3 py-2">Services</a>
            <a href="#contact" class="block text-neutral-900 hover:text-blue px-3 py-2">Contact</a>
            <a href="#career" class="block text-neutral-900 hover:text-blue px-3 py-2">Career</a>
            <button class="w-full bg-blue text-white px-6 py-2 rounded-full hover:bg-blue-dark transition">
                Hire Us
            </button>
        </div>
    </div>
</nav>