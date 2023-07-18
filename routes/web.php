<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountController;

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

Route::get('/', [CustomAuthController::class,'loginPage'])->middleware('guest');
// Route::get('/register', [CustomAuthController::class,'registerPage'])->middleware('AllreadyLogin');
// Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
// Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
// Route::get('/admin-dashboard', [CustomAuthController::class,'adminDashboard'])->middleware('isLogin');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::post('/create-user', '\App\Http\Controllers\Auth\RegisterController@create');

Route::get('/student-register', [StudentController::class,'studentRegistrationPage'])->middleware('isLogin');
Route::post('/create-class', [StudentController::class,'createClass'])->name('create-class');
Route::post('/student-registration', [StudentController::class,'newStudentPost'])->name('student-registration');
Route::get('/student-list', [StudentController::class,'FetchStudentList'])->middleware('isLogin');
Route::get('/student-profile-page', [StudentController::class,'StudentProfilePage'])->middleware('isLogin');


Route::get('/account-admin-page', [AccountController::class,'AccountPage'])->middleware('isLogin');
Route::get('/account-feetype-form', [AccountController::class,'AddFeeTypeForm'])->middleware('isLogin');
Route::get('/account-feetype', [AccountController::class,'FeeType'])->middleware('isLogin');
Route::post('/fee-structure-post', [AccountController::class,'AddFeeStructure'])->name('fee-structure-post');


Auth::routes();
Route::prefix("class")->middleware(['auth','is_admin'])->group(function (){
    Route::post('/create', '\App\Http\Controllers\ClassController@create')->name('new_class');
    Route::get('/create-page', '\App\Http\Controllers\ClassController@showCreatePage');
    Route::get('/show_all', '\App\Http\Controllers\ClassController@showall');
    Route::get('/show/{id}', '\App\Http\Controllers\ClassController@show');
    Route::post('/update/{id}', '\App\Http\Controllers\ClassController@update')->name('update_class');
    Route::get('/update-page/{id}', '\App\Http\Controllers\ClassController@showUpdatePage');
});

Route::prefix("parent")->middleware(['auth','is_admin'])->group(function (){
    Route::post('/create', '\App\Http\Controllers\ParentController@create')->name('new_parent');
    Route::get('/create-page', '\App\Http\Controllers\ParentController@showParentPage');
    Route::post('/show_all', '\App\Http\Controllers\ParentController@showall');
});

Route::prefix("student")->middleware(['auth','is_admin'])->group(function (){
    Route::post('/create', '\App\Http\Controllers\StudentController@create')->name('new_student');
    Route::get('/register', '\App\Http\Controllers\StudentController@register_student');
    Route::post('/show_all', '\App\Http\Controllers\StudentController@showall');
});

Route::prefix("user")->middleware(['auth','is_admin'])->group(function (){
    Route::post('/create', '\App\Http\Controllers\UserController@create')->name('new_user');
    Route::post('/create-page', '\App\Http\Controllers\UserController@showUserPage');
    Route::post('/show_all', '\App\Http\Controllers\UserController@showall');
});

Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');
