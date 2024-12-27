<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
  </head>
  <body>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-end">
                <a href="<?= base_url()?>chart" class="btn 
                btn-secondary">Keranjang belanja <span class="badge 
                text-bg-warning">4</span></a>
            </div>
        </div>
        <div class="row bg-primary-subtle mb-5">
            <div class="col-6 p-5">
                <h1>Selamat Datang di toko buku online</h1>
                <p>Kami menyediakan buku-buku dari berbagai penerbit nasional</p>
                <a href="" class="btb btn-succes">Lihat produk</a>
            </div>
            
            <div class="col-6 p-5">
                <h1>Temukan Buku Favorite Anda!</h1>
                <form action="">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="pengarang" placeholder="Pengarang">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>                
            </div>
        </div>
        
        <h2>Buku Best Seller</h2>
        <div class="row mb-5 g-3">
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url()?>images/sa02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Paket Acne</h5>
                      <p class="card-text">
                        Rp. 250.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3 mb-5">
                <div class="card">
                    <img src="<?= base_url()?>images/sf02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">facial wash brighly</h5>
                      <p class="card-text">
                        Rp. 75.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url()?>images/sm02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Aku Bahagia </h5>
                      <p class="card-text">
                        Rp. 150.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url()?>images/ab02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Aku Bahagia</h5>
                      <p class="card-text">
                        Rp. 150.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url()?>images/ab02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Aku Bahagia</h5>
                      <p class="card-text">
                        Rp.150.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url()?>images/ab02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"> </h5>Aku Bahagia
                      <p class="card-text">
                        Rp.150.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url()?>images/ab02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Aku Bahagia  </h5>
                      <p class="card-text">
                        Rp.150.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url()?>images/ab02.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Aku Bahagia</h5>
                      <p class="card-text">
                        Rp.150.000,-
                      </p>
                      <a href="#" class="btn btn-primary">Add To Chart</a>bersikap
                    </div>
                  </div>
            </div>
        </div>
    </div>
<footer class="bg-danger-subtle py-3">
    <div class="container">
        Copyright 2024. Toko Buku Online Kelas B. All Rights reserved.
    </div>  
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>