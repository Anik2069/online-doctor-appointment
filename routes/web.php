<?php

use App\Http\Controllers\User\DoctorController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Http\Request as HttpRequest;
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

// admin Route
Route::get('/', function () {
    return view('admin.layouts.master');
});
Route::get('/admin/dashboard',"admin\DashboardController")->name('dashboard');




//frontend Route
Route::get('/user',"user\UserDashboardController")->name('userdefault');
Route::get('/user/home',"user\UserHomeController@userhome")->name('userhome');


//Doctor
Route::get('/doc-dashboard','user\DoctorController@docdashboard')->name('doc-dashboard');
