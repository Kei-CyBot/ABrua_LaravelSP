<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Home Route
Route::get('/', [StudentController::class, 'home'])->name('home');

// Student Routes (Index, Create, Store, Show, Edit, Update)
Route::resource('students', StudentController::class);


