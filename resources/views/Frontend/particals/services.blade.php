<section class="py-16 bg-primary dark:bg-primary-dark lg:py-28 lg:px-16">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-12 overflow-hidden">
        <!-- Header -->
        <div class="mb-12 text-left">
            <h2 class="text-base md:text-sm font-semibold text-gray-900 mb-4 leading-5 tracking-[0.125em] uppercase">
                SERVICES WE PROVIDE —</h2>
            <p class="text-[56px] leading-[60px] text-left text-neutral-900 font-normal lowercase">
                We craft bold solutions to grow your digital products <br>– from concept to launch and beyond.
            </p>
        </div>
        <!-- Slider Container -->
        <div class="swiper-container services-slider relative mt-3">
            <div class="swiper-wrapper">
                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto h-[412px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-normal mb-4">/ 01</div>
                            <h3 class="text-5xl font-medium text-gray-900 leading-[52px] mb-4">UI/UX Design</h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            We specialize in creating user-centric UI/UX designs for web and mobile platforms. Our team
                            ensures your product is not only beautiful but also functional, focusing on enhancing user
                            engagement and retention. From prototypes to final design, we deliver tailored solutions
                            that meet your brand's goals and create a lasting impression.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto h-[412px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-normal mb-4">/ 02</div>
                            <h3 class="text-5xl font-medium text-gray-900 leading-[52px] mb-4">Web Development</h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            We build fast, responsive, and scalable websites using the latest technologies. Whether it's
                            a simple blog or a complex enterprise platform, our team focuses on delivering
                            user-friendly, mobile-optimized, and high-performance websites that align with your brand
                            vision and goals.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto h-[412px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-normal mb-4">/ 03</div>
                            <h3 class="text-5xl font-medium text-gray-900 leading-[52px] mb-4">App Development</h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            We create high-performance, cross-platform mobile apps that offer seamless user experiences.
                            From iOS to Android, we develop applications that align with your business needs, ensuring
                            they are easy to use and scalable for future growth.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto h-[412px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-normal mb-4">/ 04</div>
                            <h3 class="text-5xl font-medium text-gray-900 leading-[52px] mb-4">WordPress Development
                            </h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            Our WordPress development services include creating customizable, scalable websites. We
                            specialize in building websites that are easy to manage and deliver great user experiences,
                            ensuring your business stays ahead in the digital landscape.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto h-[412px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-normal mb-4">/ 05</div>
                            <h3 class="text-5xl font-medium text-gray-900 leading-[52px] mb-4">Digital Strategy</h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            We craft digital strategies to help you achieve online success. From SEO to social media
                            marketing, we focus on driving results and building your online presence, ensuring you stand
                            out and connect with your target audience effectively.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.services-slider', {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 30,
        initialSlide: 0, // Force starting from first slide
        centeredSlides: false, // Disable centered slides
        navigation: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            0: { 
                slidesPerView: 1,
                centeredSlides: false
            },
            640: { 
                slidesPerView: 2,
                centeredSlides: false
            },
            1024: { 
                slidesPerView: 4,
                centeredSlides: false
            }
        }
    });
});
</script>