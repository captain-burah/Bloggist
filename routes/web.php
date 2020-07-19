<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student_dashboard', 'HomeController@student')->name('student-home');
Route::get('/tutor_dashboard', 'Lecturer\LecturerController@index')->name('tutor-home');
Route::get('/tutor_registered', 'Lecturer\LecturerController@registered')->name('tutor-registered');





//Route::view('/join_tutor', 'lecturer.Lregister');
//Route::post('/tutor_register', 'Lecturer\LecturerController@store');
//Route::post('tutor_register', 'Lecturer\LecturerController@store')->name('tutor-register');

Route::group(['middleware' => 'auth:lecturer'], function() {
    Route::get('tutor_logout', 'Lecturer\LecturerController@logout')->name('tutor-logout');
});





//------Newly Declared routes based on laravel inbuilt authentication system-----------------------
Route::get('/login/tutor', 'Auth\LoginController@showlecLoginForm');
Route::get('/register/tutor', 'Auth\RegisterController@showlecRegisterForm');

Route::post('/login/tutor', 'Auth\LoginController@lecLogin');
Route::post('/tutor/register', 'Auth\RegisterController@createLec');






Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );