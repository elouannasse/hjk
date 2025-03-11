<?php

namespace App\Http\Controllers;


use auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AuthController extends Controller{
    public function showLoginForm(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'eamil'=>'required|email', 
            'password'=>'required|',
        ]);
        if(auth::attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'email'=>'eamil ne corrct pas',
        ]);
    }
    public function showRegistrationForme(){
        return view('register');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        auth::login($user);
        return redirect('/home');
    }
}
        
    