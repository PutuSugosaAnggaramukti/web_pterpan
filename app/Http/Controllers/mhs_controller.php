<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjaman;

class mhs_controller extends Controller
{
    public function viewmahasiswa(){
        $data_pinjaman = pinjaman::all();
        return view('mahasiswa.mahasiswa',compact('data_pinjaman'));
    }
}
