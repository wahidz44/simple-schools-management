<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\EnrollController;



Route::get('/',[HomeController::class, 'home'])->name('/');
Route::get('/course-details/{id}',[HomeController::class, 'courseDetails'])->name('course-details');

Route::post('/course-enroll', [EnrollController::class, 'enrollCourse'])->name('course-enroll');
