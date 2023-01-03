<?php nameSpace App\Models;

use CodeIgniter\Model;

class ModelTambahWebinar extends Model{

    function __construct(){
        $this->db = db_connect();
    }

    function simpan($data){
        return $this->db->table('detailevent')->insert($data);
        
    }
}

?>