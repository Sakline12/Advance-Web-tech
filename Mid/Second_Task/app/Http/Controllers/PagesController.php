<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('home');
    }
    function reg()
    {
        return view('reg',['name'=>'abc','age'=>'22','email'=>'abc@gmail.com']);
    }

    function registration($name)
    {
        return view('registration') ->with('name',$name )->with('age',30)->with('email','abc@gmail.com');
    }
}
