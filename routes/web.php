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
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function() {

    //---------------------- Newly Declared routes based on laravel inbuilt authentication system-----------------------
        Route::get('/', function(){
            return view('landing');
        })->name('landing-page');
        Auth::routes();
        Route::get('/tutor_registration', 'Auth\RegisterController@showlecRegisterForm')->name('tutor-register');
        Route::post('/tutor/register', 'Auth\RegisterController@createLec')->name('tutor-createDB');
        Route::get('/login/tutor', 'Auth\LoginController@showlecLoginForm')->name('tutor-login');
        Route::post('/tutor/login', 'Auth\LoginController@lecLogin')->name('tutor-verify');
        Route::post('/student/login', 'Auth\LoginController@stuLogin')->name('student-verify');
        Route::get('/testPage', 'Lecturer\LecturerController@test');
        Route::get('/about_us', 'HomeController@aboutUs')->name('about_us');
        
    //---------------------- Newly Declared routes based on laravel inbuilt authentication system-----------------------





    //--------------------------- Home Routes Auths------------------------------------------------->
        Route::get('/home', 'HomeController@index')->name('home-guest-auth');
        Route::get('/home_tutor', 'Lecturer\LecturerController@home_tutor')->name('home-tutor-auth');
        Route::get('/home_student', 'Student\StudentController@home_student')->name('home-student-auth');

        Route::get('/tutors', 'HomeController@JoinAsTutor')->name('home-student-auth');
        Route::get('/landing', function () {
            return view('landing');
        });
    //--------------------------- /Home Routes Auths------------------------------------------------>






    //--------------------------- Academy Routes Auths------------------------------------------------->
        //Route::get('/landing', 'HomeController@Landing')->name('landing'); //------- Home Page
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





    //--------------------------- /Error URLs------------------------------------------------------->
        Route::get('/404', function()
        {   $message = 'error fdsajdkf';
            return view('errors.404', compact('message'));
        });

        Route::get('/test', 'Lecturer\LecturerController@error');
    //--------------------------- /Error URLs------------------------------------------------------->
    




    //--------------------------- Dashboard Routes------------------------------------------------>
        Route::get('/student_dashboard', 'Student\StudentController@dashboard')->name('student-home');
        Route::get('/tutor', 'Lecturer\LecturerController@dashboard')->name('tutor-home');
        //Route::get('/tutor_registered', 'Lecturer\LecturerController@registered')->name('tutor-registered');
    //--------------------------- /Dashboard Routes------------------------------------------------>





    //Route::view('/join_tutor', 'lecturer.Lregister');
    //Route::post('/tutor_register', 'Lecturer\LecturerController@store');
    //Route::post('tutor_register', 'Lecturer\LecturerController@store')->name('tutor-register');
    //Route::post('tutor_logout', 'Auth\LoginController@lecLogOut')->name('tutor-logout');
    




    

});

Route::group(['middleware' => 'auth:lecturer'], function() {
//---------------------------- Group: Lecturer Auths------------------------------------------------------->
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/setup', function () {              //---- Loading of the step page
        return view('lecturer.setup.lecSetup');     //---- This is controlled by App/Exceptions/Handler.php
    });

    Route::get('/setup_finish', 'Lecturer\LecturerController@setupSubmit')->name('Tsetup-Submit');
    //Route::get('/testPage', 'Lecturer\LecturerController@test');


//--------------------------- /Group: Lecturer Auths------------------------------------------------------->
});



//---------------------------- Group: Student Auths------------------------------------------------------->
        Route::group(['middleware' => 'auth'], function() {
            Route::get('/', function () {
                return view('home');
            });
        });
//--------------------------- /Group: Student Auths------------------------------------------------------->





//--------------------------------------------------------------------------------------------
//Route::get('{path}','Student\StudentController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
//Route::get('{path}','Lecturer\LecturerController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('{path}','Lecturer\LecturerController@dashboard')->where( 'path', '([A-z\d\-\/_.]+)?' );
//Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );