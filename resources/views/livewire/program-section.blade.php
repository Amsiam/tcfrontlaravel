<div id="program">
    <section class="mx-3 lg:mx-14 my-14">
        <div class="mx-9 md:mx-56 lg:mx-72 text-center">
            <p
                class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-black text-[#0f0254] px-2 py-1 lg:py-3  border-b border-[#0f0254] text-center">
                সময়োপযোগী প্রোগ্রামসমূহ</p>
        </div>
        <div class="px-5">
            <div class="">
                <div class="w-full flex flex-col lg:flex-row gap-5 pt-10 pb-7">
                    <div class=" w-full">
                        <select
                        wire:model.live="classs"
                            class="p-2 shadow bg-base-100 rounded-full w-full text-base lg:text-xl font-semibold  outline-blue-300">
                            <option value="">All Class</option>

                            @foreach ($this->classes as $classs)
                            <option value="{{$classs->id}}">{{$classs->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class=" w-full">
                        <select wire:model.live="type"
                            class="p-2 shadow bg-base-100 rounded-full w-full text-base lg:text-xl font-semibold outline-blue-300">
                            <option value="">All Program</option>
                            <option value="1">Online Program</option>
                            <option value="2">Offline Program</option>
                        </select>
                    </div>
                </div>


                <!-- card -->
                <div class="flex flex-col gap-8">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                        @foreach ($this->courses as $course)
                            <div wire:key="{{ $course->id }}"
                                class="card w-auto lg:w-96 bg-base-100 shadow-2xl rounded-2xl">
                                <figure><img src="{{ $course->image }}" alt="Shoes" class="rounded-t-2xl" /></figure>
                                <div class="p-5">
                                    <h2 class=" font-bangla font-extrabold text-xl text-black">{{ $course->fullName }}
                                    </h2>
                                    {{ $course->shortDesc }}
                                    <div class="flex w-full justify-center text-base font-normal px-3">
                                        <a href=""
                                            class="bg-gradient-to-r w-full text-center from-blue-600 to-purple-500 hover:from-purple-400 hover:to-blue-400 text-white font-bold py-2 px-4 rounded-full">Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
    </section>
</div>
