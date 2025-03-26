<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);