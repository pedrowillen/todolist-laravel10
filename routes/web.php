<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tasks/tasks', [TaskController::class, 'index'])->name('task.view');
Route::get('/tasks/new', [TaskController::class, 'create'])->name('task.create');
Route::get('/tasks/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::get('/tasks/delete', [TaskController::class, 'delete'])->name('task.delete');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

