<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    protected $table = "informasi";
    protected $fillable = ['nama_beasiswa','kategori','keterangan','tgl_upload','gambar'];
}
