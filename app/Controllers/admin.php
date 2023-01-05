<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelAdmin;


class admin extends Controller{
    protected $db, $builder,$db2, $builder2;
		
    public function webinaradmin()
    {
        $data['title'] = 'Daftar Webinar';

		// $tbWebinar = new \Myth\Auth\Models\UserModel();
        // $data['tbWebinar'] = $tbWebinar->findAll() ;
 
        $this->builder2->select('id, nama_webinar, pembicara, topik_webinar, tanggal_mulai, waktu_mulai, durasi, batas_peserta, type_event, gambar');
        $query=$this->builder2->get();
        $data['detailevent'] = $query->getResult() ;
		return view('admin/WebinarAdmin',$data);
    }
    
    public function Aboutadmin()
    {
        return view('admin/About');
    }

    public function __construct(){
        $this->db = \config\Database::connect();
        $this->builder = $this->db->table('tbpeserta');
        $this->db2 = \config\Database::connect();
        $this->builder2 = $this->db2->table('detailevent');
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