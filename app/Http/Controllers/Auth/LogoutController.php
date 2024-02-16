<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use PragmaRX\Google2FA\Google2FA;

class LogoutController extends Controller
{

    /**
     * Proses login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function logout()
    {
        Auth::logout();
        return response()->redirect('/google2fa.login');
    }
}



