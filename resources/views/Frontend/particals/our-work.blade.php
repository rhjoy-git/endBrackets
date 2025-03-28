<section class="py-16 bg-primary dark:bg-primary-dark lg:py-24 lg:px-16">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-12 overflow-hidden">
        <!-- Header -->
        <div class="mb-12 text-left">
            <h2 class="2xl:text-base text-base font-semibold text-head-color mb-4 leading-5 tracking-[2px] uppercase">
                OUR WORK —</h2>
            <p class="2xl:text-[56px] text-3xl 2xl:leading-[60px] text-left text-content-color font-normal lowercase">
                here's what we do best.
            </p>
        </div>

        <!-- Image Marquee -->
        <div class="relative overflow-hidden">
            <div class="flex items-center w-[200%] animate-img-scroll">
                <!-- Duplicated images for seamless loop -->
                <div class="flex items-center justify-around min-w-full py-4 space-x-8">
                    @foreach(['work1', 'work2', 'work3', 'work4', 'work5', 'work6', 'work7', 'work8', 'work9', 'work10',
                    'work11', 'work12', 'work13'] as $work)
                    <div class="relative flex-shrink-0">
                        <img src="{{asset('resources/img/' . $work . '.png')}}"
                            alt="Our work sample {{ $loop->iteration }}"
                            class="h-96 w-auto object-cover rounded-xl shadow-lg">
                    </div>
                    @endforeach
                </div>
                <!-- Duplicated set -->
                <div class="flex items-center justify-around min-w-full py-4 space-x-8">
                    @foreach(['work1', 'work2', 'work3', 'work4', 'work5', 'work6', 'work7', 'work8', 'work9', 'work10',
                    'work11', 'work12', 'work13'] as $work)
                    <div class="relative flex-shrink-0">
                        <img src="{{asset('resources/img/' . $work . '.png')}}"
                            alt="Our work sample {{ $loop->iteration }}"
                            class="h-96 w-auto object-cover rounded-xl shadow-lg">
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Gradient overlay -->
            <div class="pointer-events-none absolute inset-0 
                [mask-image:linear-gradient(to_right,transparent_0%,#000_10%,#000_90%,transparent_100%)]
                [-webkit-mask-image:linear-gradient(to_right,transparent_0%,#000_10%,#000_90%,transparent_100%)]">
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-img-scroll {
        animation: scroll 10s linear infinite;
        animation-play-state: running !important;
    }
</style>