<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelTambahPeserta;
class peserta extends BaseController{
    public function webinarpeserta()
    {
        return view('user/webinaruser');
    }
     public function aboutpeserta()
    {
        return view('user/About');
    }
    public function TambahPeserta()
    {
        helper('form');
        return view('user/formDaftarUser');
    }
    public function LihatWebinar()
    {
        return view('user/viewWebinar');
    }
    public function SimpanPeserta(){
        $data2 = [
            'namapeserta' => $this->request->getPost('namapeserta'),
            'tgllahir' => $this->request->getPost('tanggalLahir'),
            'jeniskelamin' => $this->request->getPost('gender'),
            'notelp' => $this->request->getPost('noTelp'),
            'address' => $this->request->getPost('alamat'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'idwebinar' => $this->request->getPost('code'),
            'namawebinar' => $this->request->getPost('namawebinar'),
        ];

        $addPeserta = new ModelTambahPeserta();

        $simpan2 = $addPeserta->simpan($data2);
        
        if($simpan2){
            return redirect()->to('/Peserta/TambahPeserta');
        }
    }
}
