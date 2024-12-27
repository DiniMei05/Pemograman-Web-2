<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Daftar Scarlett</h2>
<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>berhasil</strong> <?php session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>gagal!</strong> <?php session('error');?>
    </div>
</div>
<?php endif;?>


<div class="">
    <a href="<?= base_url('admin/daftar-skincare/tambah')?>" class="btn 
    btn-primary">tambah skincare</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">#</th>
                <th scope="col">skincare</th>
                <th scope="col">nama scarlett</th>
                <th scope="col">kategori scarlett</th>
                <th scope="col">katalog</th>
                <th scope="col">harga</th>
                <th scope="col">aksi</th>
            </tr>
            <thead>
                <tbody>
                    <?php foreach($skincare as $skincare): ?>
                    <tr>
                        <th scope="row"><?= $skincare['id_skincare']?></th>
                        <td><?= $buku['skincare']?></td>
                        <td><?= $buku['nama sacaelett']?></td>
                        <td><?= $buku['kategori scarlet']?></td>
                        <td><?= $buku['tahun']?></td>
                        <td>
                            <img src="<?= base_url('file-image/') . $skincare['kategori']?>" alt="" style="width: 150px
                            ; height:auto;">
                        </td>
                        <td>
                             <?= $skincare['harga']?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/daftar-skincare/edit') .  $skincare['id_skincare']?>" class="btn
                            btn-success">edit</a>
                            <a href="<?= base_url('admin/daftar-skincare/hapus') .  $skincare['id_skincare']?>" class="btn
                            btn-danger">hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>