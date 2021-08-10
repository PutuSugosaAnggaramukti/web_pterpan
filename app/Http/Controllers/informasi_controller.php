<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informasi;

class informasi_controller extends Controller
{
    public function index(){
        $data_beasiswa = informasi::all();
        return view('informasi.index',compact('data_beasiswa'));
    }

    public function inputbeasiswa(){
        return view('informasi.tambah');
    }

   
    public function tambahinformasi(Request $request){
        $request->validate([
            'nama_beasiswa'=>'required',
            'kategori'=>'required',
            'keterangan'=>'required',
            'tgl_upload'=>'required',
            'gambar'=>'required|image|max:2048'
        ]);
        $image_tes = $request->file('gambar');
        $gambar_baru = rand().'.'.$image_tes->getClientOriginalExtension();
        $image_tes->move(public_path('images'),$gambar_baru); 
        $insert_data = array(
            'nama_beasiswa'=>$request->nama_beasiswa,
            'kategori'=>$request->kategori,
            'keterangan'=>$request->keterangan,
            'tgl_upload'=>$request->tgl_upload,
            'gambar'=>$gambar_baru
        );
        informasi::create($insert_data);
        return redirect('/informasi')->with('sukses','Data beasiswa berhasil ditambah !');
    }

    public function findEdit($id){
        $data_beasiswa = informasi::find($id);
        $data = [
            'tittle'=> 'informasi',
            'data_beasiswa'=>$data_beasiswa
        ];
        return view('informasi.updatebeasiswa',$data);
    }

    public function editinformasi($id, Request $request){
        $this->validate($request,[
            'nama_beasiswa'=> 'required',
            'kategori'=>'required',
            'keterangan' => 'required',
            'tgl_upload'=>'required'
        ]);

        $data_beasiswa = informasi::find($id);
        $data_beasiswa->nama_beasiswa = $request->nama_beasiswa;
        $data_beasiswa->kategori = $request->kategori;
        $data_beasiswa->keterangan = $request->keterangan;
        $data_beasiswa->tgl_upload = $request->tgl_upload;
        $data_beasiswa->save();
        return redirect('informasi')->with('sukses','Data beasiswa berhasil diubah !');
    }

    public function deleteinformasi($id){
        $data_beasiswa = informasi::find($id);
        $data_beasiswa->delete();
        return redirect()->back();
    }
}
