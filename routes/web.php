<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('projects', ProjectController::class)
->parameters(['projects' => 'project'])
->names('projects');; //   ===
// Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
// Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
// Route::patch('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
// Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
// Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
// Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('contact.store');

Auth::routes();

