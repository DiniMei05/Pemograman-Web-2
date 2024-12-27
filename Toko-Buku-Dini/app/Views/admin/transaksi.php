<? $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Transaksi</h2>

<div class="">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>James smith</td>
                <td>9 des 2024 09.23 WIB</td>
                <td>Rp.250.000</td>
                <td>
                    <span class="badge-warning">Pending</span>
                </td>
                <td>
                    <a href="<? base-url('admin/transaksi/ubah-status')?>" class="btn btn-success">Ubah Status</a>
                    <a href="<? base-url('admin/transaksi/hapus')?>" class="btn btn-success">hapus</a>
                </td>
            <td>


