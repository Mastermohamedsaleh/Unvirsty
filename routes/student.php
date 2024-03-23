<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\StudentController;

use App\Http\Controllers\Student\QuizController;
use App\Http\Controllers\Student\ExamScheduleStudentController;  
use App\Http\Controllers\Student\FeeController;  
use App\Http\Controllers\Student\LectureStudentController;  
use App\Http\Controllers\Student\ScheduleController;  
use App\Http\Controllers\Student\AssignmentController;  
use App\Http\Controllers\CalenderController;  




// Route::get('dashboard/student', function () {
//     return view('dashboard_student.index');
// })->middleware(['auth:student'])->name('dashboard.student');

Route::middleware(['auth:student'])->group(function () { 


    Route::get('dashboard/student',[CalenderController::class, 'student']);


    Route::resource('student_quiz', QuizController::class);
    
    
    Route::controller(LectureStudentController::class)->group(function() {  
        
        Route::get('lecturestudent', 'LectureStudent')->name('lecturestudent');
        Route::get('viewlecture/{id}', 'viewLecture')->name('viewlecture');
        
    
    
    });
    
    
       Route::controller(ScheduleController::class)->group(function() {  
        Route::get('search_receipt','SearchReceipt');
        });

       Route::controller(AssignmentController::class)->group(function() {  
           Route::get('view_assignment','index');
           Route::get('show_assignment/{id}','show');
           Route::get('show_pdf/{id}','show_pdf');
           Route::post('uploadassignment/{course_id}','uploadassignment');
       });
    
    
    Route::controller(FeeController::class)->group(function() {   
        Route::get('fee_student', 'index');
        Route::get('details_fee_student', 'Details');
    });
    
    
    Route::controller(ScheduleController::class)->group(function() {  
        Route::get('showexamschedule', 'examschedule');
        Route::get('showstudychedule', 'studyschedule');
    });
    
    Route::get('full-calender-student', [CalenderController::class, 'student']);





});




// /////////////////////////////////////// logout student /////////////////////////////////////////////////////////////////

Route::post('logout/student', [StudentController::class, 'destroy'])->middleware('auth:student')->name('student.logout');


//#############################################################################################




require __DIR__.'/auth.php';
