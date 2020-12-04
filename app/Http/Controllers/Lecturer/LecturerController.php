<?php

namespace App\Http\Controllers\Lecturer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lecturer;
use App\LecturerInfo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class LecturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:lecturer');
    }

//------------------ Index--------------------------------------
    public function index()
    {
        return view('welcome');
    }
    
//------------------ Dashboard--------------------------------------
    public function dashboard()
    {   //$Lecturer_Fname = Lecturer::findOrFail($Fname);
        //$Lecturer_Lname = Lecturer::findOrFail($Lname);

        /*
        $lecturerName = array(
            'FName' => Lecturer::findOrFail($Fname),
            'LName' => Lecturer::findOrFail($Lname),
        );
        */
        //$lecturerName = Lecturer::findOrFail($id);
        
        return view('/lecturer.Lmaster');
    }

//------------------ Going Home--------------------------------------
    public function home_tutor()
    {
        return view('welcome', ['url' => '/tutors']);
    }

//------------------ After Registered--------------------------------------
    public function registered()
    {
        return view('welcome');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

//----------------- Tutor Setup Page Submission ----------------------------
    public function setupSubmit(Request $request){
        
    }

//----------------- Tutor Setup Page Submission ----------------------------


    //public function test(){
    //    $id = Lecturer::select('id')->where('email', 'mazda@gmail.com')->first();
    //    $phone = Lecturer::find($id->id)->lecturerInfo;
    //    return dd($phone);
    //}



    public function error(){
        try {
            $user = Lecturer::where('email', 'lec2@gmail.com')->firstOrFail();
            $user->load(['LecturerInfo']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception ){
            $message = 'Failled to create a new database record for ';
            return view('errors.something', compact('message'));
            //return view('errors.notFound');
        } catch (\Illuminate\Database\Eloquent\RelationNotFoundException $exception ){
            //dd(get_class($exception));
            return view('errors.relations');
        };
        
        
        return view('errors.404', compact('user'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        
        $validate = $this->validate($request, [
            'Fname'  => 'required|string|max:191',
            'Lname'  => 'required|string|max:191',
            'email'  => 'required|string|email|max:191|unique:lecturers',
            'password'  => 'required|string|min:8',
            'subdomain' => 'required',
        ]);
        if ($validate == true):
            Lecturer::create([
                'Fname' => $request['Fname'],
                'Lname' => $request['Lname'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'subdomain' => $request['subdomain']
                
            ]);
            return redirect('/tutor/dashboard');

        else:
            return ('Failled');
        endif;
}
            
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

  

    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }

}
