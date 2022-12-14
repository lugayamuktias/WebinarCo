<?php

namespace App\Controllers;

class Home extends BaseController{
    public function index()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
    }
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function homeadmin()
    {
        return view('admin/homeadmin');
    }
    public function homeuser()
    {
        return view('user/homeuser');
    }
    public function homeguest()
    {
        return view('guest/homeguest');
    }
}
