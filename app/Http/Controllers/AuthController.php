<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    /**
     * Proses login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        try {
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/homePage');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return  redirect()->intended('/login');
        }
        return redirect()->intended('/login');
        
    }
}
