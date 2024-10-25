<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

use App\Http\Controllers\Api\Auth\ForgotPasswordController;


Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])
    ->middleware('throttle:10,1');

    Route::post('/reset', [ForgotPasswordController::class, 'reset']);
    

// Route pour la connexion
Route::post('/login', [AuthController::class, 'login']);



// Middleware pour les requêtes API
Route::middleware(['api', EnsureFrontendRequestsAreStateful::class])->group(function () {
    Route::post('/register', [AuthController::class, 'register']);

});
