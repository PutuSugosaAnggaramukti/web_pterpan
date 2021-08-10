<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjaman;

class pinjaman_controller extends Controller
{
    public function viewpinjaman(){
        $data_pinjaman = pinjaman::all();
        return view('pinjaman.admin_pinjaman',compact('data_pinjaman'));
    }

    public function inputpinjaman(){
        return view('pinjaman.pinjaman');
    }

    public function statuspinjaman(){
        $data_pinjaman = pinjaman::all();
        return view('pinjaman.statuspinjaman',compact('data_pinjaman'));
    }

    public function tambahpinjaman(Request $request){
      pinjaman::create($request->all());
      return view('pinjaman.pinjaman');
    }

    public function vedit($id){
        $data_pinjaman = pinjaman::find($id);
        $data = [
            'title'=>'data pinjaman',
            'data_pinjaman'=>$data_pinjaman
        ];
        return view('pinjaman.validasi',$data);
    }

    public function viewdatapinjaman($id,Request $request){
        $data_pinjaman = pinjaman::find($id);
        $data_pinjaman->Nim = $request->input('Nim');
        $data_pinjaman->Nama = $request->input('Nama');
        $data_pinjaman->prodi = $request->input('prodi');
        $data_pinjaman->alamat_ktp = $request->input('alamat_ktp');
        $data_pinjaman->alamat_saatini = $request->input('alamat_saatini');
        $data_pinjaman->no_hp = $request->input('no_hp');
        $data_pinjaman->jumlah_pinjaman = $request->input('jumlah_pinjaman');
        $data_pinjaman->ktm = $request->input('ktm');
        $data_pinjaman->khs = $request->input('khs');
        $data_pinjaman->daftar_nilai = $request->input('daftar_nilai');
        $data_pinjaman->slip_gaji = $request->input('slip_gaji');
        $data_pinjaman->kk = $request->input('kk');
        $data_pinjaman->invoice = $request->input('invoice');
        $data_pinjaman->bayar_listrik = $request->input('bayar_listrik');
        $data_pinjaman->status_pinjaman = $request->input('status_pinjaman');
        $data_pinjaman->save();
        return view('pinjaman.admin_pinjaman');
    }
}