<div class="container p-5">
    <a href="<?= base_url('level');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Level</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('level/add');?>">
                <div class="form-group">
                    <label for="">Nama Level</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
</div>