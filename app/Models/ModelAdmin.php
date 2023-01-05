<?php nameSpace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model{
    protected $table = 'tbpeserta';
    protected $table2 = 'detailevent';
    protected $primaryKey = 'nomor';

    public function gettampildata(){
        return $this->findAll('tbpeserta');
    }
    public function gettampildata2(){
        return $this->findAll('detailevent');
    }

    public function hapusdata($idpeserta){
        return $this->db->table('tbpeserta')->delete(['idpeserta' => $idpeserta]);
    }
        public function hapusdataWebinar($id){
    return $this->db->table('detailevent')->delete(['id' => $id]);

    }
        public function ambildatawebinar($id){
    return $this->db->table('detailevent')->getWhere(['id' => $id]);

    }

    public function editdata($data, $id){
        return $this->db->table('detailevent')->update($data, ['id' => $id]);
    }
}

?>