<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2>REVIEW ORDER</h2>
    <hr />
    <h5>Day Cream</h5>
    <h5>Rp75,000</h5>

    <h2 class="mt-3">Alamat Pengiriman</h2>
    <hr />
    <h5>Jl. Lingkar Barat 1, Kenali Asam, rt.33.</h5>

    <h2 class="mt-3">METODE BAYAR</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BRI DINI MEILANI PUTRI</h5>
    <h5>Rek. 0852345566767</h5>

    <div class="mt-4">
  <form action="<?= base_url('submit')?>" method="POST">
<button type="submit" class="btn btn-success mb-5">Submit Order</button>
</form>
</div>

</div>
<?= $this->endSection()?>