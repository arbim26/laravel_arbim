<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

    class LoginController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function register()
    {
      return view('register');
    }

    public function postlogin(Request $request)
    {
        if(Auth::guard('user')->attempt((['email' => $request->email, 'password' => $request->password]))) {
          return redirect('/dashboard');
        }elseif(Auth::guard('guru')->attempt((['email' => $request->email, 'password' => $request->password]))) {
          return redirect('/agendaguru');
        }
        return redirect('/login');
    }
    public function registernew(Request $request)
    {
        $this->validate($request, [
          'name'=> 'required',
          'email'=> 'required',
          'password'=> 'required',
        ]);
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'remember_token' =>Str::random(60)
        ]);

        return redirect('/dashboard');
    }

    public function logout()
    {
      if(Auth::guard('user')->check()){
        Auth::guard('user')->logout();
      }elseif(Auth::guard('guru')->check()){
        Auth::guard('guru')->logout();
      }
      return redirect('/login');
    }



}

