<!-- Hero Section -->
<section class="relative bg-primary dark:bg-primary-dark py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-12">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Left Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <span>•</span><span class="text-[#1b1b18] font-semibold tracking-wide text-basic">
                    We are taking new projects
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mt-6 mb-8 leading-tight">
                    Your Partner in Creating Impactful Digital Experiences
                </h1>
                <button
                    class="bg-button text-white px-8 py-4 text-lg hover:bg-primary-dark transition-transform transform hover:scale-105">
                    Book a Free Call
                </button>
            </div>

            <!-- Video Section -->
            <div class="lg:w-1/2 relative mt-12 lg:mt-0" x-data="{ isOpen: false }">
                <div class="relative group cursor-pointer" @click="isOpen = true">
                    <!-- Video Thumbnail -->
                    <div class="relative rounded-2xl shadow-xl overflow-hidden aspect-video bg-gray-200">
                        <!-- Replace with actual video thumbnail image -->
                        <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                            <img src="{{asset('resources/img/hero-img.png')}}" alt="Video Thumbnail" class="w-full h-full object-cover"> 
                        </div>
                    </div>

                    <!-- Animated Play Button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div
                            class="w-20 h-20 lg:w-24 lg:h-24 bg-button bg-opacity-90 rounded-full flex items-center justify-center group-hover:bg-opacity-100 transition-all duration-300 animate-pulse">
                            <svg class="w-96 h-auto text-white ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Video Modal -->
                <div x-show="isOpen"
                    class="fixed inset-0 z-50 bg-black bg-opacity-75 flex items-center justify-center p-4" x-cloak>
                    <div class="relative w-full max-w-4xl bg-black rounded-lg overflow-hidden aspect-video">
                        <!-- Close Button - Now visible inside the modal -->
                        <button @click="isOpen = false"
                            class="absolute top-4 right-4 z-50 text-white hover:text-primary transition p-2 rounded-full bg-black bg-opacity-50"
                            aria-label="Close video modal">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <!-- Video Embed -->
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/fzWzPXEhPvA"  
                            frameborder="0"  
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  
                            allowfullscreen>  
                        </iframe>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>