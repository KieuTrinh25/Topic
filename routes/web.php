<?php

use App\Http\Controllers\Admin\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\KlassController;
use App\Http\Controllers\Admin\SchoolYearController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
 
     /**
     * admin Studens
     */
    Route::get('/student', [StudentController::class,'index'])->name('admin.student.index');
    Route::get('/student/create', [StudentController::class, 'create'])->name('admin.student.create');
    Route::get('/student/edit', [StudentController::class, 'edit'])->name('admin.student.edit');
     /**
     * admin Activities
     */

    Route::get('/activities', [ActivityController::class,'index'])->name('admin.activities.index');
    Route::get('/activities/create', [ActivityController::class, 'create'])->name('admin.activities.create');
    Route::post('/activities', [ActivityController::class, 'store'])->name('admin.activities.store');
    
    Route::get('/activities/{id}/edit', [ActivityController::class, 'edit'])->name('admin.activities.edit');
    Route::put('/activities/{id}', [ActivityController::class, 'update'])->name('admin.activities.update');
    Route::delete('/activities/{id}', [ActivityController::class, 'destroy'])->name('admin.activities.destroy');


     /**
     * admin klass
     */
    Route::get('/klass', [KlassController::class,'index'])->name('admin.klass.index');
    Route::get('/klass/create', [KlassController::class, 'create'])->name('admin.klass.create');
    Route::get('/klass/edit', [KlassController::class, 'edit'])->name('admin.klass.edit');
    
     /**
     * admin schoolyears
     */
    Route::get('/schoolyears', [SchoolYearController::class,'index'])->name('admin.schoolyears.index');
    Route::get('/schoolyears/create', [SchoolYearController::class, 'create'])->name('admin.schoolyears.create');
    Route::post('/schoolyears', [SchoolYearController::class, 'store'])->name('admin.schoolyears.store');
    
    Route::get('/schoolyears/{id}/edit', [SchoolYearController::class, 'edit'])->name('admin.schoolyears.edit');
    Route::put('/schoolyears/{id}', [SchoolYearController::class, 'update'])->name('admin.schoolyears.update');
    Route::delete('/schoolyears/{id}', [SchoolYearController::class, 'destroy'])->name('admin.schoolyears.destroy');

     /**
     * admin semesters
     */
    Route::get('/semester', [SemesterController::class,'index'])->name('admin.semesters.index');
    Route::get('/semester/create', [SemesterController::class, 'create'])->name('admin.semesters.create');
    Route::post('/semester', [SemesterController::class, 'store'])->name('admin.semesters.store');
    
    Route::get('/semester/{id}/edit', [SemesterController::class, 'edit'])->name('admin.semesters.edit');
    Route::put('/semester/{id}', [SemesterController::class, 'update'])->name('admin.semesters.update');
    Route::delete('/semester/{id}', [SemesterController::class, 'destroy'])->name('admin.semesters.destroy');

/**
     * admin Faculty
     */
    Route::get('/faculty', [FacultyController::class,'index'])->name('admin.faculty.index');
    Route::get('/faculty/create', [FacultyController::class, 'create'])->name('admin.faculty.create');
    Route::get('/faculty/edit', [FacultyController::class, 'edit'])->name('admin.faculty.edit');

});

Route::get('/', function () {
    return view('welcome');
});
