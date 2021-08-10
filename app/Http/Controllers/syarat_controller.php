<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\syarat;
use App\informasi;

class syarat_controller extends Controller
{
    public function index(){
        $data_syarat = syarat::all();
        $data_informasi = informasi::all();
        return view('syarat.index',compact('data_syarat'));
    }

    public function inputsyarat(){
        $data_informasi = informasi::all();
        return view('syarat.tambah',compact('data_informasi'));
    }

    public function tambahsyarat(Request $request){
        $request->validate([
            'ipk'=>'required',
            'Semester'=>'required',
            'sks'=>'required',
            'syarat_lain'=>'required',
            'file'=>'required',
            'informasi_id'=>'required'
        ]);
        $file = $request->file('file');
        $file_baru = rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('file_unggah'),$file_baru); 
        $insert_data = array(
            'ipk'=>$request->ipk,
            'Semester'=>$request->Semester,
            'sks'=>$request->sks,
            'syarat_lain'=>$request->syarat_lain,
            'file'=>$file_baru,
            'informasi_id'=>$request->informasi_id
        );
      
        syarat::create($insert_data);
        return redirect('/syarat')->with('sukses','Data syarat berhasil ditambah !');
    }
}
