<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/auth/register', [AuthController::class, 'getData'])->middleware(['auth:sanctum', 'abilities:pasien']);
Route::post('/auth/register', [AuthController::class, 'registerPasien']);
Route::post('/auth/login', [AuthController::class, 'loginPasien']);
Route::post('/auth/logout', [AuthController::class, 'logoutPasien'])->middleware(['auth:sanctum', 'abilities:pasien']);
Route::apiResource('/account', AccountController::class)->middleware(['auth:sanctum', 'abilities:pasien']);
