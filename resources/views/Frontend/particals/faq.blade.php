<section class="py-16 bg-primary dark:bg-primary-dark lg:py-24 lg:px-16" x-data="{ isOpen: false }">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-12 overflow-hidden">
        <!-- Header -->
        <div class="mb-12 text-left">
            <h2 class="2xl:text-base text-base font-semibold text-head-color mb-4 leading-5 tracking-[2px] uppercase">FAQ
                —</h2>
            <p class="2xl:text-[56px] 2xl:leading-[60px] text-3xl text-left text-content-color font-normal lowercase">Here are the
                answers you're looking for.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- FAQ Items (Left Column) -->
            <div class="lg:col-span-2 space-y-4">
                <!-- FAQ Item 1 (Open by default) -->
                <div x-data="{ open: true }"
                    class="bg-neutral-100 p-6 shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.01</span>
                            <span
                                class="text-2xl font-medium text-content-color group-hover:text-button transition-colors truncate">
                                What services does End Brackets offer?
                            </span>
                        </div>
                        <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-200 shrink-0"
                            :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-transition:enter.duration.300ms x-transition:leave.duration.200ms
                        class="ml-12 pr-8 pt-4">
                        <p class="text-faq-color text-[18px] leading-7 w-11/12">
                            We specialize in UI/UX design, SaaS design, web development, and visual design.
                            Whether you need a stunning website, a high-performing SaaS platform, or engaging visuals,
                            we've got you covered.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ open: false }"
                    class="bg-neutral-100 p-6 shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.02</span>
                            <span
                                class="text-2xl font-medium text-content-color group-hover:text-button transition-colors truncate">
                                Do you work with startups or only established businesses?
                            </span>
                        </div>
                        <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-200 shrink-0"
                            :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-transition:enter.duration.300ms x-transition:leave.duration.200ms
                        class="ml-12 pr-8 pt-4">
                        <p class="text-faq-color text-[18px] leading-7 w-11/12">
                            We work with both startups and established businesses to create impactful digital solutions.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ open: false }"
                    class="bg-neutral-100 p-6 shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.03</span>
                            <span
                                class="text-2xl font-medium text-content-color group-hover:text-button transition-colors truncate">
                                How do you price your projects?
                            </span>
                        </div>
                        <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-200 shrink-0"
                            :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-transition:enter.duration.300ms x-transition:leave.duration.200ms
                        class="ml-12 pr-8 pt-4">
                        <p class="text-faq-color text-[18px] leading-7 w-11/12">
                            Our pricing depends on project scope, complexity, and timeline. We offer flexible packages
                            for different needs.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div x-data="{ open: false }"
                    class="bg-neutral-100 p-6 shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.04</span>
                            <span
                                class="text-2xl font-medium text-content-color group-hover:text-button transition-colors truncate">
                                Can I request a custom design or development project?
                            </span>
                        </div>
                        <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-200 shrink-0"
                            :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-transition:enter.duration.300ms x-transition:leave.duration.200ms
                        class="ml-12 pr-8 pt-4">
                        <p class="text-faq-color text-[18px] leading-7 w-11/12">
                            Absolutely! We offer fully customized design and development services tailored to your
                            specific needs and brand identity.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Box (Right Column) -->
            <div class="lg:col-span-1">
                <div class="bg-neutral-100 p-8  shadow-lg border border-gray-100 lg:sticky lg:top-8">
                    <div class="mb-6 flex justify-start">
                        <div class="w-20 h-20 rounded-full flex items-center justify-center">
                            
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-content-color mb-4">Have any questions?</h3>
                    <p class="text-content-color mb-6">
                        Meet our support team at End Brackets. We're here to help 24/7 with any inquiries
                        or assistance you might need. Don't hesitate to reach out - we're always ready to assist!
                    </p>
                    <button @click="isOpen = true" class="w-full bg-button text-white px-8 py-3 rounded-lg hover:bg-[#4a47ba] transition-all 
                                transform hover:-translate-y-0.5 shadow-sm hover:shadow-md">
                        Ask your question
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup Modal - Now in the same Alpine component -->
    <div x-show="isOpen" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">

        <!-- Modal Container -->
        <div @click.away="isOpen = false" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="bg-white  shadow-xl w-full max-w-md overflow-hidden">

            <!-- Modal Header -->
            <div class="bg-button p-6">
                <h3 class="text-2xl font-bold text-white">Ask Your Question</h3>
                <p class="text-white opacity-80 mt-1">We'll get back to you soon</p>
            </div>

            <!-- Modal Content -->
            <div class="p-6 space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                    <input type="text" id="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-button focus:border-transparent">
                </div>

                <div>
                    <label for="contact" class="block text-sm font-medium text-gray-700 mb-1">Contact Number</label>
                    <input type="tel" id="contact"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-button focus:border-transparent">
                </div>

                <div>
                    <label for="question" class="block text-sm font-medium text-gray-700 mb-1">Your Question</label>
                    <textarea id="question" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-button focus:border-transparent"></textarea>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="bg-gray-50 px-6 py-4 flex justify-end space-x-3">
                <button @click="isOpen = false"
                    class="px-4 py-2 text-gray-600 hover:text-gray-800 font-medium rounded-lg">
                    Cancel
                </button>
                <button
                    class="px-6 py-2 bg-button text-white font-medium rounded-lg hover:bg-[#4a47ba] transition-colors">
                    Submit
                </button>
            </div>
        </div>
    </div>
</section>

<script src="//unpkg.com/alpinejs" defer></script>