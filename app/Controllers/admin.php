<?php

namespace App\Controllers;

class admin extends BaseController{
    public function webinaradmin()
    {
        return view('admin/webinaradmin');
    }
        public function Aboutadmin()
    {
        return view('admin/About');
    }
}