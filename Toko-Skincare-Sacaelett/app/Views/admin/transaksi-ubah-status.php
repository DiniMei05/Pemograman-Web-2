<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Tambah SKINCARE</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar/skincare/tambah')?>" method="POST" 
    enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Skincare">Skincare</label>
            <input type="text" class="form-control" name="Skincare" id="Skincare">
        </div>
        <div class="mb-3">
            <label for="nama skincare">Nama Skincare</label>
            <input type="text" class="form-control" name="nama skincare" id="nama skincare">
        </div>
        <div class="mb-3">
            <label for="kategori skincare">Kategori skincare</label>
            <input type="text" class="form-control" name="kategori skincaret" id="kategori skincare">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-skincare')?>" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-primary">simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection();?>