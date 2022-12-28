<?php

nameSpace App\Models;
use CodeIgniter\Model;

class ModelAdmin extends Model{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata(){
        return $this->db->table('tbpeserta')->get();
    }
}

?>