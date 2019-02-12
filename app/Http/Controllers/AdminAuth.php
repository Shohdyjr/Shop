<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth extends Controller
{
    public function login()
    {
        return view('admin.login');
    }


    public function dologin()
    {
        $rememberme = request('rememberme') == 1 ? true : false;
        if (auth()->guard('admin')->attempt([
            'email' => request('email'),
            'password' => request('password'),

        ], $rememberme)) {

            return redirect('admin');
        } else {
            return redirect(aurl('login'));
        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect(aurl('login'));
    }

    public function forgot()
    {
        return view('admin.forgot');
    }

}
