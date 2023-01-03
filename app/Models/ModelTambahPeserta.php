<?php nameSpace App\Models;

use CodeIgniter\Model;

class ModelTambahPeserta extends Model{

    function __construct(){
        $this->db = db_connect();
    }

    function simpan($data){
        return $this->db->table('tbpeserta')->insert($data);
        
    }
}

?>