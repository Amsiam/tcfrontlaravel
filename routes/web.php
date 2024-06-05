<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name("welcome");


Route::get('/course/{id}', function(Request $request,$id){


return view("welcome");
})->name("course");

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::view("regiester","regiester")->name("register");

require __DIR__.'/auth.php';
