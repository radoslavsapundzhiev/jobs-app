<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Get all jobs
Route::get('/', [JobController::class, 'index']);

// Show create form
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// Store Job
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// Show edit form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth');

// Update job
Route::put('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');

// Delete job
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');

// Manage jobs
Route::get('/jobs/manage', [JobController::class, 'manage'])->middleware('auth');

// Get single job
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create user
Route::post('/users', [UserController::class, 'store']);

// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
