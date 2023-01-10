<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KlassController;
use App\Http\Controllers\Admin\StudentController;
use App\Models\Klass;
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
    Route::get('/klasses', [KlassController::class, 'index'])->name('admin.klasses.index');
    Route::get('/klasses/create', [KlassController::class,'create'])->name('admin.klasses.create');
    Route::post('/klasses', [KlassController::class,'store'])->name('admin.klasses.store');
    Route::get('/klasses/{id}/edit', [KlassController::class, 'edit'])->name('admin.klasses.edit');
    Route::put('/klasses/{id}', [KlassController::class, 'update'])->name('admin.klasses.update');
    Route::delete('/klasses/{id}', [KlassController::class, 'destroy'])->name('admin.klasses.destroy');

});

Route::get('/', function () {
    return view('welcome');
});
