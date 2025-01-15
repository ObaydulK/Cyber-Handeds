<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\IntranStudentListController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/project', [ComponentController::class, 'project'])->name('project') ;
Route::get('/blog', [ComponentController::class, 'blog'])->name('blogs');
Route::get('/ourteam', [ComponentController::class,'ourteam'])->name('ourteam.view') ;

// ----------------------------------old student form----------------------------------


Route::resource('students', StudentController::class) ;
Route::get('/student/table', [StudentController::class, 'index'])->name('student.table') ; 










 