<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
) ->name('students.trash');

Route::get(
    'students/trashed',
    [StudentController::class, 'trashed']
) ->name('students.trashed');

Route::get(
    'students/restore/{id}',
    [StudentController::class, 'restore']
) ->name('students.restore');

// get request
Route::get('students', function () {
    return view();
});

// localhost student => index
Route:: resource('students', StudentController::class);

Route::get(
    'students/destroy/{id}',
    [StudentController::class,'destroy']
) ->name('students.destroy');


// add courses

Route::get(
    'courses/trash/{id}',
    [CourseController::class, 'trash']
) ->name('courses.trash');

Route::get(
    'courses/trashed',
    [CourseController::class, 'trashed']
) ->name('courses.trashed');

Route::get(
    'courses/restore/{id}',
    [CourseController::class, 'restore']
) ->name('courses.restore');

// get request
Route::get('courses', function () {
    return view();
});

// localhost course => index
Route:: resource('courses', CourseController::class);

Route::get(
    'courses/destroy/{id}',
    [CourseController::class,'destroy']
) ->name('courses.destroy');

