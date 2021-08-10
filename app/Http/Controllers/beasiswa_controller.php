<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beasiswa;
use App\informasi;

class beasiswa_controller extends Controller
{
    public function viewbeasiswa(){
        $input_beasiswa = beasiswa::all();
        $data_informasi = informasi::all();
        return view('beasiswa.admin_beasiswa',compact('input_beasiswa','data_informasi'));
    }

    public function statusbeasiswa(){
        $input_beasiswa = beasiswa::all();
        return view('mahasiswa.statusbeasiswa',compact('input_beasiswa'));
    }

    public function inputbeasiswa(){
        $data_informasi = informasi::all();
        return view('beasiswa.beasiswa',compact('data_informasi'));
    }

    public function tambahbeasiswa(Request $request){
        beasiswa::create($request->all());
        $data_informasi = informasi::all();
        return view('beasiswa.beasiswa',compact('data_informasi'));
      }

      public function vedit($id){
        $input_beasiswa = beasiswa::find($id);
        $data = [
            'title'=>'data beasiswa',
            'input_beasiswa'=>$input_beasiswa
        ];
        return view('beasiswa.validasi',$data);
    }

    public function viewdatabeasiswa($id,Request $request){
        $input_beasiswa = beasiswa::find($id);
        $input_beasiswa->nama = $request->input('nama');
        $input_beasiswa->nim = $request->input('nim');
        $input_beasiswa->ips = $request->input('ips');
        $input_beasiswa->periode = $request->input('periode');
        $input_beasiswa->transkrip = $request->input('transkrip');
        $input_beasiswa->surat_rekomen = $request->input('surat_rekomen');
        $input_beasiswa->status_beasiswa = $request->input('status_beasiswa');
        $input_beasiswa->save();
        return view('beasiswa.admin_beasiswa', compact('input_beasiswa'));
    }
}
