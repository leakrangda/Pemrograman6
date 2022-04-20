<div class="container p-5">
    <a href="<?= base_url('user');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data User:<?=$user->nama;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/update');?>">
                <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">level</label>
                    <select name="id_level" class="form-control">
                        <?php foreach($level as $lvl){?>
                            <option value=<?=$lvl["level_id"];?>><?=$lvl["nama_level"];?></option>
                        <?php }?>
                </div>
                <input type="hidden" value="<?=$user->id_user;?>" name="id_user">
                <button class="btn btn-success">Edit Data</button>
            </form>
        </div>
    </div>
</div>