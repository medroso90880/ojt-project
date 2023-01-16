<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;

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

Route::get('/',[UserController::class, 'welcome']);
Route::get('/home',[UserController::class, 'home']);

Route::get('/student-info/{studentinfo}', [UserController::class, 'personalInfo']);
Route::get('/student-health/{studentinfo}', [UserController::class, 'health']);
Route::get('/student-educational-background/{studentinfo}', [UserController::class, 'educationalBg']);
Route::get('/student-info/self-assessment/{studentinfo}', [UserController::class, 'selftAssessment']);
Route::get('/student-info/psych-test/{studentinfo}', [UserController::class, 'psychTest']);
Route::get('/student-info/counselors-notes/{studentinfo}', [UserController::class, 'counselor']);
//store personal info
Route::POST('/store/personal-info',[StoreController::class, 'storePersonalInfo']);
Route::POST('/store/family-bg',[StoreController::class, 'familyBg']);

//edit
Route::get('/student/edit/personal-info/', [EditController::class, 'personalinfo']);
Route::get('/student/edit/health/{studentinfo}', [EditController::class, 'health']);
Route::get('/student/edit/education/{studentinfo}', [EditController::class, 'education']);
Route::get('/student/edit/self-assessment/{studentinfo}', [EditController::class, 'selfAssessment']);
Route::get('/student/edit/psychtest/{studentinfo}', [EditController::class, 'psychTest']);
Route::get('/student/edit/counselors-notes/{studentinfo}', [EditController::class, 'counselNotes']);

Route::get('/auth/google/redirect', [AuthController::class, 'redirect']);
Route::get('/auth/google/callback', [AuthController::class, 'callback']);

Route::get('/auth/google/redirect/student', [AuthController::class, 'redirectStudent']);
Route::get('/auth/google/callback/student', [AuthController::class, 'callbackStudent']);

