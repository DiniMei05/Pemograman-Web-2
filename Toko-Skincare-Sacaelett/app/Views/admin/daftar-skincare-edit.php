<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Edit Barang</h2>

<div class="w-50">
    <form action="<?= base_url('admin/skincaresacaelatt/update/' . $skincare['id_skincare']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        
        <div class="mb-3">
            <label for="nama_sacaelet" class="form-label">Nama Sacaelet</label>
            <input type="text" name="nama_sacaelet" id="nama_sacaelet" class="form-control" value="<?= esc($skincare['nama_sacaelet']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="kategori_sacaaelet" class="form-label">Kategori Sacaelet</label>
            <input type="text" name="kategori_sacaelet" id="kategori_sacaelet" class="form-control" value="<?= esc($skincare['kategori_sacaelet']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="katalog" class="form-label">Katalog</label>
            <input type="number" name="katalog" id="katalog" class="form-control" value="<?= esc($sacaelet['katalog']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="file" name="harga" id="harga" class="form-control">
            <?php if (!empty($skincare['katalog'])): ?>
                <small>File saat ini: <?= esc($skincare['harga']); ?></small>
            <?php endif; ?>
        </div>

        <a href="<?= base_url('admin/skincaresacaelett'); ?>" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

<?= $this->endSection(); ?>