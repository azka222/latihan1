<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Models\User;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class VerifyController extends Controller
{

    /**
     * Proses login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function verify(Request $request)
    {
        $request->validate([
            'one_time_password' => 'required|string',
        ]);
        $user_id = $request->session()->get('2fa:user:id');
        $user = User::find($user_id);
        if (!$user || !$user->uses_two_factor_auth) {
            return redirect()->route('login');
        }
        $google2fa = new Google2FA();
        $otp_secret = $user->google2fa_secret;
        if (!$google2fa->verifyKey($otp_secret, $request->one_time_password)) {
            Session::put('checkOTP', 'error');
            return redirect()->back();
        }
        $request->session()->forget('2fa:user:id');
        $request->session()->forget('2fa:auth:remember');
        $request->session()->forget('2fa:auth:attempt');
        return redirect()->intended('/');
    }
}