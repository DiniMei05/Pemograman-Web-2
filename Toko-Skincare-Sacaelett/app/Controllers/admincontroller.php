<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
    public function koleksiproduk()
    {
        $modelProduk = model('ProdukModel');
        $data['products'] = $modelProduk->findAll();

        return view('admin/koleksi-produk', $data);
    }
    public function koleksiprodukTambah()
    {
        return view('admin/koleksi-produk-tambah');
    }
    public function createProduk(){
        $data = $this->request->getPost();
        $file = $this->request->getFile('katalog');

        if(!$file->hasMoved()){
            $path = $file->store();
            $data['katalog'] = $path;
        }

        $produkModel = model('produkModel');

        if($produkModel->insert($data, false)){
            return redirect()->to('admin/koleksi-produk')->with('sukses', 'data berhasil disimpan');
        }else{
            return redirect()->to('admin/koleksi-produk')->with('eror', 'data gagal disimpan');
        }

        $produkModel->save($data);
    }
    public function koleksiprodukEdit()
    {
        return view('admin/koleksi-produk-edit');
    }
    public function koleksiprodukHapus()
    {
        return view('admin/koleksi-produk-hapus');
    }
    public function transaksi()
    {
        return view('admin/transaksi');
    }
    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }
    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }
    public function pelanggan()
    {
        return view('admin/pelanggan');
    }
    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }

    public function images($folder, $file){
        return $this->response->download(WRITEPATH . 'uploads/' . $folder . '/' . $file, null);
    }
}