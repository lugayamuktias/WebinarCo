<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class admin extends Controller{
    public function webinaradmin()
    {
        return view('admin/webinaradmin');
    }
        public function Aboutadmin()
    {
        return view('admin/About');
    }
}