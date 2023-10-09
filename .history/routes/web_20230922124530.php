<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\Student_subjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentSubjectController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::resource('student',StudentController::class);
route::resource('subject',SubjectController::class);
route::resource('house',HouseController::class);
route::resource('grade',GradeController::class);
route::resource('student.subject',StudentSubjectController::class);

