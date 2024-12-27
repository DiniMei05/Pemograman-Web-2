<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Add authentication routes first


// Define other routes below
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');
$routes->post('/submit', 'Home::submit');

// admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/dashboard', 'AdminController::index');

$routes->get('/admin/daftar-skincare', 'AdminController::daftarskincare');
$routes->get('/admin/daftar-skincare/tambah', 'AdminController::daftarskincareTambah');
$routes->post('/admin/daftar-skincare/tambah', 'AdminController::createskincare');
$routes->get('/admin/daftar-skincare/edit', 'AdminController::daftarskincareEdit');
$routes->get('/admin/daftar-skincare/hapus', 'AdminController::daftarskincareHapus');

$routes->get('/admin/transaksi', 'AdminController::transaksi');
$routes->get('/admin/transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
$routes->get('/admin/transaksi/hapus', 'AdminController::transaksiHapus');

$routes->get('/admin/pelanggan', 'AdminController::pelanggan');
$routes->get('/admin/pelanggan/hapus', 'AdminController::pelangganHapus');

$routes->get('file-image/(:segment)/(:segment)', 'AdminController::image/$1/$2');