<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
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
                $user->google2fa_secret = $google2fa->generateSecretKey();
                $user->save();
            }
  
            $request->session()->put('2fa:user:id', $user->id);
            if ($user->uses_two_factor_auth) {
                $otp_secret = $user->google2fa_secret;
                $google2fa = app('pragmarx.google2fa');
                $image = $google2fa->getQRCodeInline(
                    config('app.name'),
                    $user->email,
                    $otp_secret
                );
                $QR_Image = 'data:image/svg+xml;base64,' . base64_encode($image);
                return response()->view('google2fa.qrAuthentication', [
                    'QR_Image' => $QR_Image,
                    'secret' => $otp_secret,
                ]);

            } else {
                return redirect()->route('home');
            }
        }

        Session::put('checkCredentials', 'error');
        return redirect()->back();
    }
}
