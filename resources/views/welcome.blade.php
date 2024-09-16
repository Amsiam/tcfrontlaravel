<x-guest-layout>

    <!-- banner -->
    @livewire("slider-section")





    <!-- program -->
    @livewire("program-section")


    @livewire("safollo-section")


    @livewire("sofol-section")
  <br>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Player with Description</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Optional: Light gray background for the whole page */
        }
        .video-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 700px; /* Full height for the container */
            background-color: #eaecee; /* Light pink background color */
            padding: 20px;
            box-sizing: border-box;
        }
        .video-wrapper {
            width: 800px; /* Fixed width for the video player */
            height: 415px; /* Fixed height for the video player */
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            margin-bottom: 20px; /* Space between video and description */
        }
        .video-wrapper iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        .video-description {
            max-width: 800px; /* Same width as the video player */
            text-align: center;
            color: #333;
        }
        .video-description h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }
        .video-description p {
            margin: 10px 0;
            font-size: 1rem;
            color: #555;
        }
       {
            margin: 0;
            font-family: Arial, hind siliguri;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            background-color: #fdedec; /* Light gray background for the whole page */
        }
        .counters-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
             background-color: #fdedec; /* Light gray background for the whole page */
            flex-wrap: wrap;
            text-align: center;
        }
        .counter {
            text-align: center;
            border-radius: 8px;
            padding: 20px;
            max-width: 250px;
            box-sizing: border-box;
            flex: 1 1 calc(25% - 20px); /* Four counters in a row with space around */
        }
        .counter-icon {
            width: 130px; /* Size of the icon */
            height: 130px;
            margin: 0 auto 15px; /* Center icon horizontally and add margin below */
        }
        .counter-icon img {
            width: 100%; /* Make image fit the icon container */
            height: auto;
            border-radius: 50%; /* Make the image circular */
        }
        .counter-number {
            font-size: 2rem; /* Size of the counter number */
            font-weight: bold;
            color: #0f0254; /* Color of the counter number */
            margin-bottom: 10px;
        }
        .counter-description {
            font-size: 0.9rem; /* Size of the description text */
            color: #555; /* Color of the description text */
        }
    </style>
</head>
<body>
    <div class="video-container">
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/Md3sz0QRot4" allowfullscreen title="YouTube video player"></iframe>
        </div>
        <div class="video-description">
         <font face="arial black" color="green" size="10px"> DU GRAND CELEBRATION: 2022-23 </font>
        </div>
    </div>

     <div class="counters-container">
        <div class="counter">
            <div class="counter-icon">
                <img src="/assets/image/Artboard 1.png" alt="Icon 1">
            </div>
            <div class="counter-number">75+</div>
            <div class="counter-description"> <font face="hind siliguri"> ১৪তম, ২০তম, ৩৩তম, ৪০তম, ও ৪৯তমসহ  শুধুমাত্র ২০২৩-২৪ শিক্ষাবর্ষে ঢাকা বিশ্ববিদ্যালয়ে ৭৫+ শিক্ষার্থীর বিষ্ময়কর সাফল্য। </font></DIV>
        </div>
        <div class="counter">
            <div class="counter-icon">
                <img src="/assets/image/Artboard 2.png" alt="Icon 2">
            </div>
            <div class="counter-number">30+</div>
            <div class="counter-description"> <font face="hind siliguri"> ১৪তম, ২০তম, ৩৩তম, ৪০তম, ও ৪৯তমসহ  শুধুমাত্র ২০২৩-২৪ শিক্ষাবর্ষে ঢাকা বিশ্ববিদ্যালয়ে ৭৫+ শিক্ষার্থীর বিষ্ময়কর সাফল্য। </font></div>
        </div>
        <div class="counter">
            <div class="counter-icon">
                <img src="/assets/image/Artboard 3.png" alt="Icon 3">
            </div>
            <div class="counter-number">650+</div>
            <div class="counter-description"><font face="hind siliguri"> ১৪তম, ২০তম, ৩৩তম, ৪০তম, ও ৪৯তমসহ  শুধুমাত্র ২০২৩-২৪ শিক্ষাবর্ষে ঢাকা বিশ্ববিদ্যালয়ে ৭৫+ শিক্ষার্থীর বিষ্ময়কর সাফল্য। </font></div>
        </div>
        <div class="counter">
            <div class="counter-icon">
                <img src="/assets/image/Artboard 4.png" alt="Icon 4">
            </div>
            <div class="counter-number">100+</div>
            <div class="counter-description"><font face="hind siliguri"> ১৪তম, ২০তম, ৩৩তম, ৪০তম, ও ৪৯তমসহ  শুধুমাত্র ২০২৩-২৪ শিক্ষাবর্ষে ঢাকা বিশ্ববিদ্যালয়ে ৭৫+ শিক্ষার্থীর বিষ্ময়কর সাফল্য। </font></div>
        </div>
    </div>

    </div>

    </div>

</body>


<div  class="bg-[LightCyan] flex justify-center">

      <br>
   <br>
   <br>

<style>

        background-color: lightblue;
        padding: 20px;
        border: 1px solid #ccc;

</style>

   <table border="2" width="70%" padding="10px">

       <tr>
           <th><img src="{{asset('assets/image/post.png')}}" width="400px" height="400px">
           </th>

           <td> &nbsp</td>

         <td>

         <font face="hind siliguri"  size="6px" color="Red">
     <b>
   ফরিদপুর থেকে ঢাকায় গিয়ে যা পাবেন.... </b>

     </font>
