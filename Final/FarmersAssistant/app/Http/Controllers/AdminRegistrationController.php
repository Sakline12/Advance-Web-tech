<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Users\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AdminRegistrationController extends Controller
{
    public function adminregister(Request $request)
    {
       $validator=Validator::make($request->all(),[
        'firstName' => 'required|regex:/^[A-Za-z,]+$/|max:10',
        'lastName' => 'required|regex:/^[A-Za-z,]+$/|max:10',
        'username' => 'required|regex:/^[a-zA-Z0-9]+$/|unique:users,username|max:20',
        'postalCode'=>'required|regex:/^[0-9]{4,4}$/',
        'city'=>'required|regex:/^[A-Za-z,]+$/|max:20',
        'gender'=>'required|string',
        'dob'=>'required|string',
        'address'=>'required|regex:/^[a-zA-Z0-9,]+$/|max:30',
        'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
        'phone'=>'required|regex:/(01)[0-9]{9}/',
        'password'=>'required|string',

       ]);

       if($validator->fails())
       {
        return response()->json([
            'message'=>'Validation Failed',
            'errors'=>$validator->errors()
          ],400);
       }

      $admin=User::create([
        'firstName' => $request->firstName,
        'lastName' => $request->lastName,
        'username' => $request->username,
        'phone' => $request->phone,
        'city' => $request->city,
        'postalCode' =>$request->postalCode,
        'gender' => $request->gender,
        'dob' => $request->dob,
        'address' => $request->address,
        'email' => $request->email,
        'password'=> Hash::make($request->password),
       ]);

       return response()->json([
        'message'=>'Registration Done',
        'data'=>$admin
      ],200);

          //create a instance of the admin
    Admins::create([
        'user_id' => $admin->id,
    ]);

    $admin = User::find($admin->id);
    // Log the admin in
    Auth::login($admin);
    session(['user_type' => Auth::user()->getUserType()]);
    session(['user_id' => User::find(Auth::id())->admins->first()->id]);
    return response()->json([
                'user'=>$admin,
                'user_type'=>session('user_type'),
                'user_id'=>session('user_id'),
    ],200);

}

}
