<?php namespace App\Models;
use CodeIgniter\Model;

class LevelModel extends Model{    
    protected $table = 'level'; 
    public function getLevel($id = false){ 
        if($id === false){ 
            return $this->findAll();
        }else{ return $this->getWhere(['level_id' => $id]);}     
    }

    public function saveLevel($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editLevel($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('level_id', $id);
        return $builder->update($data);
    }
 
    public function hapusLevel($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['level_id' => $id]);
    }
}