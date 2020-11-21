<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Lecturer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/student_dashboard';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:lecturer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'dob' => 'required',
            'gender' => 'required',
            'batch1'  => 'required',
            'batch2'  => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required| min:6',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'batch1'  => $data['batch1'],
            'batch2'  => $data['batch2'],
            'password' => Hash::make($data['password']),
        ]);
    }









    //--------------- Tutor Controllers ----------------
        public function showLecRegisterForm()
        {
            return view('tutorReg');
        }
        

        protected function createLec(Request $request)
        {
            $validate = $this->validate($request, [
                'fname'  => 'required|string|max:191',
                'lname'  => 'required|string|max:191',
                'email'  => 'required|string|email|max:191|unique:lecturers',
                'gender' => 'required|string',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required| min:6',
                //'privacyPolicy' => 'required|string',
            ]);
            if ($validate == true):
                
                Lecturer::create([
                    'fname' => $request['fname'],
                    'lname' => $request['lname'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                    //'privacyPolicy' => $request['privacyPolicy'],
                    
                ]);
                return redirect('/login/tutor');
            else:
                return ('Failled');
            endif;
        }
    //--------------- Tutor Controllers ----------------

}
