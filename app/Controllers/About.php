<?php

namespace App\Controllers;

class About extends BaseController{
    public function Aboutadmin()
    {
        return view('admin/About');
    }
    public function Aboutguest()
    {
        return view('guest/About');
    }
}
