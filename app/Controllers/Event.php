<?php

namespace App\Controllers;

class Event extends BaseController{
        public function EditWebinar()
    {
        return view('admin/formeditwebinar');
    }
        public function TambahWebinar()
    {
        return view('admin/formtambahWebinar');
    }
        public function HapusWebinar()
    {
        return view('admin/hapusWebinar');
    }
        public function LihatWebinar()
    {
        return view('admin/viewWebinar');
    }
        public function LihatWebinarAdmin()
    {
        return view('admin/viewWebinarAdmin');
    }
        public function SimpanWebinar()
    {
        return view('admin/inputWebinar');
    }
}