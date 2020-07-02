<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name'  => 'required|string|max:191',
            'email'  => 'required|string|email|max:191|unique:users',
            'type'  => 'required',
            'password'  => 'required|string|min:8',
        ]);

        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => $request['type'],
            'photo' => $request['photo'],
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth('api')->user();
        if ($request->photo) {

            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos
            ($request->photo, ';')))[1])[1];

            \Image::make($request->photo)->save(public_path('img/profile/').$name);
        }
        //return $request -> photo;
        //return ['message' => 'Success'];
    }

    public function profile()
    {
        return auth('api')->user();
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name'  => 'required|string|max:191',
            'email'  => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'type'  => 'required',
            'password'  => 'sometimes|min:8',
        ]);

        $user->update($request->all());

        return['message' => 'updating'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        //delete the user
        $user->delete();
        return ['message' => 'User Deleted!'];
    }
}
