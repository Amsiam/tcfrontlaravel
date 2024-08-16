<div class="flex justify-center items-center min-h-screen">
    <section class="mx-5 lg:mx-14 my-14 text-center">
        <div class="mx-9 md:mx-56 lg:mx-72 text-center">
            <p class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-black text-[#0f0254] px-2 py-1 lg:py-3 border-b border-[#0f0254]">
                <font face="hind siliguri"> অবাক করা সাফল্যগাঁথা </font>
            </p>
            <br>
        </div>

        <div class="flex justify-center py-10">
            <div id="default-carousel" class="relative w-full md:w-3/4 lg:w-2/3 h-96" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-full overflow-hidden rounded-lg">
                    @foreach ($this->sliders as $key => $slider)
                    <div class="hidden bg-gray-500 duration-[1000ms] ease-in-out" data-carousel-item>
                        <img src="{{config('app.image_path')}}/{{$slider->image}}" class="absolute h-full w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide {{$key + 1}}">
                    </div>
                    @endforeach
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($this->sliders as $key => $slider)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide {{$key + 1}}" data-carousel-slide-to="{{$key}}"></button>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
</div>
