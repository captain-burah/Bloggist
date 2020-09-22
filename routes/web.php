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
    return view('landing');
});

Auth::routes();

//--------------------------- Home Routes Auths------------------------------------------------->
Route::get('/home', 'HomeController@index')->name('home-guest-auth');
Route::get('/home_tutor', 'Lecturer\LecturerController@home_tutor')->name('home-tutor-auth');
Route::get('/home_student', 'Student\StudentController@home_student')->name('home-student-auth');
//--------------------------- /Home Routes Auths------------------------------------------------>



//--------------------------- Academy Routes Auths------------------------------------------------->
Route::get('/Landing', 'HomeController@Landing')->name('academy-guest-auth');
Route::get('/Landing4', function(){
    return view('Landing2');
});


//--------------------------- /Home Routes Auths------------------------------------------------>



//--------------------------- Dashboard Routes------------------------------------------------>
Route::get('/student_dashboard', 'Student\StudentController@dashboard')->name('student-home');
Route::get('/tutor', 'Lecturer\LecturerController@dashboard')->name('tutor-home');
Route::get('/tutor_registered', 'Lecturer\LecturerController@registered')->name('tutor-registered');
//--------------------------- /Dashboard Routes------------------------------------------------>

//Route::view('/join_tutor', 'lecturer.Lregister');
//Route::post('/tutor_register', 'Lecturer\LecturerController@store');
//Route::post('tutor_register', 'Lecturer\LecturerController@store')->name('tutor-register');
//Route::post('tutor_logout', 'Auth\LoginController@lecLogOut')->name('tutor-logout');

//------------------------------------------ Lecturer Auth-------------------------------------------------------
    Route::group(['middleware' => 'auth:lecturer'], function() {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/Landing3', 'HomeController@Landing3')->name('academy-guest-auth');
        
    });
//------------------------------------------ Student Auth-------------------------------------------------------
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/Landing2', 'HomeController@Landing2')->name('academy-guest-auth');
    });

//---------------------- Newly Declared routes based on laravel inbuilt authentication system-----------------------
Route::get('/login/tutor', 'Auth\LoginController@showlecLoginForm');
Route::get('/register/tutor', 'Auth\RegisterController@showlecRegisterForm');

Route::post('/tutor/login', 'Auth\LoginController@lecLogin');
Route::post('/student/login', 'Auth\LoginController@stuLogin');
Route::post('/tutor/register', 'Auth\RegisterController@createLec');


//------------------------------------------------
Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('{path}','Student\StudentController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('{path}','Lecturer\LecturerController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('{path}','Lecturer\LecturerController@dashboard')->where( 'path', '([A-z\d\-\/_.]+)?' );


