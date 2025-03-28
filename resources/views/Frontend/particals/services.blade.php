<section class="py-0 md:py-16 bg-primary dark:bg-primary-dark lg:py-24 lg:px-16">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-12 overflow-hidden">
        <!-- Header -->
        <div class="mb-12 text-left">
            <h2 class="2xl:text-base text-base font-semibold text-head-color mb-4 leading-5 tracking-[2px] uppercase">
                SERVICES WE PROVIDE —</h2>
            <p class="2xl:text-[56px] 2xl:leading-[60px] text-3xl text-left text-content-color font-normal lowercase">
                We craft bold solutions to grow your digital products <br>– from concept to launch and beyond.
            </p>
        </div>
        <!-- Slider Container -->
        <div class="swiper-container services-slider relative mt-3">
            <div class="swiper-wrapper">
                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto 2xl:h-[400px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-medium mb-4">/ 01</div>
                            <h3 class="2xl:text-4xl font-medium text-gray-900 2xl:leading-[36px] mb-4">UI/UX<br>Design</h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            We craft user-centric UI/UX designs for web and mobile, blending aesthetics with
                            functionality to boost engagement. From prototypes to final delivery, we align solutions
                            with your brand vision.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto 2xl:h-[400px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-medium mb-4">/ 02</div>
                            <h3 class="2xl:text-4xl font-medium text-gray-900 2xl:leading-[36px] mb-4">Web<br>Development
                            </h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            We build responsive, scalable websites using modern frameworks, ensuring mobile optimization
                            and high performance for blogs to enterprise platforms.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto 2xl:h-[400px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-medium mb-4">/ 03</div>
                            <h3 class="2xl:text-4xl font-medium text-gray-900 2xl:leading-[36px] mb-4">App<br>Development
                            </h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            We develop cross-platform mobile apps with seamless UX, tailored to your business needs and
                            designed for scalability and ease of use.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto 2xl:h-[400px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-medium mb-4">/ 04</div>
                            <h3 class="2xl:text-4xl font-medium text-gray-900 2xl:leading-[36px] mb-4">WordPress<br>Development
                            </h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            Custom WordPress solutions: scalable, easy-to-manage websites optimized for user experience
                            to keep your brand competitive.
                        </p>
                    </div>
                </div>

                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div
                        class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 max-w-md w-auto 2xl:h-[400px] flex flex-col justify-between">
                        <div>
                            <div class="text-button text-base font-mono font-medium mb-4">/ 05</div>
                            <h3 class="2xl:text-4xl font-medium text-gray-900 2xl:leading-[36px] mb-4">Digital<br>Strategy
                            </h3>
                        </div>
                        <p class="text-gray-600 text-base font-normal">
                            Digital strategy experts driving online success through SEO, social media, and targeted
                            campaigns to amplify your presence and audience connection.
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