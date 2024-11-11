<?php

require_once "Model/ListBuku.php";

class BukuController{

    public function jalankan(){
        // menggunakan model
        $daftar_buku_model = new ListBuku();
        $daftar_buku = $daftar_buku_model;

        // var_dump($daftar_buku->getData());
        // die();

        //mengirim dan menampilkan data ke View
        include_once "View/BukuView.php";
    }
}
    public function edit(){
        $id_buku = $_GET['ID_BUKU'];

        $daftar_buku = new ListBuku();
        $buku = $daftar_buku->getBukuByid($id_buku);

        if($buku){
            include_once "view/editbukuview.php";
        }else{
            header("location")
        }
        echo "edit";
    }

    public function update(){
        echo "update";
    }
     public function simpan(): never{
        //mengambil nilai dari form tambah pada bukuview
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
     }
        //buat objek buku dengan metod simpan di class buku
        $daftar_buku = new buku(judul: $judul, pengarang: $pengarang, penerbit: $penerbit, tahun: $tahun);

        //membuat session untuk menampilkan pesan berhasil atau gagal
        session_start();
        if($starus){
            $_SESSION['message'] = " Data buku deangan judul " . $buku->getjudul() ." Berhasil disimpan";

    
        }
        echo "simpan";
    










    public function hapus(){
         $id_buku = $_POST['id_buku'];


         $daftar_buku = new LIstBuku();
         $
        echo "hapus";
    }

}


