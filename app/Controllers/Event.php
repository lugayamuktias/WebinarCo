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
        public function InputDataWebinar()
    {
        return view('admin/InputWebinar');
    }
}
