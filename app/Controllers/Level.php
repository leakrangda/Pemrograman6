<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LevelModel;

class Level extends Controller{    
    public function index(){
        $model = new LevelModel;
        $data['title']= 'Data Level'; 
        $data['getLevel'] = $model->getLevel(); 
        echo view('level_header_view', $data); 
        echo view('level_view', $data); 
        echo view('user_footer_view', $data);
    }

    public function tambah(){
        $data['title']= 'Tambah Data Level';
        echo view('level_tambah_view', $data); 
        echo view('level_view', $data); 
        echo view('user_footer_view', $data);
    }

    public function add(){
        $model = new LevelModel;
        $data = array(
            'nama_level'=>$this->request->getPost('nama'),
            'nama_level'=>$this->request->getPost('nama')
        );
        $model->saveLevel($data);
        echo '<script>
                alert("Sukses Tambah Data Level");
                window.location="'.base_url('level').'"
            </script>';
        echo "alert($data)";
    }
    public function edit($id){
        $model = new LevelModel;
        $getLevel= $model->getLevel($id)->getRow();
        if(isset($getLevel))
        {
            $data['getLevel'] = $getLevel;
            $data['title']  = 'Edit '.$getLevel->nama_level;
 
            echo view('level_view', $data);
            echo view('level_edit_view', $data);
            echo view('user_footer_view', $data);
 
        }else{
            echo '<script>
                    alert("ID level'.$id.' Tidak ditemukan");
                    window.location="'.base_url('level').'"
                </script>';
        }
    }
    public function update(){
        $model = new LevelModel;
        $id = $this->request->getPost('level_id');
        $data=array(
            "nama_level"=>$this->request->getPost('nama'));
           
        $model->editLevel($data,$id);
        echo '<script>
                alert("Sukses Edit Data Level");
                window.location="'.base_url('level').'"
            </script>';
    }

    public function hapus($id){
        $model = new LevelModel;
        $getLevel= $model->getLevel($id)->getRow();
        if(isset($getLevel)){
            $model->hapusLevel($id);
            echo '<script>
                    alert("hapus data Level sukses");
                    window.location="'.base_url('level').'"
                </script>';
        }else{
            echo '<script>
                    alert("hapus gagal!, ID level'.$id.' tidak ditemukan");
                    window.location="'.base_url('level').'"
                </script>';
        }
    }
}