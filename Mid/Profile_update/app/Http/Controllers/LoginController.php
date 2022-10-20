<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }


    function checklogin(Request $request)
    {
        $use_table = new User();
        $result = $use_table->where('username', $request->username)->where('password', $request->password)->first();
        // $password = $use_table->where('password', $request->password);
        if (!empty($result)) {
            $request->session()->put('username', $request->username);
            $request->session()->put('password', $request->password);
            $request->session()->put('user', $result);
            return redirect("profile");
            echo "DOne";
        } else {
            $output = "wrong info";
            return $output;
        }
    }
}
