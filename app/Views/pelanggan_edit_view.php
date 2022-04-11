<div class="container p-5">
    <a href="<?= base_url('pelanggan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Pelanggan:<?=$pelanggan->nama_pelanggan;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pelanggan/update');?>">
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Telpon</label>
                    <input type="text" name="telp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" class="form-control" required>
                </div>
                <input type="hidden" value="<?=$pelanggan->id_pelanggan;?>" name="id_pelanggan">
                <button class="btn btn-success">Edit Data</button>
            </form>
        </div>
    </div>
</div>