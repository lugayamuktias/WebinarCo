<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelAdmin;


class admin extends Controller{
    protected $db, $builder;
		
    public function webinaradmin()
    {
        return view('admin/webinaradmin');
    }
    
    public function Aboutadmin()
    {
        return view('admin/About');
    }

    public function __construct(){
        $this->db = \config\Database::connect();
        $this->builder = $this->db->table('tbpeserta');
    }
    public function lihatWebinarAdmin(){
        $data['title'] = 'Daftar Peserta';

		// $tbpeserta = new \Myth\Auth\Models\UserModel();
        // $data['tbpeserta'] = $tbpeserta->findAll() ;
 
        $this->builder->select('idpeserta, namapeserta, tgllahir, jeniskelamin, notelp, address, pekerjaan, idwebinar, namawebinar');
        $query=$this->builder->get();
        $data['tbpeserta'] = $query->getResult() ;
		return view('admin/viewWebinarAdmin',$data);

    }
}