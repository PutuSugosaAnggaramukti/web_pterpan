<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informasi;
use App\syarat;

class tampilan_controller extends Controller
{
    public function viewbesiswa(){
        $data_beasiswa = informasi::all()->sortByDesc('id');
        return view('layout.index',compact('data_beasiswa'));
    }

    public function viewsyarat($id){
        $data_syarat =syarat::where('id',$id)->get();
        //dd($data_syarat);
        return view('tampilan.syarat',compact('data_syarat'));
        
    }

}
