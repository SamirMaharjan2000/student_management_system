<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:5,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register');
});


Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard')->middleware('throttle:5,1');
    Route::get('home',[AuthController::class,'dashboard'])->name('dashboard')->middleware('throttle:5,1');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    Route::get('registration',[StudentController::class,'create'])->name('registration');
    Route::get('student',[StudentController::class,'index'])->name('student');
    Route::post('student',[StudentController::class,'store'])->name('student');
    Route::get('deletestudentinfo/{id}',[StudentController::class,'destroy'])->name('remove');
    Route::get('/editstudentinfo/{id}',[StudentController::class,'edit']);
    Route::put('update-student/{id}',[StudentController::class,'update']);
    Route::get('viewprofile/{id}',[StudentController::class,'show']);
    Route::get('exam',[ExamController::class,'index'])->name('exam');
    Route::get('exam',[ExamController::class,'create'])->name('exam');
    Route::post('exam',[ExamController::class,'store'])->name('exam');
    Route::get('/deleteexaminfo/{id}',[ExamController::class,'destroy'])->name('remove');
    Route::get('/editexaminfo/{id}',[ExamController::class,'edit']);
    Route::put('update-exam/{id}',[ExamController::class,'update']);
    Route::get('registeredstud',[ExamController::class,'index'])->name('registeredstud');
    Route::post('registeredstud',[ExamController::class,'store'])->name('registeredstud');
    Route::get('examprofile/{id}',[ExamController::class,'show'])->name('examprofile');
});

