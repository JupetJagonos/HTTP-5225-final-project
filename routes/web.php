<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;

// Route::get('/', function () {
//     return view('welcome');
// });

// //deleted student by id
// Route::get(
//     'students/trash/{id}',
//     [StudentController::class, 'trash']
// )->name('students.trash');

// //list of temporarily deleted students
// Route::get(
//     'students/trashed',
//     [StudentController::class, 'trashed']
// )->name('students.trashed');

// // //restore a student
// Route::get(
//     'students/restore/{id}',
//     [StudentController::class, 'restore']
// )->name('students.restore');

//delete permanently


// Trash a course by ID
Route::get(
    'courses/trash/{id}',
    [CoursesController::class, 'trash']
)->name('courses.trash');

// List of temporarily deleted (soft-deleted) courses
Route::get(
    'courses/trashed',
    [CoursesController::class, 'trashed']
)->name('courses.trashed');

// Restore a trashed course
Route::get(
    'courses/restore/{id}',
    [CoursesController::class, 'restore']
)->name('courses.restore');


// Route::resource('students', StudentController::class);

//delete permanently
Route::get(
    'students/destroy/{id}',
    [StudentController::class, 'destroy']
)->name('students.destroy');



// Permanently delete a course
Route::get(
    'courses/destroy/{id}',
    [CoursesController::class, 'destroy']
)->name('courses.destroy');

//courses CRUD
Route::resource('courses', CoursesController::class);

