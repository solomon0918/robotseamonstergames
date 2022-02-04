<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SurveyController;
use App\Http\Controllers\Api\UserSurveyController;

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

// Route::post('surveys/{survey}/store', [SurveyController::class, 'storeUserSurvey'])->name('surveys.user.store');
Route::apiResource('user-surveys', Api\UserSurveyController::class)->only(['store']);
Route::apiResource('surveys', Api\SurveyController::class)->only(['index', 'show']);
// Route::apiResources([
//     'users' => Api\UserController::class,
//     'surveys' => Api\SurveyController::class
// ]);