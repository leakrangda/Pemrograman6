<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{    
    protected $table = 'user'; 
    public function getUser($id = false){ 
        if($id === false){ 
            return $this->findAll();
        }else{ return $this->getWhere(['id_user' => $id]);}     
    }

    public function saveUser($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editUser($data, $id){
        $builder = $this->db->table($this->table);
        $builder->where('id_user', $id);
        return $builder->update($data);
    }
 
    public function hapusUser($id){
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_user' => $id]);
    }

    public function getCompound($id){
        $builder = $this->db->table($this->table);
        if($id === false){
            $builder->select("id_user, nama, user.level_id, nama_level");
            $builder->join("level", "user.level_id=level.level_id", "inner");
            return $builder->get()->getResultArray();
        }else{
            $builder->select("id_user, nama, user.level_id, nama_level");
            $builder->join("level", "user.level_id=level.level_id", "inner");
            $builder->where("id_user=$id");
            return $builder->get();
        }
    }
}