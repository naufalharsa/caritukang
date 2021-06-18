<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function postlogin(Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/administrators');
        }
        return redirect('/')->with('status', 'Email or Password invalid');
    }
    public function postlogout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    public function register(){
        return view('auth.Register');
    }

    public function storeregister(Request $request){
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/')->with('status_register', 'Your account has been created');
    }
}
