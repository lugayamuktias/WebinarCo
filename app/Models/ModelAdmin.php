<?php nameSpace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model{
    protected $table = 'tbpeserta';
    protected $primaryKey = 'nomor';

    public function gettampildata(){
        return $this->findAll();
    }

    public function hapusdata($idpeserta){
        return $this->db->table('tbpeserta')->delete(['idpeserta' => $idpeserta]);

    }
}

?>