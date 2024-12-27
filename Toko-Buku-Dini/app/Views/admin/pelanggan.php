<? $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Pelanggan</h2>
<div class="mb-5">
    <table class="table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">No_hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </thead>
        </thead>
        <tbody>
           </tr>
                <th scope="col">1</th>
                <th scope="col">James Smith</th>
                <th scope="col">085378413876</th>
                <th scope="col">jl. lingkar barat 1</th>
                <th scope="row">
                    <a href="<?= base_url('admin/Pelanggan/hapus')?>" class="btn btn-dengar">Hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endsection();?>



                