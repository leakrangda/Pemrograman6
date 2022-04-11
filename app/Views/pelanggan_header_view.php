<div class="container pt-5">
    <a href="<?= base_url('pelanggan/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Telpon</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getPelanggan as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_pelanggan'];?></td>
                                <td><?= $isi['no_telpon'];?></td>
                                <td><?= $isi['status'];?></td>
                                <td>
                                    <a href="<?= base_url('pelanggan/edit/'.$isi['id_pelanggan']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('pelanggan/hapus/'.$isi['id_pelanggan']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data pelanggan ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
</div>