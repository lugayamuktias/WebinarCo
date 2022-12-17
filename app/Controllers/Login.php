<?php

namespace App\Controllers;

class login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Register',
            'config' => config('Auth'),
        ];
        return view('auth/index');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
}