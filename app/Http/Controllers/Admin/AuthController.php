<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    public function login(Request $request){
       
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        \Log::info($request->all());



        $user = User::where("email",$request->email)->first();

        if($user){
            $is_password_correct = \Hash::check($user->password,$request->password);

            if($is_password_correct){
                \Auth::login($user);
                return  "helllo";
            }
        }
        return redirect()->route("admin.login.page")->with(["message"=>"Email Or Password Incorrect","status"=>"error"]);
    }
}
