<style>

</style>
<section class="py-16 bg-primary dark:bg-primary-dark">
    <div class="container mx-auto px-4 sm:px-6 lg:px-12 overflow-hidden">
        <!-- Header -->
        <div class="mb-12 text-left">
            <h2 class="text-4xl md:text-sm font-bold text-gray-900 mb-4">SERVICES WE PROVIDE —</h2>
            <p class="text-5xl text-left text-black w-3/4">
                We craft bold solutions to grow your digital products – from concept to launch and beyond.
            </p>
        </div>
        <!-- Slider Container -->
        <div class="swiper-container services-slider relative">
            <div class="swiper-wrapper">
                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 h-full">
                        <div class="text-button text-xs font-bold mb-4">/01</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">UI/UX Design</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We take care of every design detail, so you can nurture your business...
                        </p>
                    </div>
                </div>
                <!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 h-full">
                        <div class="text-button text-xs font-bold mb-4">/02</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Web Development</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We take care of every design detail, so you can nurture your business. Share your vision,
                            and we'll craft a seamless global user experience. Let's create magic together!
                        </p>
                    </div>

                </div><!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 h-full">
                        <div class="text-button text-xs font-bold mb-4">/03</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">App Development</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We take care of every design detail, so you can nurture your business. Share your vision,
                            and we'll craft a seamless global user experience. Let's create magic together!
                        </p>
                    </div>

                </div><!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 h-full">
                        <div class="text-button text-xs font-bold mb-4">/04</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">WordPress Development</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We take care of every design detail, so you can nurture your business. Share your vision,
                            and we'll craft a seamless global user experience. Let's create magic together!
                        </p>
                    </div>

                </div><!-- Service Items -->
                <div class="swiper-slide h-auto">
                    <div class="bg-[#F3F4F6] p-8 shadow-sm hover:shadow-md transition-all duration-300 h-full">
                        <div class="text-button text-xs font-bold mb-4">/05</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Digital Strategy</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We talk about our customers and our customers' needs and our customers' needs.
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