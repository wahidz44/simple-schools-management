<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Front\EnrollController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');

    // Custom User Routes
    Route::middleware('is_admin')->group(function (){
        Route::resource('users', UserController::class);
        Route::get('/change-user-status/{id}',[UserController::class, 'changeStatus'])->name('users.change-status');

        Route::get('/manage-enroll', [EnrollController::class, 'manage'])->name('manage-enroll');
        Route::get('/change-payment-status/{id}', [EnrollController::class, 'changeStatus'])->name('change-payment-status');
    });


    Route::get('/edit-profile',[AdminController::class, 'editProfile'])->name('edit-profile');
    Route::post('/update-profile',[AdminController::class, 'updateProfile'])->name('update-profile');

    // Courses  Routes
    Route::resource('courses', CourseController::class)->middleware('admin_teacher');

    Route::get('courses/change-status/{id}', [CourseController::class,'changeStatus'])->name('courses.change-status');

});
