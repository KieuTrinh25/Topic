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
    Route::get('/activitie', [ActivityController::class,'index'])->name('admin.activities.index');
    Route::get('/activitie/create', [ActivityController::class, 'create'])->name('admin.activities.create');
    Route::get('/activitie/edit', [ActivityController::class, 'edit'])->name('admin.activitie.edit');
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
    Route::get('/schoolyears/edit', [SchoolYearController::class, 'edit'])->name('admin.schoolyears.edit');
    
     /**
     * admin semesters
     */
    Route::get('/semester', [SemesterController::class,'index'])->name('admin.semesters.index');
    Route::get('/semester/create', [SemesterController::class, 'create'])->name('admin.semesters.create');
    Route::get('/semester/edit', [SemesterController::class, 'edit'])->name('admin.semesters.edit');
   
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
