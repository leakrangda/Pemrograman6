<div class="container p-5">
    <a href="<?= base_url('user');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data User</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/add');?>">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="id_level" class="form-control">
                        <?php foreach($getLevel as $level){?>
                            <option value=<?=$level["level_id"];?>><?=$level["nama_level"];?></option>
                        <?php }?>
                    </select>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
</div>