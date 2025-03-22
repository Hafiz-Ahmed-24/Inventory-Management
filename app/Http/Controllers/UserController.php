<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegPage(){
        return view('pages.auth.registration-page');
    }

    public function userLoginPage(){
        return view('pages.auth.login-page');
    }

    public function userRestPassPage(){
        return view('pages.auth.reset-pass-page');
    }

    public function userSentOtpPage(){
        return view('pages.auth.send-otp-page');
    }

    public function userVerifyOtpPage(){
        return view ('pages.auth.verify-otp-page');
    }

    public function userProfilePage(){
        return view('pages.dashboard.profile-page');
    }

}
