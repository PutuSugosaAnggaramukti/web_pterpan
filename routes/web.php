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

Route::get('/', function () {
    return view('welcome');
});

route::get('/login','homecontroller@index_login');
route::get('/loginadmin','homecontroller@login_admin');

//informasi beasiswa
route::get('/informasi','informasi_controller@index');
route::get('/tambah_informasi','informasi_controller@inputbeasiswa');
route::post('/informasi/tambah','informasi_controller@tambahinformasi');
route::get('/validasi_pinjaman','pinjaman_controller@pinjaman_admin');
route::get('/cekstatusbeasiswa','beasiswa_controller@statusbeasiswa');

//tampilan user
route::get('/website-user','tampilan_controller@viewbesiswa');
route::get('/syarat/{id}','tampilan_controller@viewsyarat')->name('viewidsyarat');

//tampilan syarat
route::get('/syarat','syarat_controller@index');
route::get('/tambah_syarat','syarat_controller@inputsyarat');
route::post('/syarat/tambah','syarat_controller@tambahsyarat');

//tampilan pinjaman
route::get('/pinjaman','pinjaman_controller@inputpinjaman');
route::post('/pinjaman/tambah','pinjaman_controller@tambahpinjaman');
route::get('/pinjaman-admin','pinjaman_controller@viewpinjaman');
route::get('/view_validasi/{id}','pinjaman_controller@vedit');
route::get('/prosesviewdata/{id}','pinjaman_controller@viewdatapinjaman')->name('prosesviewdata');
route::get('/cekstatuspinjaman','pinjaman_controller@statuspinjaman');

//tampilan mahasiswa
route::get('/mahasiswa','mhs_controller@viewmahasiswa');

//tampilan seleksi beasiswa
route::get('/beasiswa','beasiswa_controller@inputbeasiswa');
route::post('/beasiswa/tambah','beasiswa_controller@tambahbeasiswa');
route::get('/beasiswa-admin','beasiswa_controller@viewbeasiswa');
route::get('/view_beasiswa/{id}','beasiswa_controller@vedit');
route::get('/prosesviewdata/{id}','beasiswa_controller@viewdatabeasiswa')->name('prosesviewdata');

//edit data beasiswa diadmin
route::get('/proseseditbeasiswa/{id}','informasi_controller@editinformasi')->name('proseseditbeasiswa');
route::get('/editbeasiswa/{id}','informasi_controller@findEdit');

//delete beasiswa
route::get('/deletebeasiswa/{id}','informasi_controller@deleteinformasi');
