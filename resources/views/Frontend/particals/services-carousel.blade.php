<!-- HTML Structure -->
<section class="py-16 bg-gray-50">
    <div class="swiper services-carousel">
        <div class="swiper-wrapper">
            <!-- Service Items -->
            <div class="swiper-slide">UI/UX Design</div>
            <div class="swiper-slide">App Development</div>
            <div class="swiper-slide">Web Development</div>
            <div class="swiper-slide">Visual Design</div>
            <div class="swiper-slide">Wordpress</div>
            <div class="swiper-slide">Front End</div>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
/* Include Swiper CSS */
@import 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css';

.services-carousel {
    overflow: hidden;
    padding: 2rem 0;
}

.swiper-slide {
    width: auto !important; /* Allow content-based width */
    display: flex;
    align-items: center;
    font-size: 1.5rem;
    font-weight: 600;
    color: #4a5568;
    padding: 0 2rem;
    position: relative;
}

/* Optional dot separators */
.swiper-slide:not(:last-child)::after {
    content: '•';
    position: absolute;
    right: -1rem;
    color: #3b82f6; /* Primary color */
    font-size: 1.2rem;
}
</style>

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.services-carousel', {
        loop: true,
        speed: 5000,
        freeMode: true,
        slidesPerView: 'auto',
        spaceBetween: 40,
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
        },
        allowTouchMove: false,
        breakpoints: {
            768: {
                spaceBetween: 60
            }
        }
    });
});
</script>