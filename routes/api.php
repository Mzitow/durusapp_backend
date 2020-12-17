<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControllers\UserGroupController;
use App\Http\Controllers\ApiControllers\UserController;
use App\Http\Controllers\ApiControllers\CategoryController;
use App\Http\Controllers\ApiControllers\CountryController;
use App\Http\Controllers\ApiControllers\FieldController;
use App\Http\Controllers\ApiControllers\ScholarController;
use App\Http\Controllers\ApiControllers\DarsTypeController;
use App\Http\Controllers\ApiControllers\DarsController;
use App\Http\Controllers\ApiControllers\QuestionController;
use App\Http\Controllers\ApiControllers\StudentController;
use App\Http\Controllers\ApiControllers\RoadMapController;
use App\Http\Controllers\ApiControllers\ScholarCategoryController;
use App\Http\Controllers\ApiControllers\ShortMessegeController;
use App\Http\Controllers\ApiControllers\StudentDarsFollowController;
use App\Http\Controllers\ApiControllers\StudentScholarFollowController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('usersgroup',UserGroupController::class);

Route::resource('users',UserController::class);

Route::post('login',[UserController::class,'login']);

Route::apiResource('categories',CategoryController::class);

Route::resource('countries',CountryController::class);

Route::resource('fields',FieldController::class);

Route::resource('scholars',ScholarController::class);

Route::resource('lessontypes',DarsTypeController::class);

Route::resource('lessons',DarsController::class);

Route::resource('lessonaudios',LessonAdioController::class);

Route::resource('questions',QuestionController::class);

Route::resource('students',StudentController::class);

Route::resource('roadmaps',RoadMapController::class);

Route::resource('/scholarcategories',ScholarCategoryController::class);

Route::resource('/shortmessages',ShortMessegeController::class);

Route::resource('/studentlessonfollow',StudentDarsFollowController::class);

Route::resource('/studentattendance',StudentAttendanceController::class);

Route::resource('/studentscholarfollowers',StudentScholarFollowController::class);

