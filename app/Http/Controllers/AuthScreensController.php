<?php

namespace App\Http\Controllers;

class AuthScreensController extends Controller
{

    public function logIn()
    {
        return view('admin.logIn');
    }

    public function forgotPassword()
    {
        return view('admin.forgotPassword');
    }

    public function forgotPasswordSuccess()
    {
        return view('admin.logIn')->with('forgotPasswordComplete', true);
    }

    public function signUp()
    {
        return view('admin.signUp');
    }

    public function signUpSuccess()
    {
        return view('admin.logIn')->with('signUpComplete', true);
    }

}