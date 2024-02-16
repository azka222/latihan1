<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function display(){
        $user = Session::get('user');
        return view('accountInfo', [
            "title" => "User Information",
            "user" => $user
        ]);
    }
}
