<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\FileController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("student", [StudentController::class, 'getStudentData']);
Route::get("search/{student}", [StudentController::class, 'search']);

Route::post("staff-register", [StaffController::class, 'register']);
Route::post("staff-login", [StaffController::class, 'login'])->name('login');
Route::post("staff-logout", [StaffController::class, 'logout']);
Route::post("staff-search", [StaffController::class, 'search']);
Route::post("staff-upload-student", [FileController::class, 'upload']);
 