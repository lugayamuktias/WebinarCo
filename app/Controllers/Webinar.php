<?php

namespace App\Controllers;

class Webinar extends BaseController{
    public function webinaradmin()
    {
        return view('admin/webinaradmin');
    }
    public function webinaruser()
    {
        return view('user/webinaruser');
    }
    public function webinarguest()
    {
        return view('guest/webinarguest');
    }
}
