<?php

use Illuminate\Support\Facades\Session;

use Livewire\Attributes\{Layout, Title,Computed,Validate};
use Livewire\Volt\Component;
use App\Models\Student;

use Livewire\WithFileUploads;


new
#[Layout('layouts.app')]
class extends Component {
    use WithFileUploads;


    public $student;


    public function mount() {
        $this->student = Student::with(["personalDetails","academicDetails","hscSubs",
        "courses"
        ,"payments","package"])->findOrFail(auth()->user()->id);

    }


    public function getListeners()
    {
        return [
            "refresh" => '$refresh',
        ];
    }

}
?>






    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex columns-2">
                    <div class="w-1/2">
                        <div class="bg-white shadow rounded-lg p-6 dark:bg-base-100">
                            <div class="flex flex-col items-center">
                                @if ($student->image)

                                <img src="{{config('app.image_path').'/'.$student->image}}"
                                 class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0"/>

                                @endif
                                <h1 class="text-xl font-bold">{{$student->name}}</h1>
                                <p class="">
                                    Courses: {{$student->courses->pluck("name")->implode(",")}}
                                </p>
                                <p class="">
                                   Batches: {{$student->batches->pluck("name")->implode(",")}}
                                </p>

                            </div>
                            <hr class="my-6 border-t border-gray-300">
                            <div class="flex flex-col">
                            <div class="flex justify-between items-center">

                                <div class="text-gray-700 uppercase font-bold tracking-wider mb-2">Profile</div>

                <div><a class="btn btn-primary btn-sm" href="">Edit</a></div>
                            </div>
                                <table class="table table-zebra">
                                    <tr>
                                        <th>Roll</th>
                                        <td>{{$student->roll}}</th>
                                    </tr>
                                    <tr>
                                        <th>Bn_Name</th>
                                        <td>{{$student->bn_name}}</th>
                                    </tr>
                                    <tr>
                                        <th>Father name</th>
                                        <td>{{$student->personalDetails->fname}}</th>
                                    </tr>

                                    <tr>
                                        <th>Mother name</th>
                                        <td>{{$student->personalDetails->mname}}</th>
                                    </tr>

                                    <tr>
                                        <th>Date of Birth</th>
                                        <td>{{$student->personalDetails->dob}}</th>
                                    </tr>
                                    <tr>
                                        <th>Blood Group</th>
                                        <td>{{$student->personalDetails->blood}}</th>
                                    </tr>
                                    @if ($student->personalDetails->group)

                                    <tr>
                                        <th>Group</th>
                                        <td>{{$student->personalDetails->group}}</th>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th>Address</th>
                                        <td>{{$student->personalDetails->paddress}}</th>
                                    </tr>


                                    <tr>
                                        <th>Student no</th>
                                        <td>{{$student->personalDetails->smobile}}</th>
                                    </tr>

                                    <tr>
                                        <th>Gurdian no</th>
                                        <td>{{$student->personalDetails->gmobile}}</th>
                                    </tr>

                                    <tr>
                                        <th>HSC SUBS</th>
                                        <td>
                                        {{$student->hscSubs->sub1}},
                                        {{$student->hscSubs->sub2}},
                                        {{$student->hscSubs->sub3}},
                                        {{$student->hscSubs->sub4}},
                                        </th>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <x-card title="Academic Details">
                            <div class="overflow-x-scroll">
                                <table class="table table-zebra border">
                                    <thead>
                                        <tr>
                                            <th>Exam</th>
                                            <th>Board</th>
                                            <th>Institute name</th>
                                            <th>Group</th>
                                            <th>Roll No</th>
                                            <th>Passing Year</th>
                                            <th>GPA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student->academicDetails as $ad)
                                        <tr>
                                            <th>{{$ad->exam}}</th>
                                            <td>{{$ad->board}}</td>
                                            <td>{{$ad->institue}}</td>
                                            <td>{{$ad->group}}</td>
                                            <td>{{$ad->roll}}</td>
                                            <td>{{$ad->passing_year}}</td>
                                            <td>{{$ad->gpa}}</td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <th>Registration No:</th>
                                            <td colspan="6">
                                                {{$ad->registration}}
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </x-card>

                        <x-card title="Payments">
                            <div class="overflow-x-scroll">
                                <table class="table table-zebra border">
                                    <thead>
                                        <tr>
                                            <th>Transactio ID</th>
                                            <th>Payment Type</th>
                                            <th>Total</th>
                                            <th>Paid</th>
                                            <th>Discount</th>
                                            <th>Pay Type</th>
                                            <th>Pay Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($student->payments as $payment)
                                            <tr>
                                                <td>{{$payment->id}}</td>
                                                <td>
                                                    @if ($payment->paymentType==0)
                                                        Montly({{date("F",strtotime($payment->month))}})
                                                    @elseif ($payment->paymentType==1)
                                                        Due Payment
                                                    @elseif ($payment->paymentType==2)
                                                        Admission
                                                    @endif
                                                </td>
                                                <td>{{$payment->total}}</td>
                                                <td>{{$payment->paid}}</td>
                                                <td>{{$payment->discount}}</td>
                                                <td>{{$payment->payType}}</td>
                                                <td>{{$payment->created_at}}</td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8">
                                                    Not paid Yet
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>

                                </table>
                            </div>
                        </x-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
