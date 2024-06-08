<!DOCTYPE html>
<html data-theme="light" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!-- For font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- font bangla -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Noto+Sans+Bengali:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-lato {
            font-family: 'Lato', sans-serif;
        }

        .font-bangla {
            font-family: 'Lato', sans-serif;
            font-family: 'Noto Sans Bengali', sans-serif;
        }

        .section_1 {
            background: linear-gradient(180deg,
                    rgb(51, 63, 0),
                    rgb(67, 10, 0))
        }

        .section_2 {
            background: linear-gradient(180deg,
                    rgb(137, 60, 153),
                    rgb(41, 4, 49))
        }

        .section_3 {
            background: linear-gradient(180deg,
                    rgb(2, 170, 176),
                    rgb(8, 253, 216))
        }

        .section_4 {
            background: linear-gradient(180deg,
                    rgb(147, 53, 110),
                    rgb(238, 168, 71))
        }

        .section_5 {
            background: linear-gradient(180deg,
                    rgb(65, 40, 111),
                    rgb(111, 73, 110))
        }

        .bg1 {
            background-image: url(images/bg\ .png);
            background-size: contain;
            opacity: 30%;
        }

        .bg2 {
            background-image: url(images/oliveBG.png);
            background-size: cover;
            width: 100%;
        }

        .bg3 {
            background-image: url(images/bg-last.png);
            background-size: cover;
        }

        .perspective-100 {
            perspective: 100px;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="mx-auto w-full">

    <!-- navbar -->
    <section class="mx-3 lg:mx-14 my-2 lg:my-3 border-b">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="#program" class="hover:text-black">প্রোগ্রামসমূহ</a></li>
                    </ul>
                </div>
                <a href="/" class="">
                    <img class="w-48 h-16 " src="{{ asset('assets/image/logo.png') }}" alt=""></a>
            </div>
            <div class="navbar-end flex lg:flex-row gap-3 lg:text-lg text-gray-600 font-bold">
                <a href="#program" class="hover:text-black hidden lg:flex">প্রোগ্রামসমূহ</a>

                <a href="{{ route('register') }}"
                    class="btn bg-gradient-to-r from-green-600 to-emerald-500 hover:from-[#fa6a9a]  hover:to-orange-400 text-white  lg:text-xl text-base font-bold rounded-full font-lato">Join
                    Now</a>
            </div>
        </div>
    </section>

    {{ $slot }}

    <footer class="bg-teal-500 lg:px-24 text-center sm:px-12 md:px-12 pt-16 pb-6 w-full">
        <div class="flex flex-col lg:flex-row w-full justify-evenly py-6">
            <div class="lg:w-3/4 sm:w-full md:w-full">
                <img src="{{ asset('assets/image/logo.png') }}" alt="" class="w-3/4">
            </div>
            <div class="text-white text-sm font-normal flex flex-col gap-2">
                <h6 class="font-bangla text-2xl font-semibold">Help</h6>
                <a class="link link-hover">About Us</a>
                <a class="link link-hover">Branch List</a>
                <a class="link link-hover">Privacy Policy</a>
                <a class="link link-hover">Terms & Conditions</a>
            </div>
            <div class="text-white text-sm font-normal flex flex-col gap-2">
                <h6 class="font-bangla text-2xl font-semibold">Explore</h6>
                <a href="#program" class="link link-hover">Programs</a>
                <a class="link link-hover">Teacher Registration</a>
            </div>
            <div class="text-white text-sm font-normal flex flex-col gap-3">
                <h6 class="font-bangla text-2xl font-semibold">Get In Touch</h6>
                <a>Address: খাঁন ভবন (২য় তলা ) সোনালী ব্যাকের মোড়, ঝিলটুলি ফরিদপুর।</a>
                <a>Helpline: 01734500238</a>
                <a>Email: tusherscareofficial@gmail.com</a>
                <div class="flex flex-row items-center gap-4">
                    <a href="https://www.facebook.com/tushercare"><i
                            class="fa-brands fa-facebook rounded-full text-3xl"></i></a>
                    <a href=""><i class="fa-brands fa-youtube rounded-full text-3xl"></i></a>
                    <a href=""><i class="fa-brands fa-instagram rounded-full text-3xl"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in rounded-full text-3xl"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="py-3">
            <div class="flex justify-between gap-2">

                <div class="text-sm font-normal text-white w-full">Copyright © Tusher's Care. All rights reserved.
                    {{ date('Y') }}</div>

                <div class="flex justify-end w-full text-sm font-normal text-white ">Developed By: <a
                        href="https://facebook.com/bear.siam.7"> Aslam Mahmud Siam</div>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>



</body>

</html>
