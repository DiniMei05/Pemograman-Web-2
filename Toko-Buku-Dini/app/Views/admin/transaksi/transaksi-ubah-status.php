<?= $this->extends('admin/tempalste')?>

<?= $this->section('main')?>
<h2 class="mb-5"Tambah Buku</h2>

<div class="w-5">
    <from action"<?= Base_url('admin/daftar-tambah')?>" metod="POST">
    <label for="pengarang">penerbit</label>
    <input type="file" name="