<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
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
