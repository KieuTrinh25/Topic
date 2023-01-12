<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImportStudentController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\KlassController;
use App\Http\Controllers\Admin\SchoolYearController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\StudentController;
use App\Models\Klass;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;

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
Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    /**
     * admin Activity
     */

    Route::get('/activities', [ActivityController::class, 'index'])->name('admin.activities.index');
    Route::get('/activities/create', [ActivityController::class, 'create'])->name('admin.activities.create');
    Route::post('/activities', [ActivityController::class, 'store'])->name('admin.activities.store');

    Route::get('/activities/{id}/edit', [ActivityController::class, 'edit'])->name('admin.activities.edit');
    Route::put('/activities/{id}', [ActivityController::class, 'update'])->name('admin.activities.update');
    Route::delete('/activities/{id}', [ActivityController::class, 'destroy'])->name('admin.activities.destroy');
    Route::get('/activities/qr/{id}', [ActivityController::class,'qrCode'])->name('andmin.activities.qrcode');
    
    /**
     * admin Student
     */
    Route::get('/students', [StudentController::class, 'index'])->name('admin.students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('admin.students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('admin.students.store');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('admin.students.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('admin.students.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('admin.students.destroy');
    Route::get('/students/qr/{id}', [StudentController::class,'qrCode'])->name('andmin.students.qrCode');

 
      /**
     * admin klass
     */

   
    Route::get('/klass', [KlassController::class, 'index'])->name('admin.klasses.index');
    Route::get('/klass/create', [KlassController::class,'create'])->name('admin.klasses.create');
    Route::post('/klass', [KlassController::class,'store'])->name('admin.klasses.store');
    Route::get('/klass/{id}/edit', [KlassController::class, 'edit'])->name('admin.klasses.edit');
    Route::put('/klass/{id}', [KlassController::class, 'update'])->name('admin.klasses.update');
    Route::delete('/klass/{id}', [KlassController::class, 'destroy'])->name('admin.klasses.destroy');

    /**
     * admin schoolyears
     */
    Route::get('/semesters', [SemesterController::class, 'index'])->name('admin.semesters.index');
    Route::get('/semesters/create', [SemesterController::class,'create'])->name('admin.semesters.create');
    Route::post('/semesters', [SemesterController::class,'store'])->name('admin.semesters.store');
    Route::get('/semesters/{id}/edit', [SemesterController::class, 'edit'])->name('admin.semesters.edit');
    Route::put('/semesters/{id}', [SemesterController::class, 'update'])->name('admin.semesters.update');
    Route::delete('/semesters/{id}', [SemesterController::class, 'destroy'])->name('admin.semesters.destroy');

    /**
     * admin schoolyears
     */
    Route::get('/schoolyears', [SchoolYearController::class, 'index'])->name('admin.schoolyears.index');
    Route::get('/schoolyears/create', [SchoolYearController::class,'create'])->name('admin.schoolyears.create');
    Route::post('/schoolyears', [SchoolYearController::class,'store'])->name('admin.schoolyears.store');
    Route::get('/schoolyears/{id}/edit', [SchoolYearController::class, 'edit'])->name('admin.schoolyears.edit');
    Route::put('/schoolyears/{id}', [SchoolYearController::class, 'update'])->name('admin.schoolyears.update');
    Route::delete('/schoolyears/{id}', [SchoolYearController::class, 'destroy'])->name('admin.schoolyears.destroy');


      
    // Route::get('/students', [ImportStudentController::class, 'importBlade']);
    Route::post('/students', [ImportStudentController::class, 'import'])->name('import');
    /*
     * admin faculty
     */
    Route::get('/faculties', [FacultyController::class, 'index'])->name('admin.faculties.index');
    Route::get('/faculties/create', [FacultyController::class, 'create'])->name('admin.faculties.create');
    Route::post('/faculties', [FacultyController::class, 'store'])->name('admin.faculties.store');

    Route::get('/faculties/{id}/edit', [FacultyController::class, 'edit'])->name('admin.faculties.edit');
    Route::put('/faculties/{id}', [FacultyController::class, 'update'])->name('admin.faculties.update');
    Route::delete('/faculties/{id}', [FacultyController::class, 'destroy'])->name('admin.faculties.destroy');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware' => ['auth']], function() {
    Route::resource('/roles', RoleController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/permissions', PermissionController::class);
});