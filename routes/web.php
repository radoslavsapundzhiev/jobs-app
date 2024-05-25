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
Route::get('/jobs/create', [JobController::class, 'create']);

// Store Job
Route::post('/jobs', [JobController::class, 'store']);

// Show edit form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Update job
Route::put('/jobs/{job}', [JobController::class, 'update']);

// Delete job
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Get single job
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create']);

// Create user
Route::post('/users', [UserController::class, 'store']);

// Logout user
Route::post('/logout', [UserController::class, 'logout']);

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);