<section class="py-16 bg-primary dark:bg-primary-dark lg:py-28 lg:px-16">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-12 overflow-hidden">
        <!-- Header -->
        <div class="mb-12 text-left">
                <h2 class="text-base md:text-sm font-medium text-gray-900 mb-4 leading-5 tracking-[0.125em] uppercase">FAQ —</h2>
                <p class="text-[56px] leading-[60px] text-left text-neutral-900 font-normal lowercase">Here are the
                    answers you're looking for.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- FAQ Items (Left Column) -->
            <div class="lg:col-span-2 space-y-4">
                <!-- FAQ Item 1 -->
                <div x-data="{ open: false }" class="bg-neutral-100 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.01</span>
                            <span
                                class="text-2xl font-medium text-gray-900 group-hover:text-button transition-colors truncate">
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
                        <p class="text-[#4B5563] text-[18px] leading-7 w-11/12">
                            We specialize in UI/UX design, SaaS design, web development, and visual design.
                            Whether you need a stunning website, a high-performing SaaS platform, or engaging visuals,
                            we've got you covered.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ open: false }"
                    class="bg-neutral-100 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.02</span>
                            <span
                                class="text-2xl font-medium text-gray-900 group-hover:text-button transition-colors truncate">
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
                        <p class="text-[#4B5563] text-[18px] leading-7 w-11/12">
                            We work with both startups and established businesses to create impactful digital solutions.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ open: false }"
                    class="bg-neutral-100 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.03</span>
                            <span
                                class="text-2xl font-medium text-gray-900 group-hover:text-button transition-colors truncate">
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
                        <p class="text-[#4B5563] text-[18px] leading-7 w-11/12">
                            Our pricing depends on project scope, complexity, and timeline. We offer flexible packages
                            for different needs.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div x-data="{ open: false }"
                    class="bg-neutral-100 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left group">
                        <div class="flex items-center space-x-4 min-w-0">
                            <span class="text-button font-medium text-base font-mono shrink-0">0.04</span>
                            <span
                                class="text-2xl font-medium text-gray-900 group-hover:text-button transition-colors truncate">
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
                        <p class="text-[#4B5563] text-[18px] leading-7 w-11/12">
                            Absolutely! We offer fully customized design and development services tailored to your
                            specific needs and brand identity.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Box (Right Column) -->
            <div class="lg:col-span-1">
                <div class="bg-neutral-100 p-8 rounded-2xl shadow-lg border border-gray-100 lg:sticky lg:top-8">
                    <div class="mb-6 flex justify-start">
                        <div class="w-20 h-20 bg-button rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Have any questions?</h3>
                    <p class="text-neutral-900 mb-6">
                        Meet Rahul, the Design Director at End Brackets. Feel free to reach out anytime for any
                        questions or
                        support you need.
                    </p>
                    <button
                        class="w-full bg-button text-white px-8 py-3 rounded-lg hover:bg-[#4a47ba] transition-all 
                                transform hover:-translate-y-0.5 shadow-sm hover:shadow-md">
                        Ask your question
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="//unpkg.com/alpinejs" defer></script>
