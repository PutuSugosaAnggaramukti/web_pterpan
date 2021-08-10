<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beasiswa extends Model
{
    protected $table ="beasiswa";
    protected $fillable=['nama','nim','ips','periode','informasi_id','transkrip',
'surat_rekomen','status_beasiswa'];

public function informasi(){
    return $this->belongsTo('App\informasi');
}

}
