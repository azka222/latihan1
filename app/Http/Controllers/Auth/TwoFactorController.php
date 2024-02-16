<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController extends Controller
{
    /**
     * Proses login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function set2FA(Request $request)
    {
        $user = Session::get('user');
        if ($request->has('toggle')) {
            $user->uses_two_factor_auth = 1;
        } else {
            $user->uses_two_factor_auth = 0; 
        }
        $user->save();
        return redirect()->route('display');
    }

}