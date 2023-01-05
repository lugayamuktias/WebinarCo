<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelTambahWebinar;
use App\Models\ModelAdmin;
class Event extends BaseController{
        public function EditWebinar()
    {
        return view('admin/formeditwebinar');
    }
        public function TambahWebinar()
    {
        helper('form');
        return view('admin/formtambahWebinar');
    }
        public function HapusWebinar()
    {
        return view('admin/hapusWebinar');
    }
        public function LihatWebinarAdmin()
    {
        return view('admin/viewWebinarAdmin');
    }
        public function SimpanWebinar(){
        $data = [
            'nama_webinar' => $this->request->getPost('namawebinar'),
            'pembicara' => $this->request->getPost('pembicara'),
            'topik_webinar' => $this->request->getPost('topik'),
            'tanggal_mulai' => $this->request->getPost('tanggalMulai'),
            'waktu_mulai' => $this->request->getPost('waktuMulai'),
            'durasi' => $this->request->getPost('durasi'),
            'batas_peserta' => $this->request->getPost('batas'),
            'type_event' => $this->request->getPost('type-event'),
            'gambar' => $this->request->getPost('filename'),
        ];

        $adm = new ModelTambahWebinar();

        $simpan = $adm->simpan($data);
        
        if($simpan){
            return redirect()->to('/Event/TambahWebinar');
        }
    }

        public function remove()
    {
        $uri = service('uri');
        $idpeserta = $uri->getSegment('3');

        $adm = new ModelAdmin();

        $adm->hapusdata($idpeserta);
        return redirect()->to('admin/viewWebinarAdmin');
    }
        public function removeWebinar()
    {
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $web = new ModelAdmin();

        $web->hapusdataWebinar($id);
        return redirect()->to('admin/WebinarAdmin');
    }
        public function formedit()
    {
        helper('form');
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $adm = new ModelAdmin();

        $ambildatawebinar = $adm->ambildatawebinar($id);
        if (count($ambildatawebinar->getResult()) > 0){
            $row = $ambildatawebinar->getRow();
            $data = [
                'id' => $id,
                'nama_webinar' => $row->nama_webinar,
                'pembicara' => $row->pembicara,
                'topik_webinar' => $row->topik_webinar,
                'tanggal_mulai' => $row->tanggal_mulai,
                'waktu_mulai' => $row->waktu_mulai,
                'durasi' => $row->durasi,
                'batas_peserta' => $row->batas_peserta,
                'type_event' => $row->type_event,
                'gambar' => $row->gambar
            ];
            return view('admin/formEditWebinar', $data);
        }
    }
    
    public function updatedata(){
        $id = $this->request->getPost('id');
        $data = [
            'nama_webinar' => $this->request->getPost('namawebinar'),
            'pembicara' => $this->request->getPost('pembicara'),
            'topik_webinar' => $this->request->getPost('topik'),
            'tanggal_mulai' => $this->request->getPost('tanggalMulai'),
            'waktu_mulai' => $this->request->getPost('waktuMulai'),
            'durasi' => $this->request->getPost('durasi'),
            'batas_peserta' => $this->request->getPost('batas'),
            'type_event' => $this->request->getPost('type-event'),
            'gambar' => $this->request->getPost('filename'),
        ];

        $adm = new ModelAdmin();

        $simpan = $adm->editdata($data, $id);
        
        if($simpan){
            return redirect()->to('admin/webinarAdmin');
        }
    }
}