<div class="container p-5">
    <a href="<?= base_url('level');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Level:<?=$getLevel->nama_level;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('level/update');?>">
                <div class="form-group">
                    <label for="">Nama Level</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <input type="hidden" value="<?=$getLevel->level_id;?>" name=level_id">
                <button class="btn btn-success">Edit Data</button>
            </form>
        </div>
    </div>
</div>