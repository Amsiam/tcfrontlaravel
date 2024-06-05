<?php

use App\Models\User;
use App\Models\Package;
use App\Models\Course;
use App\Models\AdmissionRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Livewire\Attributes\Computed;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $smobile = '';
    public string $gmobile = '';
    public string $package_id = "1";
    public string $course_id = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'smobile' => ['required', 'string', 'max:11',"min:11"],
            'gmobile' => ['required', 'string', 'max:11',"min:11"],
            'package_id' => ['required'],
            'course_id' => ['required'],
           ]);

           AdmissionRequest::create($validated);

        $this->dispatch("register-success");

        $this->redirect(route('welcome', absolute: false), navigate: true);
    }

    #[Computed()]
    public function packages(){
        return Package::all();
    }

    #[Computed()]
    public function courses(){
        if($this->package_id==""){
            return [];
        }
        return Course::where("package_id",$this->package_id)->get();
    }
}; ?>

<div>
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
            <form wire:submit="register">
            <div class="flex flex-col px-6 lg:px-16 py-12 lg:py-16 bg-teal-500 items-center rounded-3xl shadow-gray-700 shadow-lg text-[#FBFADA]">
                <p class="font-bold lg:font-extrabold text-2xl lg:text-5xl text-white py-0 lg:py-6 text-center">Register Now!</p>
                <div class="w-full pt-10 lg:pt-5">
                    <p class="text-base lg:text-lg font-semibold pb-1">Name</p>
                    <input wire:model="name" type="text" value="" placeholder="" class="w-full rounded-lg text-sm lg:text-base p-2 border-gray-400 outline-none bg-[#FBFADA] text-[#436850]">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="w-full pt-10 lg:pt-5">
                    <p class="text-base lg:text-lg font-semibold pb-1">Enter Your Mobile Number</p>
                    <input wire:model="smobile" type="text" value="" placeholder="XXXXXXXXXXXX" class="w-full rounded-lg text-sm lg:text-base p-2 border-gray-400 outline-none bg-[#FBFADA] text-[#436850]">
                    <x-input-error :messages="$errors->get('smobile')" class="mt-2" />
                </div>
                <div class="w-full pt-10 lg:pt-5">
                    <p class="text-base lg:text-lg font-semibold pb-1">Enter Guardian Mobile Number</p>
                    <input wire:model="gmobile" type="text" value="" placeholder="XXXXXXXXXXXX" class="w-full rounded-lg text-sm lg:text-base p-2 border-gray-400 outline-none bg-[#FBFADA] text-[#436850]">
                    <x-input-error :messages="$errors->get('gmobile')" class="mt-2" />
                    </div>
                <div class="w-full pt-2 lg:pt-5">
                    <p class="text-base lg:text-lg font-semibold pb-1">Package</p>
                    <select wire:model.live="package_id" class="w-full rounded-lg text-sm lg:text-base p-2 border-gray-400 outline-none bg-[#FBFADA] text-[#436850]">
                        @foreach ($this->packages   as $package)
                            <option value="{{$package->id}}">{{$package->name}}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('package')" class="mt-2" />
                    </div>
                <div class="w-full pt-2 lg:pt-5">
                    <p class="text-base lg:text-lg font-semibold pb-1">Course</p>
                    <select wire:model="course_id" class="w-full rounded-lg text-sm lg:text-base p-2 border-gray-400 outline-none bg-[#FBFADA] text-[#436850]">
                        <option value="">Select</option>
                        @foreach ($this->courses   as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('course')" class="mt-2" />
                    </div>
                <button type="submit" class="btn border-none bg-[#FBFADA] hover:bg-[#adac8881] text-[#436850] hover:text-[#FBFADA] text-base lg:text-lg w-5/12 lg:w-1/3 rounded-full lg:my-5 my-6 font-bold">Submit</button>
            </div>
        </form>
        </div>
    </section>

    @script
    <script>
        $wire.on('register-success', () => {
            alert("our manegers will contact you soon.");
        });
    </script>
    @endscript

</div>
