<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminController,CollegeController,ClassroomController,SectionController ,StudentController};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard/admin', function () {
    return view('index');
})->middleware(['auth:admin'])->name('dashboard.admin');

Route::resource('admins',AdminController::class);
Route::resource('colleges',CollegeController::class);
Route::resource('classrooms',ClassroomController::class);
Route::resource('sections',SectionController::class);
Route::resource('students',StudentController::class);


Route::get('/classes/{id}', [SectionController::class , 'getclasses'])->name('classes');
Route::get('/getsection/{id}', [SectionController::class , 'getsection'])->name('getsection');





require __DIR__.'/auth.php';
