<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Barang</title>
</head>
<body>
    <h1>Hapus Barang</h1>
    <p>Apakah Anda yakin ingin menghapus barang <strong><?= $skincare['nama_sacaelett'] ?></strong>?</p>

    <form action="<?= base_url('/admin/skincaresacaelett/hapus/' . $skincare['id_skincare']) ?>" method="post">
        <?= csrf_field() ?>
        <button type="submit">Hapus</button>
        <a href="<?= base_url('/admin/skincaresacaelett') ?>">Batal</a>
    </form>
</body>
</html>