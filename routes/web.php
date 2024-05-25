<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

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

// Get single job
Route::get('/jobs/{job}', [JobController::class, 'show']);
