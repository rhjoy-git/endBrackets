<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 overflow-hidden">
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-sm font-bold text-gray-900 mb-4 text-left">TESTIMONIAL —</h2>
            <p class="text-5xl text-left text-black">
                What our clients say about working with us.
            </p>
        </div>

        <!-- Carousel Container -->
        <div class="swiper-container testimonial-carousel">
            <div class="swiper-wrapper h-auto" x-data="{ isHovered: false }" @mouseenter="isHovered = true"
                @mouseleave="isHovered = false">
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-white p-8 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 pt-6 mt-auto">
                            <!-- Client info -->
                            <div class="h-12 w-12 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/hero-img.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-bold text-gray-900">Sarah Mitchell</h3>
                                <p class="text-gray-500 text-sm">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-white p-8 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <!-- Your existing testimonial content here -->
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 pt-6 mt-auto">
                            <!-- Client info -->
                            <div class="h-12 w-12 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/hero-img.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-bold text-gray-900">Sarah Mitchell</h3>
                                <p class="text-gray-500 text-sm">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-white p-8 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <!-- Your existing testimonial content here -->
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 pt-6 mt-auto">
                            <!-- Client info -->
                            <div class="h-12 w-12 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/hero-img.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-bold text-gray-900">Sarah Mitchell</h3>
                                <p class="text-gray-500 text-sm">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-white p-8 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <!-- Your existing testimonial content here -->
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 pt-6 mt-auto">
                            <!-- Client info -->
                            <div class="h-12 w-12 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/hero-img.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-bold text-gray-900">Sarah Mitchell</h3>
                                <p class="text-gray-500 text-sm">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <!-- Navigation Arrows -->
        <div class="flex items-center justify-end gap-4 mt-12 mr-10 relative">
            <!-- Left Arrow -->
            <button
                class="hidden md:swiper-button-prev static w-[90px] h-[60px] p-4 rounded-full bg-white shadow hover:shadow-lg transition-shadow">
                <svg class="w-7 h-7" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.3114 12.1249C27.2783 12.1249 28.8728 13.6919 28.8728 15.6249V24.1249H25.8202V15.6249C25.8202 15.3487 25.5924 15.1249 25.3114 15.1249H5.59274L12.9082 22.3142L10.7497 24.4355L0.828639 14.6855C0.232576 14.0997 0.232576 13.15 0.828639 12.5642L10.7497 2.81421L12.9082 4.93553L5.59274 12.1249H25.3114Z"
                        fill="black" />
                </svg>
            </button>

            <!-- Right Arrow -->
            <button
                class="hidden md:swiper-button-next static w-[90px] h-[60px] p-4 rounded-full bg-white shadow hover:shadow-lg transition-shadow">
                <svg class="w-7 h-7" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.68858 12.1249C1.72167 12.1249 0.127178 13.6919 0.127178 15.6249V24.1249H3.17981V15.6249C3.17981 15.3487 3.40759 15.1249 3.68858 15.1249H23.4073L16.0918 22.3142L18.2503 24.4355L28.1714 14.6855C28.7674 14.0997 28.7674 13.15 28.1714 12.5642L18.2503 2.81421L16.0918 4.93553L23.4073 12.1249H3.68858Z"
                        fill="black" />
                </svg>
            </button>
        </div>
        {{-- <div class="">
            <div class="swiper-button-next !text-gray-900"></div>
            <div class="swiper-button-prev !text-gray-900"></div>
        </div> --}}

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const testimonialSwiper = new Swiper('.testimonial-carousel', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: false,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        },
        on: {
            init: function() {
                const container = this.el;
                container.addEventListener('mouseenter', () => this.autoplay.stop());
                container.addEventListener('mouseleave', () => this.autoplay.start());
            }
        }
    });
});
</script>
<style>
    .swiper-button-next,
    .swiper-button-prev {
        @apply p-2 rounded-full bg-white shadow-md hover: shadow-lg transition-shadow;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        @apply text-gray-900 text-xl;
        content: '';
    }
</style>