<hr>
           <font face="hind siliguri" size="4px">

১. নতুন, অচেনা ও অজানা বন্ধুর পরিবেশ।<br>
২. নতুন পরিবেশে নিজেকে নিজের মতো করে খাপ খাইয়ে নেয়ার নতুন জীবনযুদ্ধ।।<br>
৩. অতিরিক্ত কোর্স ফি, অতিরিক্ত জীবন নির্বাহের ব্যয়, ফলে অতিরিক্ত পারিবারিক চাপ <br>
৪. ঢাকায় ৪ মাসের হোস্টেল ফি ৫৪,০০০ টাকা। হোস্টেল বা মেসে থাকার দুর্বিষহ অভিজ্ঞতা।।<br>
৫. গ্যাস্ট্রিক, আলসার, টাইফয়েড, ডেঙ্গুজ্বর, জন্ডিস সহ নানাবিধ ।<br>
৬. অবাধ স্বাধীনতা, বন্ধুত্বের অগাধ চাহিদা; জীবনযুদ্ধে ভরাডুবির প্রশস্ত পথ ।<br>
৭. Homesickness; Frequent ঢাকা - ফরিদপুর নিয়মিত যাতায়াত এর দুর্বিষহ অভিজ।<br> ৮. অস্থিতিশীল রাজনৈতিক পরিস্থিতি।।<br>
৯. যানজট ঘিঞ্জি পরিবেশ যা মানসিক ভাবে চাপ বাড়িয়ে দেয়।।<br>
১০. শেষ পরিণতি Realization ফরিদপুর থাকাটাই ভালো ছিলো ।।<br>
১১. শূন্য হাতে অপমানজনক বাড়ি ফিরবার নিশ্চয়তা।</font>
 </td>

       </tr>





   </table>
   <br>
   <br>
   <br>

</div>
<div align="center" style="background-color: SeaShell ;">


  <br>
   <br>
   <br>
<style>

        background-color: lightblue;
        padding: 20px;
        border: 1px solid #ccc;

</style>

   <table border="2" width="70%" padding="10px">

       <tr>
           <td>
           <font face="hind siliguri"  size="6px" color="Red">
     <b>
     ফরিদপুর থেকে ঢাকায় গিয়ে যা হারাবেন... </b>

     </font>

   <br><hr>
           <font face="hind siliguri" size="4px">


১. চিরচেনা, সুন্দর, স্বাভাবিক পারিবারিক পরিবেশ।<br>
২. শান্ত স্নিগ্ধ পরিবেশে নিশ্চিত জীবন; নিশ্চিত পড়াশোনা<br>
৩. কম কোর্স ফি, সীমিত ব্যয়-ভারসাম্যপূর্ণ মনোরম ও পারিবারিক পরিবেশে চলাচল।<br>
৪. বাসার আরামদায়ক জীবন, সাবলীল পড়াশোনা<br>
৫. সুস্থ শরীর, সুস্থ মন, নির্বিঘ্ন নিশ্চিত পড়াশোনা<br>
৬. স্নেহ ও ভালোবাসাপূর্ণ পিতা মাতার অনুশাসন; নিশ্চিত সাফল্য।<br>
৭. নিরবিচ্ছিন্ন পড়াশোনা; সাফল্যের শিখরে আরোহণ ।


</font>

<td> &nbsp </td>

 </td>
 <td>
         <img src="/assets/image/post1.png" width="400px" height="400px">
           </td>


       </tr>





   </table>
      <br>
   <br>
   <br>
</div>


    <section class="mx-auto bg-[#F5FDFF] lg:px-0 px-3 py-5 lg:py-16">
        <div class="border-b border-[#6ABE45] mx-10 lg:mx-96 ">
            <p class="text-[#6ABE45] font-extrabold text-xl lg:text-5xl px-2 py-0 lg:py-3 text-center"><font face="hind siliguri"> অনন্য সব সেবা পরিক্রমা </font> </p>
        </div>
        <div class="px-2 lg:px-10 py-6 lg:py-14 grid lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-3 gap-2 lg:gap-8">
            <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba1.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">

                        <font face="hind siliguri"> অনলাইন/অফলাইন প্রোগ্রাম</font> </p>

                </div>
                <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba2.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">মেধাবী ও অভিজ্ঞ
                        শিক্ষক</p>
                </div>
                <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba3.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">মানসম্মত স্টাডি
                        ম্যাটেরিয়ালস</p>
                </div>
                <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba4.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">কনসেপ্ট বেইজড
                        ক্লাস</p>
                </div>
            <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba5.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">ইউনিক এক্সাম
                        সিস্টেম</p>
                </div>
                <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba6.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">সার্বক্ষণিক Q&A
                        সেবা</p>
                </div>
                <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba7.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">Auto SMS রেজাল্ট
                    </p>
                </div>

                <div class="flex flex-col items-center gap-3 lg:gap-7">
                    <img src="{{asset("assets/image/sheba8.jpg")}}" alt="" class="w-1/2 lg:w-auto">
                    <p class="text-xs lg:text-2xl font-normal text-[#333333] font-bangla text-center">এক্সাম এনালাইসিস
                        রিপোর্ট</p>
                </div>

        </div>
    </section>


</x-guest-layout>


