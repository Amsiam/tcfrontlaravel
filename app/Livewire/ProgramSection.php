<?php

namespace App\Livewire;

use App\Models\Classs;
use App\Models\Course;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProgramSection extends Component
{

    public $classs = "";
    public $type = "";

    #[Computed()]
    public function courses() {

        return Course::when($this->classs,function($q){
            return $q->where("classs_id",$this->classs);
        })->when($this->type,function($q){
            return $q->where("type",$this->type);
        })->get();

    }

    #[Computed()]
    public function classes() {

        return Classs::all();

    }

    public function render()
    {
        return view('livewire.program-section');
    }
}
