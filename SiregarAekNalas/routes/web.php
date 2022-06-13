<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Membuat Router pada bagian informasi
Route::get('/', 'InformasiController@index');
Route::get('/lokasi', 'InformasiController@lokasi');
Route::get('/foto', 'InformasiController@foto');
Route::get('/saran', 'InformasiController@saran');
Route::get('/ber', 'InformasiController@berita');
Route::get('/bacabaca/{id}', 'InformasiController@bacabaca');

// // membuat Router pada bagian login dan register
// Route::get('/login', 'InformasiController@login');
// Route::post('/login/proses', 'InformasiController@pro_login');
// Route::get('/register', 'InformasiController@register');
Route::post('/register/proses', 'InformasiController@pro_registrasi');
// Route::get('/logout', 'InformasiController@logout');

// // membuat Route pada bagian pengusaha
Route::group(['middleware' => 'CekLevel:Pengusaha'], function () {
    Route::get('/homee/{id}', 'PengusahaController@home');
    Route::get('/pengusaha', 'InformasiController@pengusaha');
    Route::get('/dataPribadii/{id}', 'PengusahaController@dataPribadi');
    Route::get('/tambah_produk/{id}', 'PengusahaController@tambah_produk');
    Route::get('/edit_Produk/{id}', 'PengusahaController@edit_produk');
    Route::get('/hapus/{id}', 'PengusahaController@hapus');
    Route::post('/edit/{id}', 'PengusahaController@edit');
    Route::get('/pesaanan/{id}', 'PengusahaController@pesanan');
    Route::post('/editgambarP/{id}', 'PengusahaController@editgambarP');
    Route::post('/editGambar/{id}', 'PengusahaController@editGambar');
    Route::post('/editData/{id}', 'PengusahaController@editData');
    Route::post('/pengusaha/tambah_produk/{id}', 'PengusahaController@tambahproduk');
    Route::post('/hapusPesanann/{id}', 'PengusahaController@hapusPesanan');
    Route::post('/lunas/{id}', 'PengusahaController@lunas');
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware' => 'CekLevel:Pembeli'], function () {
    Route::get('/home/{id}', 'PembeliController@home');
    Route::post('/buy/{id}', 'PembeliController@beli');
    Route::get('/dataPribadi/{id}', 'PembeliController@dataPribadi');
    Route::post('/editGambar/{id}', 'PembeliController@editGambar');
    Route::post('/editData/{id}', 'PembeliController@editData');
    Route::get('/pesanan/{id}', 'PembeliController@pesanan');
    Route::post('/beli/{id}', 'PembeliController@buy');
    Route::post('/hapusPesanan/{id}', 'PembeliController@hapus');
});

Route::group(['middleware' => 'CekLevel:Admin,Pengusaha'], function () {
    Route::get('/homee/{id}', 'AdminController@admin');
    Route::get('/daftarPE/{id}', 'AdminController@daftarPE');
    Route::get('/daftarPM/{id}', 'AdminController@daftarPM');
    Route::get('/blokir/{id}', 'AdminController@blokir');
    Route::get('/blokirPM/{id}', 'AdminController@blokirPM');
    Route::get('/umum/{id}', 'AdminController@umum');
    Route::post('/editUM/{id}', 'AdminController@editUM');
    Route::get('/gambarM/{id}', 'AdminController@gambarM');
    Route::post('/gambarEDP', 'AdminController@gambarEDP');
    Route::post('/editEGH/{id}', 'AdminController@editEGH');
    Route::get('/hapusGM/{id}', 'AdminController@hapusGM');
    Route::get('/BeritaA/{id}', 'AdminController@BeritaA');
    Route::get('/BeritaK/{id}', 'AdminController@BeritaK');
    Route::post('/simpanBerita', 'AdminController@simpan');
    Route::post('/EditBerita/{id}', 'AdminController@EditBerita');
    Route::get('/hapusberita1/{id}', 'AdminController@hapusberita');
    Route::get('/Info/{id}', 'AdminController@Info');
    Route::post('/tambahInfo', 'AdminController@tmInfo');
    Route::get('/lihat', 'AdminController@lihat');
    Route::get('/hapusberita/{id}', 'AdminController@hapusberita1');
    Route::get('/eeee/{id}', 'AdminController@eeee');
    Route::post('/eeee5/{id}', 'AdminController@eeee5');
});

Auth::routes();


