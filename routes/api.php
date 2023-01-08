<?php

use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Api\KlassController;
use App\Http\Controllers\Api\FacultyController;
use App\Http\Controllers\Api\SchoolYearController;
use App\Http\Controllers\Api\ActivityController; 
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Năm học
Route::get('/schoolYears', [SchoolYearController::class, 'index']);
Route::get('/schoolYears/{id}', [SchoolYearController::class, 'show']);
Route::post('/schoolYears', [SchoolYearController::class, 'store']);
Route::put('/schoolYears/{id}', [SchoolYearController::class, 'update']);
Route::delete('/schoolYears/{id}', [SchoolYearController::class, 'destroy']);

// Khoa
Route::get('/faculties', [FacultyController::class, 'index']);
Route::get('/faculties/{id}', [FacultyController::class, 'show']);
Route::post('/faculties', [FacultyController::class, 'store']);
Route::put('/faculties/{id}', [FacultyController::class, 'update']);
Route::delete('/faculties/{id}', [FacultyController::class, 'destroy']);
// Lớp
Route::get('/klasses', [KlassController::class, 'index']);
Route::get('/klasses/{id}', [KlassController::class, 'show']);
Route::post('/klasses', [KlassController::class, 'store']);
Route::put('/klasses/{id}', [KlassController::class, 'update']);
Route::delete('/klasses/{id}', [KlassController::class, 'destroy']);


Route::Get('/activity', [ActivityController::class, 'index']);
Route::Get('/activity/{id}', [ActivityController::class, 'show']);
Route::Post('/activity', [ActivityController::class, 'store']);
Route::Put('/activity/{id}', [ActivityController::class, 'show']);
Route::Delete('/activity/{id}', [ActivityController::class, 'destroy']);

//học kỳ
Route::Get('/semester', [SemesterController::class, 'index']);
Route::Get('/semester/{id}', [SemesterController::class, 'show']);
Route::Post('/semester', [SemesterController::class, 'store']);
Route::Put('/semester/{id}', [SemesterController::class, 'show']);
Route::Delete('/semester/{id}', [SemesterController::class, 'destroy']);
 
