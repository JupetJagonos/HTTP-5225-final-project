<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacultyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});

//deleted student by id
Route::get(
    'students/trash/{id}', 
    [StudentController::class, 'trash']
)->name('students.trash');

//list of temporarily deleted students
Route::get(
    'students/trashed', 
    [StudentController::class, 'trashed']
)->name('students.trashed');

//restore a student
Route::get(
    'students/restore/{id}', 
    [StudentController::class, 'restore']
)->name('students.restore');

//delete permanently


// Trash a course by ID
Route::get(
    'courses/trash/{id}', 
    [CourseController::class, 'trash']
)->name('courses.trash');

// List of temporarily deleted (soft-deleted) courses
Route::get(
    'courses/trashed', 
    [CourseController::class, 'trashed']
)->name('courses.trashed');

// Restore a trashed course
Route::get(
    'courses/restore/{id}', 
    [CourseController::class, 'restore']
)->name('courses.restore');


Route::resource('students', StudentController::class);

//delete permanently
Route::get(
    'students/destroy/{id}', 
    [StudentController::class, 'destroy']
)->name('students.destroy')->middleware('auth'); 




//courses CRUD
Route::resource('courses', CourseController::class);

// Permanently delete a course
Route::get(
    'courses/destroy/{id}', 
    [CourseController::class, 'destroy']
)->name('courses.destroy');

require __DIR__.'/auth.php';

Route::resource('faculties', FacultyController::class);
