<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Pelanggan_model;

class Pelanggan extends Controller{    
    public function index()    {
        $model = new Pelanggan_model;
        $data['title']= 'Data Pelanggan'; 
        $data['getPelanggan'] = $model->getPelanggan(); 
        echo view('pelanggan_header_view', $data); 
        echo view('pelanggan_view', $data); 
        echo view('pelanggan_footer_view', $data);
    }

    public function tambah()
    {
        $data['title']= 'Tambah Data Pelanggan';
        echo view('pelanggan_view', $data);
        echo view('pelanggan_tambah_view', $data);
        echo view('pelanggan_footer_view', $data);
    }

    public function add()
    {
        $model = new Pelanggan_model;
        $data = array(
            'nama_pelanggan' => $this->request->getPost('nama'),
            'no_telpon'         => $this->request->getPost('telp'),
            'status'  => $this->request->getPost('status'),
        );
        $model->savePelanggan($data);
        echo '<script>
                alert("Sukses Tambah Data Pelanggan");
                window.location="'.base_url('pelanggan').'"
            </script>';
    }
    public function edit($id)
    {
        $model = new Pelanggan_model;
        $getPelanggan = $model->getPelanggan($id)->getRow();
        if(isset($getPelanggan))
        {
            $data['pelanggan'] = $getPelanggan;
            $data['title']  = 'Edit '.$getPelanggan->nama_pelanggan;
 
            echo view('pelanggan_view', $data);
            echo view('pelanggan_edit_view', $data);
            echo view('pelanggan_footer_view', $data);
 
        }else{
 
            echo '<script>
                    alert("ID pelanggan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('pelanggan').'"
                </script>';
        }
    }
    public function update()
    {
        $model = new Pelanggan_model;
        $id = $this->request->getPost('id_pelanggan');
        $data = array(
            'nama_pelanggan' => $this->request->getPost('nama'),
            'no_telpon'         => $this->request->getPost('telp'),
            'status'  => $this->request->getPost('status'),
        );
        $model->editPelanggan($data,$id);
        echo '<script>
                alert("Sukses Edit Data Pelanggan");
                window.location="'.base_url('pelanggan').'"
            </script>';
    }

    public function hapus($id){
        $model = new Pelanggan_model;
        $getPelanggan = $model->getPelanggan($id)->getRow();
        if(isset($getPelanggan)){
            $model->hapusPelanggan($id);
            echo '<script>
                    alert("hapus data Pelanggan sukses");
                    window.location="'.base_url('pelanggan').'"
                </script>';
        }else{
            echo '<script>
                    alert("hapus gagal!, ID Pelanggan '.$id.' tidak ditemukan");
                    window.location="'.base_url('pelanggan').'"
                </script>';
        }
    }
    public function editPelanggan($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_pelanggan', $id);
        return $builder->update($data);
    }
 
    public function hapusPelanggan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_pelanggan' => $id]);
    }
}