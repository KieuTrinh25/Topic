<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KlassController;
use App\Http\Controllers\Admin\SchoolYearController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');

     /**
     * admin Studens
     */
    Route::get('/students', [StudentController::class,'index'])->name('admin.students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('admin.students.create');

     /**
     * admin Activities
     */
    Route::get('/activitie', [ActivityController::class,'index'])->name('admin.activities.index');
    Route::get('/activities/create', [ActivityController::class, 'create'])->name('admin.activities.create');
     /**
     * admin klass
     */
    Route::get('/klass', [KlassController::class,'index'])->name('admin.klass.index');
    Route::get('/klass/create', [KlassController::class, 'create'])->name('admin.klass.create');
     /**
     * admin schoolyears
     */
    Route::get('/schoolyears', [SchoolYearController::class,'index'])->name('admin.schoolyears.index');
    Route::get('/schoolyears/create', [SchoolYearController::class, 'create'])->name('admin.schoolyears.create');
     /**
     * admin semesters
     */
    Route::get('/semesters', [SemesterController::class,'index'])->name('admin.semesters.index');
    Route::get('/semesters/create', [SemesterController::class, 'create'])->name('admin.semesters.create');
   

});

Route::get('/', function () {
    return view('welcome');
});
