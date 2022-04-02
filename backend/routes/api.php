<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Cabinet\HomeController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => 'auth',
], static function () {
    /**
     * /api/auth/login
     * /api/auth/register
     * /api/auth/logout
     */
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [LoginController::class, 'login']);
    Route::delete('logout', [LoginController::class, 'logout']);
});

/** Auth User */
Route::group(['middleware' => 'auth:sanctum'], static function () {
    Route::get('user', static function (Request $request) {
        return new UserResource($request->user());
    });
    /**
     * /api/cabinet
     */
    Route::get('cabinet', HomeController::class);
});
