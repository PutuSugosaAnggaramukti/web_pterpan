<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class syarat extends Model
{
    protected $table ="syarat";
    protected $fillable = ['ipk','Semester','sks','syarat_lain','file','informasi_id'];

    public function informasi(){
        return $this->belongsTo('App\informasi');
    }
}
