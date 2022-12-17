<?php

namespace App\Controllers;

class peserta extends BaseController{
    public function webinarpeserta()
    {
        return view('user/webinaruser');
    }
     public function aboutpeserta()
    {
        return view('user/About');
    }
    public function daftarpeserta()
    {
        return view('user/formDaftarUser');
    }
}
