<section class="w-full overflow-hidden bg-neon-500 group"> 
    <div
        class="max-w-full h-24 text-neutral-900 text-3xl font-medium tracking-wide [mask-image:linear-gradient(to_right,transparent,#000_10%_90%,transparent)]
    [-webkit-mask-image:linear-gradient(to_right,transparent,#000_10%,#000_90%,transparent)] flex items-center justify-center overflow-hidden relative">
        <div class="flex items-center w-[200%] animate-scroll space-x-6 group-hover:[animation-play-state:paused]">
            <div class="flex items-center justify-around min-w-full space-x-6">
                @foreach (['UI/UX Design', 'App Development', 'WordPress Development', 'SEO', 'Shopify', 'Social Media Marketing'] as $service)
                    <span class="relative after:content-['✻'] after:absolute after:-right-16 after:text-neutral-900 after:text-3xl after:top-1/2 after:-translate-y-1/2">
                        {{ $service }}
                    </span>
                @endforeach
            </div>
            <div class="flex items-center justify-around min-w-full space-x-6">
                @foreach (['UI/UX Design', 'App Development', 'WordPress Development', 'SEO', 'Shopify', 'Social Media Marketing'] as $service)
                    <span class="relative after:content-['✻'] after:absolute after:-right-16 after:text-neutral-900 after:text-3xl after:top-1/2 after:-translate-y-1/2">
                        {{ $service }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>
