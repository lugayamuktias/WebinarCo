<?php

namespace App\Controllers;

use App\Models\ModelAdmin;
use CodeIgniter\Controller;

class admin extends Controller{
    public function webinaradmin()
    {
        return view('admin/webinaradmin');
    }
    
    public function Aboutadmin()
    {
        return view('admin/About');
    }

    public function lihatdata(){
        $adm = new ModelAdmin();
        $data = [
            'tampildata' => $adm->tampildata()->getResult()
        ];

        return view('admin/viewWebinarAdmin', $data);
    }
}