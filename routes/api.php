<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Get all posts
Route::get('/posts', [PostController::class, 'index']);

// Add a new post
Route::post('/posts', [PostController::class, 'store']);

// Update an existing post
Route::put('/posts/{id}', [PostController::class, 'update']);

// Delete a post
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// If you want to retrieve a single post by its ID, you can add this:
Route::get('/posts/{id}', [PostController::class, 'show']);
