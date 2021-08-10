<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function view(){
        return view('home_login');
    }

    public function index_login(){
        return view('login.login');
    }

    public function loginuser(){
        return view('login.loginuser');
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }

    public function login_admin(){
        return view('login.loginadmin');
    }
}
