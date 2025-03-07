
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('protected', [ExampleController::class, 'protectedRoute']);
Route::get('open', [ExampleController::class, 'openRoute']);

Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
