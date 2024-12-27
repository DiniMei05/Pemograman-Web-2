<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?> css/style.css">
  </head>

  <body>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-end">
                <a href="<?= base_url()?>chart" 
                class="btn btn-secondary">Keranjang Belanja<span class="badge 
                text-bg-secondary">1</span></a>
            </div>
        </div>
    </div>
    
        <div class="row bg-primary-subtle m-1">
                <div class="col-6 p-5">
                    <h1>Selamat datang Di Toko skincare sacaelett</h1>
                    <p>Kami Menyediakan skincare Sacaelett yang lengkap</p>
                    <a href="#" class="btn btn-success">Lihat Produk</a>
                </div>
                <div class="col-6 p-5">
                    <h1>Temukan Skincare Anda</h1>
                    <form action="">
                        <div class="mb-3">
                            <input type="text" class="form-control"
                            placeholder="Skincare">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control"
                            placeholder="Nama_Sacaelett">
                        </div>
                        <div class="mb-3"></div>
                            <input type="text" class="form-control"
                            placeholder="kategori">
                            <div class="mb-3">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                        
                        </div>
                    </form>
            </div>
            <h2>Buku Best Seller</h2>
            <div class="row mb-5 g-3">
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/sm02.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Day cream</h5>
                      <p class="card-text">Rp. 75.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/sra02.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Serum Acne</h5>
                      <p class="card-text">Rp. 75.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/sf02.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Fachl Wach brighly</h5>
                      <p class="card-text">Rp. 75.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/sss02.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Paket Sacaelet brighly</h5>
                      <p class="card-text">Rp. 250.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/sr02.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Serum brighly</h5>
                      <p class="card-text">Rp. 75.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            </div>
            <footer class="bg-success text text-white py-3 text text-center mt-5">
      <div class="container">
        Copyright 2024. Toko SKINCARE SACAELETT Kelas 3B DINI MEILANI PUTRI. All Rights Reserved
      </div>
    </footer>

    <?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <div class="py-5">
        <div class="alert alert-success">
            <strong>BERHASIL</strong> ORDER ANDA AKAN SEGERA DI PROSES
        </div>
        <div class="mt-5">
            <a href="<?= base_url() ?>" class="btn
            btn-secondary">Kembali Berbelanja</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>