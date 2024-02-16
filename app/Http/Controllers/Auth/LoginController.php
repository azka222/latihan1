<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use PragmaRX\Google2FA\Google2FA;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
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
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            Session::put('user', $user);
            if ($user->uses_two_factor_auth && empty($user->google2fa_secret)) {
                $google2fa = app('pragmarx.google2fa');
                $otp_secret = $google2fa->generateSecretKey();
                $user->google2fa_secret = $otp_secret;
                $user->save();
            }
            $request->session()->put('2fa:user:id', $user->id);
            if ($user->uses_two_factor_auth) {
                $otp_secret = $user->google2fa_secret;
                $google2fa = app('pragmarx.google2fa');
                $QR_Image = $google2fa->getQRCodeInline(
                    config('app.name'),
                    $user->email,
                    $otp_secret
                );
                if ($QR_Image) {
                    return response()->view('google2fa.qrAuthentication', [
                        'QR_Image' => $QR_Image,
                        'secret' => $otp_secret
                    ]);
                } else {
                    return redirect()->route('login');
                }
            }
            else{
                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }
}


