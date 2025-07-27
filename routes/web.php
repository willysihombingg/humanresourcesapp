<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Handle Employee
Route::resource('/employees', EmployeeController::class);

// Handle Tasks
Route::resource('/tasks', TasksController::class);
Route::get('tasks/done/{id}', [TasksController::class,'done'])->name('tasks.done');
Route::get('tasks/pending/{id}', [TasksController::class,'pending'])->name('tasks.pending');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
