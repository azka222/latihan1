<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PragmaRX\Google2FA\Google2FA;

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
                return redirect()->intended('/qrAuthentication');
            }
        } catch (\Exception $e) {
            return redirect()->intended('/login');
        }
        return redirect()->intended('/login');

    }
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }







}
