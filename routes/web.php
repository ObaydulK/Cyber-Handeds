<?php

use App\Http\Controllers\ComponentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/project', [ComponentController::class, 'project'])->name('project') ;
Route::get('/blog', [ComponentController::class, 'blog'])->name('blogs');
Route::get('/ourteam', [ComponentController::class,'ourteam'])->name('ourteam.view') ;
Route::get('/ourstudentlist', [ComponentController::class, 'ourstudentlist'])->name('ourstudentlist') ;















 