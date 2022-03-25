<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BloodRequestController;
use App\Http\Controllers\API\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// });
Route::middleware('auth:sanctum')->group(function () {

    Route::get('profile', [UserController::class, 'index']);
    Route::post('update-profile', [UserController::class, 'update']);
    Route::get('blood-bank', [UserController::class, 'bloodbank']);
    Route::get('hospital', [UserController::class, 'hospital']);
    Route::get('blood-request', [BloodRequestController::class, 'index']);
    Route::get('all-notification',[BloodRequestController::class,'notifications']);
    Route::post('create-blood-request', [BloodRequestController::class, 'store']);
    Route::post('changepswd', [AuthController::class, 'changepswd']);
    Route::get('history', [UserController::class, 'donationhistory']);
    Route::post('accept-request',[BloodRequestController::class,'acceptrequest']);
});

Route::get('all-user', [UserController::class, 'getdata']);
Route::get('checkemail', [AuthController::class, 'checkemail']);
Route::post('signup', [AuthController::class, 'register']);
Route::post('signin', [AuthController::class, 'login']);
Route::post('forgot-password', [AuthController::class, 'forgot']);
Route::post('reset-password', [AuthController::class, 'reset']);
