<?php

namespace App\Livewire;

use App\Models\StudentReview;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SofolSection extends Component
{
    #[Computed()]
    public function reviews()
    {
        return StudentReview::latest()->get();
    }
    public function render()
    {
        return view('livewire.sofol-section');
    }
}
