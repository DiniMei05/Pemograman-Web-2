<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Daftar Buku</h2>

<?php if(session('sukses')):?>
    <div class="mb-3">
        <div class="alert alert-success">
            <strong>Berhasil</strong> <?= session('sukses');?>
        </div>
    </div>
<?php endif;?>

<?php if(session('Error')):?>
    <div class="mb-3">
        <div class="alert alert-danger">
            <strong>Gagal!</strong> <?= session('Error');?>
        </div>
    </div>
<?php endif;?>

<div class="mb-3">
    <a href="<?= base_url('admin/daftar-buku/tambah')?>" class="btn btn-primary">Tambah Buku</a>
</div>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Cover</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $buku):?>
            <tr>
                <th scope="row"><?= $buku['id_buku']?></th>
                <td><?= $buku['judul']?></td>
                <td><?= $buku['pengarang']?></td>
                <td><?= $buku['penerbit']?></td>
                <td><?= $buku['tahun']?></td>
                <td>
                    <img src="<?= base_url('file-images/') . $buku['cover'] ?>" alt="" style="width: 150px; heigt: auto;">
                </td>
                <td>
                    <?= $buku['harga'] ?>
                </td>
                <td>
                    <a href="<?= base_url('admin/daftar-buku/edit/') . $buku['id_buku']?>" class="btn btn-succes">Edit</a>
                    <a href="<?= base_url('admin/daftar-buku/hapus/') . $buku['id_buku']?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?= $this->endSection();