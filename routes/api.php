<?php

use App\Http\Controllers\DoctorsDutyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TokenStatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/{services}', [ServicesController::class, 'show']);

Route::get('/token-status', [TokenStatusController::class, 'index']);
Route::get('/token-status/{tokenstatus}', [TokenStatusController::class, 'show']);

Route::get('/doctors-duty', [DoctorsDutyController::class, 'index']);
Route::get('/doctors-duty/{doctorsduty}', [DoctorsDutyController::class, 'show']);
