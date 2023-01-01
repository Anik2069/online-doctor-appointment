<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/online-appointment',function () {
//     return view('online_appointment_form');
// });

// Route::post('/online-appointment',function(HttpRequest $request){
// //dd($request->patient_name);
//     if($request->patient_name=="Anik"){
//         return "Helo";
//     }
// });


Route::get('/online-appointment','AppointmentController@onlineForm');
Route::post('/online-appointment','AppointmentController@saveAppointment');

Route::get('appointment-list','AppointmentController@appointList');

Route::get('/show-details/{id}','AppointmentController@showDetails')->name('show-details');
Route::get('/edit-appointment/{id}','AppointmentController@editAppointment')->name('edit-appointment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard',"DashboardController")->name('dashboard');



Route::get('/forms',function () {
    return view('forms');
});
