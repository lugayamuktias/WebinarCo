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

<<<<<<< HEAD
    public function lihatWebinarAdmin(){
        $data['title'] = 'Daftar Peserta';
		$users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll() ;
=======
    public function lihatdata(){
		$model	= new ModelAdmin();
		$data	= array();
        $data['tampildata'] = $model->gettampildata();
>>>>>>> f33438dbcdd4d21acd7d1bd415cee0a68f38f034
		return view('admin/viewWebinarAdmin',$data);
		
    }
}