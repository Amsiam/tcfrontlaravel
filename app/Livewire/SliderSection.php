<?php

namespace App\Livewire;

use App\Models\Slider;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SliderSection extends Component
{

    #[Computed()]
    public function sliders()  {
        return Slider::latest()->where("active",1)->get();
    }

    public function render()
    {
        return view('livewire.slider-section');
    }
}
