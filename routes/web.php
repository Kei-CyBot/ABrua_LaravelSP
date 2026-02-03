<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'home'])->name('home');

Route::resource('students', StudentController::class);


