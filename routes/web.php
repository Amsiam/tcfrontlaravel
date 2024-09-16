<?php

use App\Livewire\AllPrograms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome')->name("welcome");


Route::view('/allcourse', "allcourse")->name("allcourse");


Route::get('/course/{id}', function(Request $request,$id){


return view("welcome");
})->name("course");

Volt::route('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::view("regiester","regiester")->name("register");

require __DIR__.'/auth.php';
