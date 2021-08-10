<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    protected $table ="pinjaman";
    protected $fillable=['Nim','Nama','prodi','alamat_ktp','alamat_saatini',
    'no_hp','pekerjaan_ortu','jumlah_pinjaman','ktm','khs','daftar_nilai','slip_gaji',
    'kk','invoice','bayar_listrik','status_pinjaman'];
}