<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendanceController;

use App\Http\Controllers\Auth\DoctorController;

use App\Http\Controllers\QuizzeController;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Doctor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('dashboard/doctor', function () {
    return view('dashboard_doctor.index');
})->middleware(['auth:doctor'])->name('dashboard.doctor');



Route::group(['middleware' => 'auth:doctor'], function(){
    Route::resource('quizzes',QuizzeController::class);
    Route::resource('questions',QuestionController::class);
    
    
    Route::resource('attendance',AttendanceController::class);

   Route::get('student_quizze/{id}',[QuizzeController::class,'student_quizze'])->name('student.quizze');

   Route::post('repeat_quizze', [QuizzeController::class,'repeat_quizze'])->name('repeat.quizze');

});







// /////////////////////////////////////// logout student /////////////////////////////////////////////////////////////////

Route::post('logout/doctor', [DoctorController::class, 'destroy'])->middleware('auth:doctor')->name('doctor.logout');


//#############################################################################################




require __DIR__.'/auth.php';