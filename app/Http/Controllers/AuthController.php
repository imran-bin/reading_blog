<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('pages.login');
    }
   public function signin(Request $request)
    {
         $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $data = $request->only('email', 'password');
        // dd($data);
        if(Auth::attempt($data))
        {
            return redirect('/');
        }else
        {
            return redirect('/login');
        }

       
    }
    public function register(){
        return view('pages.register');
    }

    public function newRegister(RegistrationRequest $req)
    {
        $data = $req->all();
   
        $this->create($data);
        return redirect('/')->withSuccess('You have sign in');
    }
    function create(array $data)
    {
        return User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => Hash::make($data['password']),
        ]);
    }
    function logout(Request $request)
    {
        // $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}

