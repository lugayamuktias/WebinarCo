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

    public function lihatdata(){
		$model	= new ModelAdmin();
		$data	= array();
        $data['tampildata'] = $model->gettampildata();
		return view('admin/viewWebinarAdmin',$data);
		
    }
}