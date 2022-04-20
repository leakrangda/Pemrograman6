<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\LevelModel;

class User extends Controller{    
    public function index()    {
        $model = new UserModel;
        $data['title']= 'Data User'; 
        $data["getUser"] = $model->getCompound(false);
        echo view('user_header_view', $data); 
        echo view('user_view', $data); 
        echo view('user_footer_view', $data);
    }

    public function tambah(){
        $data['title']= 'Tambah Data User';
        $model = new LevelModel;
        $data['getLevel']= $model->getLevel();
        echo view('user_view', $data); 
        echo view('user_tambah_view', $data); 
        echo view('user_footer_view', $data);
    }

    public function add(){
        $model = new UserModel;
        $data = array(
            'nama'      =>$this->request->getPost('nama'),
            'level_id'  => $this->request->getPost('id_level')
        );
        $model->saveUser($data);
        echo '<script>
                alert("Sukses Tambah Data User");
                window.location="'.base_url('user').'"
            </script>';
    }
    public function edit($id){
        $model = new UserModel;
        $levelModel = New LevelModel;
        
        $getUser= $model->getCompound($id)->getRow();
        $getLevel = $levelModel->getLevel();
        if(isset($getUser))
        {
            $data['user'] = $getUser;
            $data['level'] = $getLevel;
            $data['title']  = 'Edit '.$getUser->nama;
 
            echo view('user_view', $data);
            echo view('user_edit_view', $data);
            echo view('user_footer_view', $data);
 
        }else{
            echo '<script>
                    alert("ID User'.$id.' Tidak ditemukan");
                    window.location="'.base_url('user').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new UserModel;
        $id = $this->request->getPost('id_user');
        $data = array(
            'nama'      => $this->request->getPost('nama'),
            'level_id'  => $this->request->getPost('id_level')
        );
        $model->editUser($data,$id);
        echo '<script>
                alert("Sukses Edit Data User");
                window.location="'.base_url('user').'"
            </script>';
    }

    public function hapus($id){
        $model = new UserModel;
        $getUser= $model->getUser($id)->getRow();
        if(isset($getUser)){
            $model->hapusUser($id);
            echo '<script>
                    alert("hapus data Uer sukses");
                    window.location="'.base_url('user').'"
                </script>';
        }else{
            echo '<script>
                    alert("hapus gagal!, ID User'.$id.' tidak ditemukan");
                    window.location="'.base_url('user').'"
                </script>';
        }
    }
}