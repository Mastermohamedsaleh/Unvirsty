<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AdminController,
    CollegeController,
    ClassroomController,
    SectionController ,
    StudentController,
    DoctorController,
    PromotionController,
    GraduatedController,
    FeeController,
    FeeInvoicesController,
    ReceiptStudentController,
    SubjectController,
    DoctorCollegeController
};

use App\Http\Controllers\Auth\AdminAuthController;


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




Route::middleware(['auth:admin'])->group(function () {


Route::resource('admins',AdminController::class);
Route::resource('colleges',CollegeController::class);
Route::resource('classrooms',ClassroomController::class);
Route::resource('sections',SectionController::class);
Route::resource('students',StudentController::class);
Route::resource('doctors',DoctorController::class);
Route::resource('promotion',PromotionController::class);
Route::resource('graduated',GraduatedController::class);
Route::resource('fee',FeeController::class);
Route::resource('fee_invoices',FeeInvoicesController::class);
Route::resource('receipt',ReceiptStudentController::class);
Route::resource('subject',SubjectController::class);
Route::resource('doctors_college',DoctorCollegeController::class);









});



Route::get('/classes/{id}', [SectionController::class , 'getclasses'])->name('classes');
Route::get('/getsection/{id}', [SectionController::class , 'getsection'])->name('getsection');

// ////////////////////////////////logout adminP///////////////////////////////////////////
Route::post('/logout/admin', [AdminAuthController::class, 'destroy'])->middleware('auth:admin')->name('admin.logout');
/////////////////////////////////logout admin/////////////////////////////////////////////




require __DIR__.'/auth.php';
