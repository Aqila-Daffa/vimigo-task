<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;

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

Route::get("student", [StudentController::class, 'getStudentData']);

Route::post("staff-register", [StaffController::class, 'register']);
Route::post("staff-login", [StaffController::class, 'login']);
Route::post("staff-logout", [StaffController::class, 'logout']);
Route::get("staff-search/{student}", [StudentController::class, 'search']);

