<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;



class UpdateController extends Controller
{

    public function show(Request $request)
    {
        $use_table=User::where('id',$request->id)->first();
        return view('update')->with('user',$use_table);
        //echo "xcvbd";
    }

    function goupdate(Request $request){
        $use_table=User::where('id',$request->id)->first();
        // dd($request->id);
        $use_table->username = $request->username;
        $use_table->email = $request->email;
        $use_table->address = $request->address;
        $use_table->occupation = $request->occupation;
        $use_table->save();
        $request->session()->put('user', $use_table);
        //echo "sdfsxc";
         return redirect("profile");
         }

}
