<section class="py-16 bg-primary dark:bg-primary-dark lg:py-28 lg:px-16">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-12">
        <!-- Header -->
        <div class="mb-12 text-left">
            <h2 class="text-base md:text-sm font-semibold text-gray-900 mb-4 leading-5 tracking-[0.125em] uppercase">
                TESTIMONIAL —</h2>
            <p class="text-[56px] leading-[60px] text-left text-neutral-900 font-normal lowercase">
                What our clients say about working with us.
            </p>
        </div>
        <!-- Carousel Container -->
        <div class="swiper-container testimonial-carousel overflow-hidden">
            <div class="swiper-wrapper h-auto" x-data="{ isHovered: false }" @mouseenter="isHovered = true"
                @mouseleave="isHovered = false">
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-[#F3F4F6] px-24 py-20 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                        </div>
                        <p class="text-neutral-900 text-3xl font-medium my-10 mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 mt-auto">
                            <!-- Client info -->
                            <div class="h-14 w-14 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/image.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-medium text-lg text-neutral-900">Sarah Mitchell</h3>
                                <p class="font-medium text-base text-[#4B5563]">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-[#F3F4F6] px-24 py-20 p-8 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <!-- Your existing testimonial content here -->
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                        </div>
                        <p class="text-neutral-900 text-3xl font-medium my-10 mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 mt-auto">
                            <!-- Client info -->
                            <div class="h-14 w-14 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/image.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-medium text-lg text-neutral-900">Sarah Mitchell</h3>
                                <p class="font-medium text-base text-[#4B5563]">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-[#F3F4F6] px-24 py-20 p-8 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <!-- Your existing testimonial content here -->
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                        </div>
                        <p class="text-neutral-900 text-3xl font-medium my-10 mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 mt-auto">
                            <!-- Client info -->
                            <div class="h-14 w-14 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/image.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-medium text-lg text-neutral-900">Sarah Mitchell</h3>
                                <p class="font-medium text-base text-[#4B5563]">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- Testimonial Slides -->
                <div class="swiper-slide h-full">
                    <div class="bg-[#F3F4F6] px-24 py-20 p-8 rounded-2xl shadow-sm h-full flex flex-col mx-4">
                        <!-- Your existing testimonial content here -->
                        <div class="flex justify-center space-x-2">
                            <!-- Five star SVGs -->
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.54016 1.30001C10.2738 -0.186326 12.3933 -0.186327 13.127 1.30001L14.9887 5.0716C15.2798 5.66129 15.8421 6.07021 16.4928 6.16532L20.6593 6.77432C22.2992 7.014 22.9527 9.02968 21.7656 10.186L18.7538 13.1194C18.2821 13.5789 18.0667 14.2412 18.1781 14.8902L18.8884 19.032C19.1687 20.6659 17.4536 21.9119 15.9863 21.1402L12.2645 19.183C11.6817 18.8765 10.9854 18.8765 10.4027 19.183L6.68084 21.1402C5.21358 21.9119 3.49848 20.6659 3.77872 19.032L4.48908 14.8902C4.60041 14.2412 4.38508 13.5789 3.91333 13.1194L0.901601 10.186C-0.285586 9.02968 0.367981 7.014 2.00781 6.77432L6.17431 6.16532C6.82502 6.07021 7.38739 5.66129 7.67847 5.0716L9.54016 1.30001Z"
                                    fill="#F59E0B" />
                            </svg>
                        </div>
                        <p class="text-neutral-900 text-3xl font-medium my-10 mb-6 flex-grow text-center">
                            “End Brackets transformed our outdated website into a sleek, user-friendly platform.
                            The design is not only beautiful but also optimized for engagement and conversions.
                            We couldn’t be happier!”
                        </p>
                        <footer
                            class="border-t flex flex-wrap items-center justify-center gap-3 border-gray-100 mt-auto">
                            <!-- Client info -->
                            <div class="h-14 w-14 client-img rounded-full border">
                                <a href="" class=" bg-red-600 h-full w-full  "><img
                                        src="{{asset('resources/img/image.png')}}" alt="Client"></a>
                            </div>
                            <div class="client-content">
                                <h3 class="font-medium text-lg text-neutral-900">Sarah Mitchell</h3>
                                <p class="font-medium text-base text-[#4B5563]">Founder of Bloom E-Com</p>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <div class="flex items-center justify-end gap-4 mt-12 mr-10 relative">
            <!-- Left Arrow -->
            <button
                class="swiper-button-prev hidden  static w-[122px] h-[80px] px-6 py-4 rounded-full bg-[#F3F4F6] shadow hover:shadow-lg transition-shadow lg:flex items-center justify-center">
                <svg width="29" height="28" viewBox="0 0 29 28" class="w-7 h-7" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.3114 12.1249C27.2783 12.1249 28.8728 13.6919 28.8728 15.6249V24.1249H25.8202V15.6249C25.8202 15.3487 25.5924 15.1249 25.3114 15.1249H5.59274L12.9082 22.3142L10.7497 24.4355L0.828639 14.6855C0.232576 14.0997 0.232576 13.15 0.828639 12.5642L10.7497 2.81421L12.9082 4.93553L5.59274 12.1249H25.3114Z"
                        fill="black" />
                </svg>
            </button>

            <!-- Right Arrow -->
            <button
                class="swiper-button-next hidden  static w-[122px] h-[80px] px-6 py-4 rounded-full bg-[#F3F4F6] shadow hover:shadow-lg transition-shadow lg:flex items-center justify-center">
                <svg width="29" height="28" viewBox="0 0 29 28" class="w-7 h-7" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.68858 12.1249C1.72167 12.1249 0.127178 13.6919 0.127178 15.6249V24.1249H3.17981V15.6249C3.17981 15.3487 3.40759 15.1249 3.68858 15.1249H23.4073L16.0918 22.3142L18.2503 24.4355L28.1714 14.6855C28.7674 14.0997 28.7674 13.15 28.1714 12.5642L18.2503 2.81421L16.0918 4.93553L23.4073 12.1249H3.68858Z"
                        fill="#111827" />
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
        @apply p-2 rounded-full bg-[#F3F4F6] px-24 py-20 shadow-md hover:shadow-lg transition-shadow;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        @apply text-gray-900 text-xl;
        content: '';
    }
</style>