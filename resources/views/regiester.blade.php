<x-guest-layout>

    <style>
        .font-lato{
            font-family: 'Lato', sans-serif;
        }

        .font-bangla{
            font-family: 'Lato', sans-serif;
            font-family: 'Noto Sans Bengali', sans-serif;
        }
        .section-1-img {
            width: 100%;
        background: linear-gradient(180deg,
        #ffffff56,
        #ffffff77),
    url('{{asset("asset/image/register-background.png")}}');
    background-size: cover;
    }
    </style>
    <section class=" bg-[#fbfadad7] px-6 py-16 lg:py-28 section-1-img ">
        <div class="flex flex-col lg:flex-row gap-20 justify-center items-center ">
            <img src="{{asset("assets/image/for.png")}}" alt="">
            <div class="flex flex-col px-6 lg:px-16 py-12 lg:py-16 bg-[#F18A00] items-center rounded-3xl shadow-gray-700 shadow-lg text-[#FBFADA]">
                <p class="font-bold lg:font-extrabold text-2xl lg:text-5xl text-[#0C2D57] py-0 lg:py-6 text-center">Register Now!</p>
                <div class="w-full pt-10 lg:pt-5">
                    <p class="text-base lg:text-lg font-semibold pb-1">Enter Your Mobile Number</p>
                    <input type="number" value="" placeholder="XXXXXXXXXXXX" class="w-full text-sm lg:text-base p-2 border-gray-400 outline-none bg-[#FBFADA] text-[#436850]">
                </div>
                <div class="w-full pt-2 lg:pt-5">
                    <p class="text-base lg:text-lg font-semibold pb-1">Enter Your Birth Certificate Number</p>
                    <input type="number" value="" placeholder="XXXX XXXX XXXX" class="w-full text-sm lg:text-base p-2 border-gray-400 outline-none bg-[#FBFADA] text-[#436850]">
                </div>
                <button class="btn border-none bg-[#FBFADA] hover:bg-[#adac8881] text-[#436850] hover:text-[#FBFADA] text-base lg:text-lg w-5/12 lg:w-1/3 rounded-full lg:my-5 my-6 font-bold">Next</button>
            </div>
        </div>
    </section>
</x-guest-layout>
