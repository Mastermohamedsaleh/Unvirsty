<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\StudentController;




Route::get('dashboard/student', function () {
    return view('dashboard_student.index');
})->middleware(['auth:student'])->name('dashboard.student');























// /////////////////////////////////////// logout student /////////////////////////////////////////////////////////////////

Route::post('logout/student', [StudentController::class, 'destroy'])->middleware('auth:student')->name('student.logout');


//#############################################################################################




require __DIR__.'/auth.php';
