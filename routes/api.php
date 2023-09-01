<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\EselonController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return response()->json(['api_version' => config('app.version')]);
});

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthenticatedSessionController::class, 'user']);
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

    Route::middleware('role:Admin')->group(function () {
        Route::prefix('/bidang')->group(function () {
            Route::get('/', [BidangController::class, 'index']);
            Route::post('/', [BidangController::class, 'store']);
            Route::get('/{bidang}', [BidangController::class, 'show']);
            Route::put('/{bidang}', [BidangController::class, 'update']);
            Route::delete('/{bidang}', [BidangController::class, 'destroy']);
        });

        Route::prefix('/eselon')->group(function () {
            Route::get('/', [EselonController::class, 'index']);
            Route::post('/', [EselonController::class, 'store']);
            Route::get('/{eselon}', [EselonController::class, 'show']);
            Route::put('/{eselon}', [EselonController::class, 'update']);
            Route::delete('/{eselon}', [EselonController::class, 'destroy']);
        });
    });
});
