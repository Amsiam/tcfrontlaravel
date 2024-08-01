<section class="mx-8 lg:mx-16 my-3 lg:my-16 max-w-screen-2xl">
    <div class="mx-9 md:mx-56 lg:mx-72 text-center">
        <p
            class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-black text-red-900 px-2 py-1 lg:py-3  border-b border-red-900 text-center">
            সফল যারা, কেমন তারা?</p>
    </div>

    <div class="flex flex-col gap-8 py-10">
        <div class="grid place-items-center grid-cols-1 lg:grid-cols-3 gap-4 font-bangla">

            @php
                $colors = [
                    [
                        'bg' => '#f3f7ce',
                        'others' => '#B3C022',
                    ],
                    [
                        'bg' => '#fcd5d2',
                        'others' => '#F95D50',
                    ],
                    [
                        'bg' => '#faecc7',
                        'others' => '#FCB700',
                    ],
                ];
            @endphp
            @foreach ($this->reviews as $key => $review)
                <div
                style="background-color: {{$colors[$key%3]["bg"]}}"
                    class=" px-6 py-6 lg:py-12 w-full rounded-3xl flex flex-col items-center shadow-lg shadow-gray-500">
                    <img style="border-color: {{$colors[$key%3]["others"]}}" src="{{ config('app.image_path') }}/{{ $review->image }}" alt=""
                        class="w-40 rounded-full bg-white border-4 ">
                    <h2 class="text-xl lg:text-2xl font-extrabold text-black font-bangla pt-3">{{ $review->name }}</h2>
                    <p class="text-xs lg:text-sm font-bold text-black font-bangla">ভর্তি পরীক্ষা:
                        {{ $review->exam_year }}</p>
                    <h3 style="color: {{$colors[$key%3]["others"]}}" class="text-base lg:text-xl font-extrabold  font-bangla">{{ $review->rank }}</h3>
                    <p class="text-xs lg:text-base text-black text-center pt-1 lg:pt-2">
                        {{ $review->desc }}
                    </p>
                </div>
            @endforeach


        </div>
    </div>

</section>
