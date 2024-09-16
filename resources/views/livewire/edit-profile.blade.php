<?php

use Illuminate\Support\Facades\Session;

use Livewire\Attributes\{Layout, Title,Computed,Validate};
use Livewire\Volt\Component;
use App\Models\ExpenseCategory;
use App\Models\Student;
use App\Models\AcademicYear;


use App\Models\Payment;

use Livewire\WithFileUploads;


new
#[Layout('layouts.app')]
#[Title("Groups")]
class extends Component {
    use WithFileUploads;


    public $student;
    public $payment;


    public function mount() {
        $this->student = Student::with(["personalDetails","academicDetails","hscSubs"])->findOrFail(auth()->user()->id);

    }


    public function getListeners()
    {
        return [
            "refresh" => '$refresh',
        ];
    }

}
?>






    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            </div>
        </div>
    </div>
