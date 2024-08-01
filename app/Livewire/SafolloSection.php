<?php

namespace App\Livewire;

use App\Models\Slider;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SafolloSection extends Component
{
    #[Computed()]
    public function sliders()
    {
        return Slider::latest()->where("active", 1)->where("type", 2)->get();
    }
    public function render()
    {
        return view('livewire.safollo-section');
    }
}
