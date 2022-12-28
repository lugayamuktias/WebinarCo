<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelAdmin;


class admin extends Controller{
		
    public function webinaradmin()
    {
        return view('admin/webinaradmin');
    }
    
    public function Aboutadmin()
    {
        return view('admin/About');
    }

    public function lihatWebinarAdmin(){
        $data['title'] = 'Daftar Peserta';
		$users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll() ;
		return view('admin/viewWebinarAdmin',$data);
		
    }
}