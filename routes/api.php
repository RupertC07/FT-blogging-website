<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('user')->group(function () {
    Route::post('register', [UserController::class, 'register']); // User registration
    Route::post('login', [UserController::class, 'login']);       // User login
});




Route::prefix('blogs')->middleware('auth:sanctum')->group(function () {
    Route::post('/', [BlogController::class, 'create']);
    Route::put('/{id}', [BlogController::class, 'update']);
    Route::delete('/{id}', [BlogController::class, 'delete']);
    Route::get('/', [BlogController::class, 'getAll']);
    Route::get('/{id}', [BlogController::class, 'show']);
});