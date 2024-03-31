<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        // dd($request->all());
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(\Auth::attempt($request->only('username','password'))){
            return redirect('dashboard');
        }
        return redirect('')->withError('Login details are not valid');
    }

    public function register_view(){
        return view('register');
    }

    public function register(Request $request){
        // dd($request->all());
        //validate
        $request->validate([
            'username'=>'required|unique:users',
            'email'=>'required|unique:users|email',
            'number'=>'required|unique:users|min:10|max:10',
            'password'=>'required|confirmed|min:8',
        ]);

        //Saves in user table
        
        $user=new User();
        $user->username=$request->username;
        $user->email=$request->email;
        $user->number=$request->number;
        $user->password=\Hash::make($request->password);
        $user->save();

        // User::create([
        //     'username'=>$request->username,
        //     'email'=>$request->email,
        //     'number'=>$request->number,
        //     'password'=>\Hash::make($request->password)
        // ]);

        if(\Auth::attempt($request->only('username','password'))){
            return redirect('dashboard');
        }
        return redirect('register')->withError('Error');

    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }
}
                                                  