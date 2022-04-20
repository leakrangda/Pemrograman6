<div class="container pt-5">
    <a href="<?= base_url('level/tambah');?>" class="btn btn-success mb-2">Tambah Level</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Level</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>id Level</th>
                            <th>nama</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getLevel as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['level_id'];?></td>
                                <td><?= $isi['nama_level'];?></td>
                                <td>
                                    <a href="<?= base_url('level/edit/'.$isi['level_id']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('level/hapus/'.$isi['level_id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data level?')"
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