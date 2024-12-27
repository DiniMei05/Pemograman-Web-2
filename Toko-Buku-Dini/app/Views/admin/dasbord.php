<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Dashbord</h2>
<div class="row">
    <div class="col-8">
        <div class="rounded bg-success-subtle p-5">
            <h5>Total Pendapatan</h5>
            <h3>Rp.130.000.0000</h3>
        </div>
    </div>
    <div calss="col-4">
        <div class="rounded bg-secondary-subtle p-5">
            <h5>Total Transaksi</h5>
            <h3>145</h3>
        </div>
    </div>
</div>



<?= $this->endSection();?>