<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function submit()
    {
        return view('register');
    }
    public function get_register(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required|max:20',
                'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
                'password' => 'required|regex:/^[0-9,]{6,6}$/',
                'address' => 'regex:/^[a-zA-Z,]+$/',
                'occupation' => 'required',
                'gender' => 'required|string',
                'zipcode' => 'required|regex:/^[0-9]{4,4}$/'
            ],

            [
                'username' => 'Your user name is wrong and username length is maximum 20',
                'email' => 'Your email is not correct,please use this format(abc@gmail.com)',
                'password' => 'Your password is incorrect and password length is 6 numbers',
                'address' => 'Your address is not correct,you can start your address with letter(Dhaka,Khulna)',
                'occupation' => 'Please insert your occupation',
                'gender' => 'Choose your gender',
                'zipcode' => 'Insert Correct zip code with four digits:Hints(1167)'
            ],

        );
        if (isset($error)) {
            $output = $request->address;
            return $output;
        } else {
            $usetable = new User();
            $usetable->username = $request->username;
            $usetable->email = $request->email;
            $usetable->password = $request->password;
            $usetable->address = $request->address;
            $usetable->occupation = $request->occupation;
            $usetable->gender = $request->gender;
            $usetable->zipcode = $request->zipcode;
            $usetable->save();

            return view("login");
        }
    }
}
