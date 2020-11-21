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


//---------------------- Newly Declared routes based on laravel inbuilt authentication system-----------------------
    
Route::get('/tutor_registration', 'Auth\RegisterController@showlecRegisterForm'); 
Route::post('/tutor/register', 'Auth\RegisterController@createLec');
Route::get('/login/tutor', 'Auth\LoginController@showlecLoginForm');
Route::post('/tutor/login', 'Auth\LoginController@lecLogin');
Route::post('/student/login', 'Auth\LoginController@stuLogin');
Route::post('/setup_submit', 'Lecturer\LecturerController@setup_submit');
Route::get('/setup', function()
{
    return view('lecturer.setup.lecSetup');
});



//--------------------------- Home Routes Auths------------------------------------------------->
        Route::get('/home', 'HomeController@index')->name('home-guest-auth');
        Route::get('/home_tutor', 'Lecturer\LecturerController@home_tutor')->name('home-tutor-auth');
        Route::get('/home_student', 'Student\StudentController@home_student')->name('home-student-auth');
//--------------------------- /Home Routes Auths------------------------------------------------>

//--------------------------- Academy Routes Auths------------------------------------------------->
        Route::get('/landing', 'HomeController@Landing')->name('landing'); //------- Home Page
        //------- Student Sign-Up uses laravel default /register route---//

        //------- Student Log-In uses laravel default /login route---//

        //------- Tutor Sign Up
                //Route::get('/tutor_registration', function(){
                //    return view('/tutorReg');
                //});

        //------- Tutor Login
                Route::get('/tutor_login', function(){
                    return view('/tutorLog'); 
                });


        Route::get('/welcome', function(){
            return view('/welcome');
        });
//--------------------------- /Academy Routes Auths------------------------------------------------->

//---------------------------- Lecturer Auths------------------------------------------------------->
        Route::group(['middleware' => 'auth:lecturer'], function() {
            Route::get('/', function () {
                return view('welcome');
            });
        });

//--------------------------- /Lecturer Auths------------------------------------------------------->

//---------------------------- Student Auths------------------------------------------------------->
        Route::group(['middleware' => 'auth'], function() {
            Route::get('/', function () {
                return view('landing');
            });
            
        });
//--------------------------- /Student Auths------------------------------------------------------->


Route::get('/student_dashboard', 'Student\StudentController@dashboard')->name('student-home');


//--------------------------- Dashboard Routes------------------------------------------------>
    
    Route::get('/tutor', 'Lecturer\LecturerController@dashboard')->name('tutor-home');
    //Route::get('/tutor_registered', 'Lecturer\LecturerController@registered')->name('tutor-registered');
//--------------------------- /Dashboard Routes------------------------------------------------>

//Route::view('/join_tutor', 'lecturer.Lregister');
//Route::post('/tutor_register', 'Lecturer\LecturerController@store');
//Route::post('tutor_register', 'Lecturer\LecturerController@store')->name('tutor-register');
//Route::post('tutor_logout', 'Auth\LoginController@lecLogOut')->name('tutor-logout');




//--------------------------------------------------------------------------------------------
Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('{path}','Student\StudentController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('{path}','Lecturer\LecturerController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('{path}','Lecturer\LecturerController@dashboard')->where( 'path', '([A-z\d\-\/_.]+)?' );