<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('welcome');
    }
//---------------- Student----------------------
    public function dashboard()
    {
        return view('student.Smaster');
    }

//---------------- home_student----------------------
    public function home_student()
    {
        return view('welcome',  ['url' => '/student']);
    }



}
