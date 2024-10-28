<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolSubjectController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

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
    Route::get('/materia', [MateriaController::class, 'index'])->name('materia.index');
});

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/school-subject/create', [SchoolSubjectController::class, 'create'])->name('school-subject.create');
    Route::get('/school-subject/manage', [SchoolSubjectController::class, 'manage'])->name('school-subject.manage');
});

require __DIR__ . '/auth.php';