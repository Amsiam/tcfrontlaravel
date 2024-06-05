<section class="mx-3 h-60 lg:mx-14 my-2 lg:my-3">
    <div class="carousel w-full">

        @foreach ($this->sliders as $key => $slider)
        <div id="slide{{$key}}" class="carousel-item relative w-full">
            <img class="w-full h-60" src="{{config("app.image_path")}}/{{$slider->image}}" class="w-full" />
            <div
                class="absolute flex justify-between transform -translate-y-1/2 left-1 lg:left-5 right-1 lg:right-5 top-1/2">

                <a id="slide{{$key}}prev" href="#slide{{$key==0?count($this->sliders)-1:$key-1}}" class="btn btn-circle">❮</a>
                <a id="slide{{$key}}next" href="#slide{{($key+1)%count($this->sliders)}}" class="btn btn-circle">❯</a>
            </div>
        </div>
        @endforeach
    </div>

    <script >




    </script>
</section>
