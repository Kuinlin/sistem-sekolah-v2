<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;  
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Managemen Siswa
Route::name('students.')->prefix('students')->group(function() {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/{id}', function($id) {
        return "Menampilkan detail siswa dengan ID: {$id}";
    })->name('show');
});

// Teacher Management
Route::name('teachers.')->prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});